# MAIL SERVER
#######################################################
Self Hosted Email Server with postfixadmin + roundcubemail + dovecot + postfix + spamassassin
#######################################################

# Following resources depends on your users count.
# Supports up to 200 users.
# Supports up to 20k mail flow daily mail flow handles.

RAM: 2 GiB
SWAP: 2x RAM
Disk: 20GB OR your requirement as per user count.
CPU: 2 or 4 core.

# Operating System and Package Version:
OS: Centos 7
Dovecot: 2.2.36
Postfix: 2.10.1
SpamAssassin: 3.4.0
PHP: 7.4.16
Postfixadmin: 3.3.8
Roundcubemail: 1.4.11
Apache: 2.4.6

# Install required packages.

yum install -y epel-release yum-utils http://rpms.remirepo.net/enterprise/remi-release-7.rpm vim net-tools ; yum-config-manager --enable remi-php74 ; yum -y install postfix dovecot dovecot-mysql dovecot-pigeonhole mariadb-server telnet mailx wget ; yum -y install spamassassin ; yum install -y libopendkim opendkim; yum install -y postgrey spamassassin spamass-milter-postfix spamass-milter; yum install -y clamav-filesystem clamav-server clamav-update clamav-milter-systemd clamav-data clamav-server-systemd clamav-scanner-systemd clamav clamav-milter clamav-lib  clamav-devel; yum install -y php php-cli php-gd php-xml php-curl php-mysql php-zip php-mbstring php-mcrypt php-fpm php-imap php-common php-pdo php-intl php-imagick; yum update -y; yum clean all;

# Enable and start mariadb service.

systemctl enable mariadb && systemctl start mariadb && systemctl status mariadb

# Disable selinux.

getenforce
sed -i 's/SELINUX=enforcing/SELINUX=disabled/' /etc/selinux/config
setenforce 0

# Reboot server.

reboot

# Setup MySQL root password.

mysql_secure_installation

Configure it like this:
- Enter current password for root (enter for none): (Just Enter)
- Set root password? [Y/n] y
New password: <STRONGPASSWORD>
Re-enter new password: <STRONGPASSWORD>
Password updated successfully!
- Remove anonymous users? [Y/n] y
- Disallow root login remotely? [Y/n] y
- Remove test database and access to it? [Y/n] y
- Reload privilege tables now? [Y/n] y

# Create postfixadmin database and user.

mysql -u root -p;

ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'example#2345';
SELECT host, user FROM mysql.user;

CREATE DATABASE vmailadmin;
GRANT ALL PRIVILEGES ON vmailadmin.* TO 'vmailadmin'@'localhost' IDENTIFIED BY 'STRONGPASSWORD';
grant select on vmailadmin.* to 'vmailadmin'@'localhost' identified by 'STRONGPASSWORD';
FLUSH PRIVILEGES;
SELECT host, user FROM mysql.user;
exit

# Create roundcube database and user.

mysql -u root -p;

CREATE DATABASE roundcubemail CHARACTER SET utf8 COLLATE utf8_general_ci;
CREATE USER 'roundcube'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON roundcubemail.* TO 'roundcube'@'localhost';
FLUSH PRIVILEGES;
exit

# Create mailstore directory for store users mails in this location.

mkdir -p /mailstore/vmail
useradd -r -u 2000 -g mail -d /mailstore/vmail -s /sbin/nologin -c "MyHosted Virtual Mail User" vmail
mkdir -p /mailstore/vmail
chmod -R 770 /mailstore/vmail
chown -R vmail:mail /mailstore/vmail

# Take backup Postfix configuration.

cp -a /etc/postfix /etc/postfix_original

# Take backup Dovecot configuration.

cp -a /etc/dovecot /etc/dovecot_original

# Pull mailserver configuration from github.

cd /root/
git clone https://github.com/harishjadhav26/mail_server.git

# Remove default postfix and dovecot configuration.

rm -rf /etc/postfix

rm -rf /etc/dovecot

# Copy postfix and dovecot new config files.

cp -a /root/mail_server/postfix /etc/postfix

cp -a /root/mail_server/dovecot /etc/dovecot

# Copy postfixadmin and roundcubemail configuration in html.

cp -a /root/mail_server/postfixadmin /var/www/html/

cp -a /root/mail_server/roundcubemail /var/www/html/

# Import postfixadmin and roundcubemail DB.

mysql -u root -p vmailadmin < /root/mail_server/vmailadmin.sql
mysql -u root -p roundcubemail < /root/mail_server/roundcubemail.sql 

# Copy dovecot quota script.

cp /root/mail_server/quota-warning.sh /usr/local/bin/quota-warning.sh

# configure SpamAssassin.

cp /etc/mail/spamassassin/local.cf /etc/mail/spamassassin/local.cf_original

cp /root/mail_server/local.cf /etc/mail/spamassassin/local.cf

# PHP config file.

cp /etc/php.ini /etc/php.ini_original

cp  /root/mail_server/php.ini /etc/php.ini

# Add new user to run SpamAssassin. ** -g = add to group spamd, -s /bin/false = No shell (does not mean, cannot access via SSH!), -d = home dir **

groupadd spamd
useradd -g spamd -s /bin/false -d /var/log/spamassassin spamd
chown -R spamd:spamd /var/log/spamassassin

# Update the spam rules by running

time sa-update

# Update ownership to dovecot and postfix files.

touch /etc/postfix/sasl_passwd
touch /var/lib/postfix/smtpd_scache
postmap /etc/postfix/sasl_passwd
postmap /etc/postfix/master.cf
postmap /etc/postfix/main.cf
postmap /etc/postfix/sql/*.cf
postmap /etc/postfix/header_checks
postmap /etc/postfix/transport

# Update files permission.

chown -R root:postfix /etc/postfix/sql/*
sudo chmod 0640 /etc/postfix/sql/*
chown -R postfix. /var/lib/postfix/smtpd_scache

# Dovecot config permission and ownership update.

chown -R vmail.mail /var/run/dovecot/dict

# Update postfixadmin and roundcubemail configuration.

chown -R apache. /var/www/html/*

# Update apache virtualhost file.

cp /root/mail_server/httpd/* /etc/httpd/conf.d/

# Send mail from command line.

echo "hello" | mail -r harish@example.com -s "test sub" postmaster@example.com

# Service restart.

systemctl enable mariadb dovecot postfix httpd spamassassin php-fpm
systemctl restart mariadb dovecot postfix httpd spamassassin php-fpm
systemctl status mariadb dovecot postfix httpd spamassassin php-fpm

# Default password:
PostfixadminDB:
MySQL USER: vmailadmin
Password: STRONGPASSWORD

RoundcubemailDB:
MySQL User: roundcube
Password: password

Postfixadmin:
http://<IP/HOSTNAME>:8080
Superadmin User: postmaster@example.com
Password: password#123

Roundcubemail:
http://<IP/HOSTNAME>
User: postmaster@example.com
Password: password#123

# Reset User Password and DB, Set in Postfixadmin, Roundcubemail, Postfix and Dovecot as per your require meet.

sed -i 's/password = postfixadmin_password/password = STRONGPASSWORD/g' /etc/postfix/sql/*.cf

# Quota update for all domain users.
doveadm quota recalc -u *@*

# Quota verify.
sudo doveadm quota get -A

# Open ports in your firewall application and os level.

Service 	    Software 	Protocol 	Port
SMTP 	        Postfix 	TCP 	25
HTTP 	        Apache 	  TCP 	80
POP3 	        Dovecot 	TCP 	110
IMAP 	        Dovecot 	TCP 	143
HTTPS 	      Apache 	  TCP 	443
SMTPS 	      Postfix 	TCP 	465
Submission 	  Postfix 	TCP 	587
IMAPS 	      Dovecot 	TCP 	993
POP3S   	    Dovecot 	TCP 	995
ManageSieve 	Dovecot 	TCP 	4190

# Suggestion use Nginx as frontend server.
This server is not warranty and guaranty

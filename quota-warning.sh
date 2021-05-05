#!/bin/bash
PERCENT=$1
USER=$2
cat << EOF | /usr/sbin/sendmail $USER -O "plugin/quota=maildir:User quota:noenforcing"
From: postmaster@example.com
Subject: User mailbox quota warning $PERCENT% used.

Hello $USER,

Your mailbox is now $PERCENT% used.
Please remove old mails to send and receive mails.

EOF


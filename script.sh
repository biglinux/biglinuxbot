#!/bin/bash

TZ="America/Fortaleza" date +"%d/%m/%Y - %H:%M:%S" >> /var/log/cron/service

i=0

while [ $i -lt 30 ]; do
 echo "-------------------------"
 TZ="America/Fortaleza" date +"%d/%m/%Y - %H:%M:%S" >> /var/log/cron/bot
 echo "-------------------------"
 wget --no-check-certificate https://biglinuxbot-rafepel.c9users.io/ > /var/log/cron/bot 2>&1
 i=`expr $i + 1`
 sleep 2
done

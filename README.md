# Pixel
Assignment
pixel6.sql file is present in the database folder.
Run newform.php for profile submission
Pune/profile.php?name=Aditya   (I am trying to create a URL Like domainname/firstname-lastname using htaccess but htaccess fails to load the image.)
The code which i am trying to use for htaccess is as follows
RewriteEngine on

RewriteRule ^First index.php [NC,L]


RewriteRule ^PROFILE$ profile.php [L]

RewriteRule ^PROFILE/([a-zA-Z0-9\-=&_@\.\,\)\(]*)$ profile.php?param1=$1 [L]

So, to access any profile from the database use URL -  Pune/profile.php?name=Aditya 

Thank you , Tried my best !!!

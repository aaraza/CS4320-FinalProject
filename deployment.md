Deploying a flask application is quite tricky.
First make sure that you have installed apache2 and mongoDB.

The next step is to install flask:
```
pip install Flask

```

Next make a directory called "flask-dev".
The content of this directory will be populated with every file in the Source folder on the git repo.

ec2-35-164-234-183.us-west-2.compute.amazonaws.com

Open the host file:

```
vim /etc/hosts

```

Paste this line on top:
```
127.0.0.1 ec2-35-164-234-183.us-west-2.compute.amazonaws.com

```

This will direct the url to run the application that is running on the server

Navigate to:
```
cd /etc/apache2/sites-available/

```

Make a file called "myapp.conf"

The content of this file will be:
```
<virtualhost *:80>
    ServerName ec2-35-164-234-183.us-west-2.compute.amazonaws.com

    WSGIDaemonProcess webtool user=flask group=www-data threads=5 home=/var/www/flask-dev/
    WSGIScriptAlias / /var/www/flask-dev/myapp.wsgi

    <directory /var/www/flask-dev>
        WSGIProcessGroup webtool
        WSGIApplicationGroup %{GLOBAL}
        WSGIScriptReloading On
        Order deny,allow
        Allow from all
    </directory>
</virtualhost>

```


Enable the virual host:
```
  sudo a2ensite myapp.conf

```


Restart Apache:
```
  sudo /etc/init.d/apache2 restart

```

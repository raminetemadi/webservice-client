# webservice-client
This is a small prject for creating an online calculator using web service. This repository contains client side
here are some of features for this project :
* It uses MVC architecture in PHP
* I used my custom framework that inherited from PHP Yii framework
* It uses SOAP for web servie
* I added Bootstrap in front-end and used it
* I used twig as template engine
For installation you need to create virtual host, I used following virtual host for client :
```
<VirtualHost *:80>
   DocumentRoot "[your folder for client files]"
   ServerName webservice-client.dev
   ServerAlias www.webservice-client.dev
   <Directory "[your folder for client files]">
      Order allow,deny
      Allow from all
   </Directory>
</VirtualHost>
```

And for the server :

```
<VirtualHost *:80>
   DocumentRoot "[your folder for server files]"
   ServerName webservice-server.dev
   ServerAlias www.webservice-server.dev
   <Directory "[your folder for server files]">
      Order allow,deny
      Allow from all
   </Directory>
</VirtualHost> 
```

Thanks,
Ramin.
etemadi@gmail.com
http://etemadipour.com

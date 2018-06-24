# ser322-final-project

# ==============================================================================
Overview
--------
TODO: describe project

# ==============================================================================
Environment
-----------
You will need a web server which can use PHP (such as Apache) as well as PHP 
itself and MySSQL installed and configured correctly.
Depending on your system, copy the PHP files in /php to a location served up by 
your web server.

# ==============================================================================
MySQL User
----------
Currently, mysqli_connect.php which connects to the MySQL database requires that
a MySQL user 'encryptedUser' with password 'secretPass' extists, to add such 
user:

    mysql -u root -p
    mysql> CREATE USER 'encryptedUser'@'localhost'
           IDENTIFIED WITH caching_sha2_password BY 'secretPass';

Alternatively, edit the file mysqli_connect.php with appropriate username and 
password to suit your MySQL installation. The password must be identified with
caching_sha2_password.

# ==============================================================================
Database
--------
mysqli_connect.php connects to a database called 'fifaDB', to access this data:
Create a MySQL database called fifaDB on the system:

    mysql -u root -p
    mysql> CREATE DATABASE fifaDB;
    mysql> GRANT ALL ON fifaDB.* TO 'encryptedUser'@'localhost';
    
Then, import the MySQL dump in fifaDB-sample/ to this database:
    
    mysql -u root -p fifaDB < path/to/fifaDB.sql

To verify the database loaded correctly and is accessible:

    mysql -u encryptedUser -p
    mysql> USE fifaDB;
    mysql> SHOW TABLES;
    mysql> SELECT * FROM stadium;

# ==============================================================================
Interface
---------
TODO: complete interface instructions

In your browser localhost/php/interface.php displays the database tables and 
provides a small query demonstration.

# ==============================================================================
Resources
---------
    This resource helped configure Apache, PHP, MySQL for this project:
        https://www.znetlive.com/blog/how-to-install-apache-php-and-mysql-on-
        windows-10-machine/
    This resource helped develop the this document & the initialization process 
    for the application: 
        https://github.com/edlangley/inventory-webapp
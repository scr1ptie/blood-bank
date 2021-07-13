# blood-bank
A simple site that uses php to connect to a mysql database and store and display data to the web page.

Login to your MySQL database as root and run the following commands for the site to work:

```
mysql> create database blood;
Query OK, 1 row affected (0.00 sec)

mysql> create user blood@localhost identified by 'blood';
Query OK, 0 rows affected (0.01 sec)

mysql> grant all on blood.* to blood@localhost;
Query OK, 0 rows affected (0.01 sec)

mysql> flush privileges;
Query OK, 0 rows affected (0.00 sec)
```

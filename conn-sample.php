<?
// PLEASE EDIT AND RENAME AS "conn.php"
// In this file you should put your info for database connection

// Please change as follow:
// "host": your host for SQL ("localhost" or other)
// "user": your SQL username
// "password": your SQL password
// "db_name": the name of your database

$link = mysql_connect("host", "user", "password"); 
mysql_select_db("db_name");

$email_me = "username@example.com";

?>


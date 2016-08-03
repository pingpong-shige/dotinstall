<?php

/*
#3 PDOの設定をしていこう
define('DB_DATABASE', 'dotinstall_db');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'fx591276');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname='. DB_DATABASE);

try{
	//connect(PDOクラスのインスタンス生成)
	$db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


}catch(PDOException $e){
	echo $e->getMessage();
	exit;
}

*/

/*
 #4 exec()を使ってみよう
 define('DB_DATABASE', 'dotinstall_db');
 define('DB_USERNAME', 'dbuser');
 define('DB_PASSWORD', 'fx591276');
 define('PDO_DSN', 'mysql:dbhost=localhost;dbname='.DB_DATABASE);

 try{
 //connect(PDOクラスのインスタンス生成)
 $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 //insert
 $db->exec("insert into users (name, score) values('shigeta', 55)");
 echo "user added!";

 //disconnect
 $db = null;


 }catch(PDOException $e){
 echo $e->getMessage();
 exit;
 }

*/
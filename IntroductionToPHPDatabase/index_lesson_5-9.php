<?php


/*
 #5 prepare()を使ってみよう
 define('DB_DATABASE', 'dotinstall_db');
 define('DB_USERNAME', 'dbuser');
 define('DB_PASSWORD', 'fx591276');
 define('PDO_DSN', 'mysql:dbhost=localhost;dbname='.DB_DATABASE);

 try{
 //connect(PDOクラスのインスタンス生成)
 $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//    (1) exec(): 結果を返さない、安全なSQL
//    (2) query():結果を返す、安全、何回も実行されないSQL
//    (3) prepare():結果を返す、安全対策が必要、複数回実行されるSQL


 $stmt = $db->prepare("insert into users (name, score) values(?, ?)");
 $stmt->execute(['shigeta', 44]);
 echo "inserted!". $db->lastInsertscoId();

 //insert
//  $db->exec("insert into users (name, score) values('shigeta', 55)");
//  echo "user added!";

 //disconnect
 $db = null;


 }catch(PDOException $e){
 echo $e->getMessage();
 exit;
 }

 */

/*
#6 名前付きパラメータを使ってみよう

define('DB_DATABASE', 'dotinstall_db');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'fx591276');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname='.DB_DATABASE);

try{
	//connect(PDOクラスのインスタンス生成)
	$db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$stmt = $db->prepare("insert into users (name, score) values(:name, :score)");
	$stmt->execute([':name'=>'shigeta', ':score'=>80]);
	echo "inserted:". $db->lastInsertId();

	//insert
	//  $db->exec("insert into users (name, score) values('shigeta', 55)");
	//  echo "user added!";


}catch(PDOException $e){
	echo $e->getMessage();
	exit;
}
*/

/*
#7 bindValue()を使ってみよう

define('DB_DATABASE', 'dotinstall_db');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'fx591276');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname='. DB_DATABASE);

try{
	$db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$stmt = $db->prepare("insert into users (name, score) values (?, ?)");

	$name = 'shigeta';
	$stmt->bindValue(1, $name, PDO::PARAM_STR);
	$score = 44;
	$stmt->bindValue(2, $score, PDO::PARAM_INT);
	$stmt->execute();
	$score = 44;
	$stmt->bindValue(2, $score, PDO::PARAM_INT);
	$stmt->execute();

}catch(PDOEXeption $e){
	echo $e->getMessage();
	exit;
}
*/

/*
#8 bindParam()を使ってみよう

define('DB_DATABASE', 'dotinstall_db');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'fx591276');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname='. DB_DATABASE);

try{
	$db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$stmt = $db->prepare("insert into users (name, score) values (?, ?)");

	$name = 'shigeta';
	$stmt->bindParam(1, $name, PDO::PARAM_STR);
	$score = 44;
	$stmt->bindParam(2, $score, PDO::PARAM_INT);
	$stmt->execute();
	$score = 44;
	$stmt->bindParam(2, $score, PDO::PARAM_INT);
	$stmt->execute();

}catch(PDOEXeption $e){
	echo $e->getMessage();
	exit;
}

*/

/*
#9 query()で全件抽出をしてみよう

define('DB_DATABASE', 'dotinstall_db');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'fx591276');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname='. DB_DATABASE);

try{
	$db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	$stmt = $db->query("select * from users");
	$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
	foreach($users as $user){
		var_dump($user);
	}
	echo $stmt->rowCount(). "records found.";

}catch(PDOEXeption $e){
	echo $e->getMessage();
	exit;
}
*/


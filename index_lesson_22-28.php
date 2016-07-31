<?php


/*
//#22 staticキーワードを使ってみよう
class User{
	public $name;
	public static $count = 0;
	public function __construct($name){
		$this->$name = $name;
		self::$count++;
	}

	public function sayHi(){
		echo "hi, I am $this->name!";
	}

	public static function getMessage(){
		echo "hello from User class";
	}
}

User::getMessage();

$tom = new User("Tom");
$bob = new User("Bob");

echo User::$count;
*/


//#23 抽象クラスを使ってみよう
/*
abstract class BaseUser{
	public $name;
	abstract public function sayHi();
}

class User extends Baseuser{
	public function sayHi(){
		echo "hello from User";
	}
}

$user = new User();
$user->sayHi();
*/

/*
//#24 インターフェースを使ってみよう

interface sayHi{
	public function sayHi();
}

interface sayHello{
	public function sayHello();
}

class User implements sayHi, sayHello{
	public function sayHi(){
		echo "hi!";
	}

	public function sayHello(){
		echo "hello!";
	}

}

$user = new User();

$user->sayHi();
$user->sayHello();
*/

/*
//#25 外部ファイルを読み込んでみよう

//require: fatal error
//require_once

//require "User.class.php";

//include: warning
//include_once

//autoload

spl_autoload_register(
		function($class){
	require $class . ".class.php";
}
);

$bob = new User("Bob");
$bob->sayHi();
*/

/*
//#26 名前空間を使ってみよう

require "User.class.php";

//use Dotinstall\Lib as Lib;
use Dotinstall\Lib;

$bob = new Lib\User("Bob");
$bob->sayHi();
*/

/*
//#27 例外処理をしてみよう

function div($a, $b){
	try{
		if($b === 0){
			throw new Exception("cannot divide by 0!");
		}
		echo $a / $b;
	}catch(Exception $e){
		echo $e->getMessage();

	}
}

div(7, 2);
div(5, 0);

*/

/*
//#28 フォームからのデータを処理しよう

$username = '';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$username = $_POST['username'];
	$err = false;
	if(strlen($username) > 8){
		$err = true;
	}
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>Chec Username</title>
</head>
<body>
	<form action="" method="POST">
		<input type="text" name="username" placeholder="user name" value=
		"<?php echo htmlspecialchars($username,ENT_QUOTES, 'UTF-8'); ?>">
		<input type="submit" value="Check!">
		<?php if($err) { echo "Too long!";} ?>
	</form>
</body>

</html>
*/
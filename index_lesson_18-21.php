<?php

//#18 クラスとインスタンスを理解しよう

/*
//#19 クラスを作ってみよう

class User{
	//property
	public $name;

	//constructor
	public function __construct($name){
		$this->name = $name;
	}


	//method
	public function sayHi(){
		echo "hi, I am $this->name!";
	}

}

$tom = new User("Tom");
$bob = new User("Bob");

echo $tom->name;
$bob->sayHi();
*/


/*
//#20 クラスを継承してみよう

//親クラス
class User{
	//property
	public $name;

	//constructor
	public function __construct($name){
		$this->name = $name;
	}


	//method
	final public function sayHi(){
		echo "hi, I am $this->name!";
	}

}

//子クラス
class AdminUser extends User{
	public function sayHello(){
		echo "hello from Admin!";
	}

	//override
	public function sayHi(){
		echo "[admin]hi, I am $this->name!";
	}

}

$tom = new User("Tom");
$steve = new AdminUser("Steve");

echo $steve->name;
$steve->sayHello();
$steve->sayHi();
$tom->sayHi();

*/

//#21　アクセス権について理解しよう

//親クラス
class User{
	//property
	//public $name;
	protected $name;

	//constructor
	public function __construct($name){
		$this->name = $name;
	}

	//method
	public function sayHi(){
		echo "hi, I am $this->name!";
	}

}

//子クラス
class AdminUser extends User{
	public function sayHello(){
		echo "hello from Admin!";
	}

	//override
	public function sayHi(){
		echo "[admin]hi, I am $this->name!";
	}
}

$tom = new User("Tom");

echo $tom->name;
//$tom->sayHi();//error

$bob = new AdminUser("Bob");
$bob->sayHi();






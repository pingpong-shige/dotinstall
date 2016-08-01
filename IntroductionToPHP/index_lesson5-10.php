<?php

/*
//#5 定数をつかってみよう

define("MY_EMAIL","shige@dotinstall.com");

echo MY_EMAIL;

//MY_EMAIL = "new_shige@dotinstall.com";

var_dump(__LINE__);
var_dump(__FILE__);
var_dump(__DIR__);
*/

/*
//#6 数値の演算をしてみよう

//+ - * / % **(べき乗）※php5.6-

$x = 10 % 3; //1
$y = 30.2/4; //7.55

var_dump($x);
var_dump($y);

//単項演算子

$z = 5;
$z++ ; //6
var_dump($z);

$z--; //5
var_dump($z);

//代入を伴う演算子

$x = 5;
$x *= 2;//10
var_dump($x);
*/


/*
//#7 文字列を扱ってみよう
//""特殊文字(\n,\t) 変数　の展開ができる
//''展開ができない

$name = "taguchi";
$s1 = "hello $name!\nhello again!";
$s1 = "hello ${name}!\nhello again!";
$s1 = "hello {$name}!\nhello again!";
$s2 = 'hello $name!\nhello again!';
var_dump($s1);
var_dump($s2);


//連結
$s = "hello"."world";
var_dump($s);
echo $s;

$a = "hello"+"world";
var_dump($a);//0

*/


/*
//#8 if文で条件分岐

//比較演算子　> < >= <= == (値のみ）=== (値と型) != !==
//論理演算子　and && , or ||, !

$score = 60;

if($score > 80){
	echo "great!";
}else if($score > 60){
	echo "good!";
}else{
	echo "so so ...";
}

*/

/*
//#9 真偽値について理解しよう

/*
 * #falseになる場合
 * 文字列：空、"0"
 * 数値：0、0.0
 * 論理値： false
 * 配列：要素の数が0
 * null
 */
/*
$x = 5;
if($x){
	echo "great";
}

//三項演算子

$a = 10;
$b = 20;

$max = ($a > $b) ? $a : $b;

if ($a > $b) {
	$max = $a;
} else {
	$max = $b;
}

echo $max;

*/

//#10 switch文で条件分岐

$signal = "green";

switch ($signal){
	case "red":
		echo "stop";
		break;

	case "blue";
	case "green";
	echo "go";
	break;

	case "yellow";
	echo "caution";
	break;

	default:
	echo "wrong signal";
}
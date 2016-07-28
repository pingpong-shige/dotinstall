<?php

/*
//#11 while文でループ処理

$i = 0;
while($i < 10){
	echo $i;
	$i++;
}

$i = 100;

do{
	echo $i;
	$i--;
}while($i > 10);
*/

//#12 for文でループ処理をしてみよう


/*
for($i = 0; $i < 10; $i++){
	if($i === 5){
		//break;
		continue;
	}
	echo $i;
}
*/

/*
//#13 針列を使ってみよう

$sales = array(
		"taguchi" => 200,
		"fkoji" => 800,
		"dotinstall" => 600,
);

//php5.4-

$sales = [
		"taguchi" => 200,
		"fkoji" => 800,
		"dotinstall" => 600,
];

var_dump($sales["fkoji"]);//800
$sales["fkoji"] = 900;
var_dump($sales["fkoji"]);//900


$colors = ["red","blue","pink"];
var_dump($colors[2]);//blue
*/

/*
//#14 foreachを使ってみよう
$sales = [
		"taguchi" => 200,
		"fkoji" => 800,
		"dotinstall" => 600,
];

foreach($sales as $key => $value){
	echo "($key) $value";
}

$colors = ["red","blue","pink"];

foreach($colors as $value){
	echo "$value,";
}


//コロン構文

foreach($colors as $value):
	echo "$value,";
endforeach;

?>

<ul>
<?php foreach($colors as $value):?>
<li><?php echo "$value,";?></li>
<?php endforeach;?>
</ul>
*/


/*
//#15関数を使ってみよう

// sayHi("Tom");
// sayHi("Bob");
// sayHi();

$x = sayHi();
var_dump($x);

function sayHi($name = "taguchi"){
	//echo "hi!".$name;
	return "hi!".$name;
}

*/

/*
//#16 ローカル変数を理解しよう

$lang = "ruby";

function sayHi($name){
	$lang = "php";
	echo "hi! $name from $lang";
}

sayHi("Tom");
var_dump($lang);

*/

//#17 便利な組み込み関数

$x = 5.6;
// echo ceil($x); //6 切り上げ
// echo floor($x); //5 切り捨て
// echo round($x); //6 四捨五入
// echo rand(1,10); //ランダム

//$s1 = "hello";
$s2 = "ねこ";
//echo strlen($s1); //5 文字数カウント
//echo strlen($s2);
echo mb_strlen($s2); //2　マルチバイト文字数カウント
//printf("%s - %s - %.3f",$s1,$s2,$x);

$colors = ["red","blue","pink"];
echo count($colors);
echo implode("\n",$colors);

<?php



echo "hello from the TOP again</br>\n";

/*
 php5.4以降、ビルトインサーバ機能(簡易ウェブサーバ)が導入されている。
 ・PHP本体の機能。
 ・コマンドプロンプトにて
 　「php -S localhost:8000」を実行するだけでサーバーが起動できる
 ・コマンドを実行したディレクトリがウェブルートになる。
 ・ウェブルートを指定する場合は -t オプションで指定する。
 　ex)「php -S localhost:8000 -t /home/USERNAME/public_html」など。
 ・あくまでも簡易サーバなので本番運用には向かない。
 */

//echoo "hello from the TOP";
//エラーの確認をしたいときもビルトインサーバのログを見るとよい
//（コマンドプロンプトに随時表示される）

$msg = "test message\n";
echo $msg;
var_dump($msg);
?>



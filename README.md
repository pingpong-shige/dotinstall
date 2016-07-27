参考サイト
http://www.adminweb.jp/apache/install/index2.html

Ver9Environment

三原 隆良 edited this page  on 10 May   


Edit Page New Page 




  Pages 16  
Code 
Database 
Development 
Environment 
Home 
JMeter 
Marge 
Progress 
Redmine 
Repository 
Selenium 
Ver9Environment 
Ver9Info 
Ver9URL 
WWBCV2MigratorDevelopment 

Show more 1 pages... 

 Add a custom sidebar
 
Clone this wiki locally 

  
 


開発環境構築手順

必要ファイル一覧

•インストーラー等
◦gitURL：http://172.25.37.48:8080/gitbucket/git/WaWaOffice/Document.git
◦上記リポジトリの　WaWaV9情報/環境構築/開発環境（Windows）　フォルダにインストールファイル一式がある
◦以降の手順ではC:\SourceTree\WaWaOffice\Documentにクローンしたものとして説明する


•ソースファイル
◦gitURL：http://172.25.37.48:8080/gitbucket/git/WaWaOffice/WaWaOffice.git
◦以降の手順ではC:\SourceTree\WaWaOffice\WaWaOfficeにクローンしたものとして説明する


Ver9開発環境セットアップ手順

•hosts設定
◦"C:\Windows\System32\drivers\etc\hosts"の末尾に以下を追記192.168.10.141 wawav9 wawav9.vm



•Apache2.4インストール
1.開発環境（Windows）フォルダのhttpd-2.4.17-win32-VC11.zipを解答してC:\Program Files\Apache Software Foundation\Apache24に移動
2."C:\Program Files\Apache Software Foundation\Apache24\conf\httpd.conf"を編集1.変更◾37行目ServerRoot "C:/Program Files/Apache Software Foundation/Apache24"

◾244,245行目DocumentRoot "C:/Program Files/Apache Software Foundation/Apache24/htdocs"
<Directory "C:/Program Files/Apache Software Foundation/Apache24/htdocs">


2.追記◾178行目LoadModule php5_module "C:/php/php-5.6.15-Win32-VC11-x86/php5apache2_4.dll"

◾429行目AddType application/x-httpd-php .php .html

◾末尾PHPIniDir "C:/php/php-5.6.15-Win32-VC11-x86"
DirectoryIndex index.html index.htm index.html.var index.php
Alias /office9 "C:/SourceTree/WaWaOffice/WaWaOffice/htdocs/office9"
<Directory "C:/SourceTree/WaWaOffice/WaWaOffice/htdocs/office9">
  Options All
  AllowOverride ALL
  Require all granted
  AddDefaultCharset utf-8
  Options FollowSymLinks
</Directory>



3.サービスに追加1.コマンドプロンプトで以下を実行>cd "c:\Program Files\Apache Software Foundation\Apache24"
>bin\httpd.exe -k install -n "Apache 24"

2.他のバージョンのApacheがインストールされている場合はwindowsのサービスから自動起動をオフにし、同時起動しないようにしておく

4.Apacheを起動後、ブラウザでhttp://localhost/を表示し、「It works!」が表示されればＯＫ


•PHP5.6インストール
1.php-5.6.15-Win32-VC11-x86.zip を解凍して C:\php\php-5.6.15-Win32-VC11-x86 に移動
2.php.ini-development をコピーして php.ini にリネーム
3.php.iniファイルを以下のように編集1.追記◾737行目extension_dir = "C:/php/php-5.6.15-Win32-VC11-x86/ext"


2.変更◾以下のコードの「;」（コメント）を削除extension=php_gd2.dll
extension=php_mbstring.dll
extension=php_pdo_pgsql.dll
extension=php_pgsql.dll

◾以下のコードの値を変更max_execution_time = 300
max_input_time = 600
memory_limit = -1
post_max_size = 25M
upload_max_filesize = 25M



4.環境変数PATHの追記◾システムのプロパティ＞詳細設定＞環境変数＞システム環境変数「PATH」の最後に以下を追記(libpq.dll の存在するパスを指定);C:\php\php-5.6.15-Win32-VC11-x86\


5.C:\Program Files\Apache Software Foundation\Apache24\htdocsに以下のファイルを作成し、http://localhost/phpinfo.phpをブラウザで表示しphpの設定情報ページが表示されればＯＫ◾C:\Program Files\Apache Software Foundation\Apache24\htdocs\phpinfo.php<?PHP
phpinfo();
?>




•ソースファイル環境設定
1."C:\SourceTree\WaWaOffice\WaWaOffice\webapp\office9\config.php"を以下のように編集◾()内の第２引数を以下のように変更define("MAIN_DB_HOST", "192.168.10.141");
define("MAIN_DB_PORT", "5432");
define("MAIN_DB_NAME", "ptest");
define("MAIN_DB_USER", "postgres");
define("MAIN_DB_PASS", "zzzzzz");
define("CREATE_BASE_URL", "http://localhost/");
define("CREATE_BASE_FOLDER_PATH", "C:/SourceTree/WaWaOffice/WaWaOffice/htdocs/");
define("CREATE_BASE_FOLDER_NAME", "office9");
define("CREATE_BASE_CONFIG_PATH", "C:/SourceTree/WaWaOffice/WaWaOffice/webapp/office9/");
define("CREATE_BASE_CONFIG_NAME", "config.dummy");

◾末尾に追加require_once ("LogWriter.class.php");


2."C:\SourceTree\WaWaOffice\WaWaOffice\webapp\office9\LogWriter.class.php"を作成◾内容<?php
class LogWriter {
  static public function write($str){
      $fno = fopen(LOG_DIR . 'debug_oec.log', 'a');
      fwrite($fno, date("[Y-m-d H:i:s] ") . print_r($str, true) . "\n");
      fclose($fno);
  }
}
?>


3.http://localhost/office9/にアクセスしログイン画面が表示されること、ログインを行い問題なく操作できることを確認する


•eclipseインストール＆設定
1.開発環境（Windows）フォルダのeclipse-php-mars-1-win32.zipを解答してC:\eclipse\eclipse-php-mars-1-win32に移動
2.開発環境（Windows）フォルダのpleiades_1.6.0.zipを解答してC:\eclipse\eclipse-php-mars-1-win32\eclipseに上書き
3."C:\eclipse\eclipse-php-mars-1-win32\eclipse\eclipse.ini"を以下のように編集1.一行目に追記-vm
C:/Program Files/Java/jre7/bin/javaw.exe
↑バージョン7以上の任意のjavaw.exeのパス ※64bitOSの場合はProgram Files(X86)フォルダを指定すること、Javaフォルダがない場合は32bit版のjdkをインストールすること
2.末尾に追記-Xverify:none
-javaagent:plugins/jp.sourceforge.mergedoc.pleiades/pleiades.jar


4."C:\eclipse\eclipse-php-mars-1-win32\eclipse\eclipse.exe -clean.cmd"を実行する（初回のみ）
5.ワークスペースを「C:\workspace\WaWaOffice」に作成する
6.初期設定1.ツールバーのウインドウ＞設定を開く
2.左ツリーの一般＞コンテンツ・タイプを開き、右枠内のテキスト＞PHPコンテンツ・タイプを開く
3.ウインドウ下側の追加ボタから「*.html」を追加する
4.左ツリーの一般＞ワークスペースを開き、ウインドウ下付近のテキストファイルのエンコードを「その他：UTF-8」に設定する
5.ＯＫをクリックして画面を閉じる

7.ソースファイルを取り込む1.ツールバーのファイル＞新規＞PHPプロジェクトを開く
2.以下の設定を行い次へをクリック◾プロジェクト名：WaWaOffice
◾内容：既存ロケーションにプロジェクトを作成
◾ディレクトリー：C:\SourceTree\WaWaOffice\WaWaOffice

3.次へをクリックしていき、PHPビルド・パス が以下のようになっているのを確認して完了をクリック◾WaWaOffice◾インクルード：（すべて）
◾除外：（なし）


4.問題にエラーが表示されていなければOK



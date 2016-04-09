<?php
	//check installed ?
	//$lvyi_db = new SaeMysql();
	//$lvyi_sql = "SELECT `tk_user_login`,`tk_user_pass` FROM `tk_user` where `uid`=1";
	//$lvyi_result = $lvyi_db->getLine( $lvyi_sql );
	//$lvyi_db->closeDb();
	//$lvyi_status = false;
	//if( $lvyi_result && ($lvyi_result['tk_user_login']=='admin') ){
	//	$lvyi_status = true;
	//}
	//jump
	//if( $lvyi_result == false ){
	//	header("Content-type: text/html; charset=utf-8"); 
	//	echo '你还没有安装WSS，请在<a href="/sae/install.php?r='.rand().'">这里</a>一键安装WSS。';
	//	exit();
	//}

$hostname_tankdb = getenv('MYSQL_CONNECTION');      //database  host 
$database_tankdb = getenv('MYSQL_INSTANCE_NAME');             //database name
$username_tankdb = getenv('MYSQL_USERNAME');           //mysql user name
$password_tankdb = getenv('MYSQL_PASSWORD');           //mysql password

$tankdb = mysql_connect($hostname_tankdb, $username_tankdb, $password_tankdb);

require "function.class.php";

$language = "cn";
$advsearch = get_item( 'advsearch' );
$outofdate = get_item( 'outofdate' ) ;
?>
<?php require "multilingual/language_$language".".php"; ?>
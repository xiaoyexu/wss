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
	//	echo '�㻹û�а�װWSS������<a href="/sae/install.php?r='.rand().'">����</a>һ����װWSS��';
	//	exit();
	//}

$db_port= 3306;
$db_host= 10.10.26.58;

$hostname_tankdb = "uhFZqO2avKXcVu7H:pTAkv";      //database  host 
$database_tankdb = "xJZGVt1MiDNPQbml";             //database name
$username_tankdb = "pTAkwmsILti0CGBNY";           //mysql user name
$password_tankdb = "uhFZqO2avKXcVu7H";           //mysql password

$tankdb = mysql_connect($hostname_tankdb, $username_tankdb, $password_tankdb);

require "function.class.php";

$language = "cn";
$advsearch = get_item( 'advsearch' );
$outofdate = get_item( 'outofdate' ) ;
?>
<?php require "multilingual/language_$language".".php"; ?>
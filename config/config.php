<?php 
	$dblocation="localhost";
	$dbname="site";
	$dbuser="root";
	$dbpassword="";
	$tbl_maintexts="maintexts";
	$dbx=mysql_connect($dblocation,$dbuser,$dbpassword);
	if(!$dbx){
		exit("ошибка соединения с базой данных");
	}
	$dbuse=mysql_select_db($dbname,$dbx);
	if(!$dbuse){
		exit("ошибка выбора базы данных fghf");
	}
	@mysql_query("SET NAMES 'utf8'");
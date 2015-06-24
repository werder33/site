<?php require_once('templates/top.php');
if($_GET["url"]){
	$file=$_GET["url"];
}
else{
	$file="index";
}
$query="SELECT*FROM $tbl_maintexts WHERE url='$file'";
$adr=mysql_query($query);
if(!$adr){
	exit($query);
}
$text=mysql_fetch_array($adr);// из запроса делает массив
?>
<div class="container">

<?=$text["body"];?>
	</div>
 <?php require_once('templates/bottom.php');?>













 
  
  

 
 
    
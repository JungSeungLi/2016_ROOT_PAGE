<?php
$answer=$_POST['answer'];
$connect=mysql_connect("localhost","root","4dminroot!");
mysql_select_db("test",$connect);
$sql="select answer from web where answer='$answer'";
$info=mysql_query($sql,$connect);
while($result=mysql_fetch_array($info))
	{
		$dbanswer=$result[answer];
	}		
session_start();
$_SESSION['answer']=$dbanswer;
?>
<meta http-equiv='refresh' content='0;url=momo.php'>
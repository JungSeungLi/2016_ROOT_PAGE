<?php
if(!$_COOKIE['Song'])
{
SetCookie("Song","Jelly_Jelly");
echo("<meta http-equiv=refresh content=0>");
}
?>
<html>
<head>
<title>ONE IN A MILLION</title>
</head>
<body>
<img src='SweetDream.jpg'>
<?php
if($_COOKIE['Song']=='SweetDream'){
	echo("<meta http-equiv=refresh content=0;web3_2.php>");
}
else{
	SetCookie("Song","Jelly_Jelly");
}
?>
<br><br>
if(!$_COOKIE['Song'])
{
<br>
SetCookie("Song","Jelly_Jelly");
<br>
echo("meta http-equiv=refresh content=0");<br>
}<br><br>
모모는 철부지 모모는 무지개<br>
모모는 생을 쫓아가는 시곗바늘이다.<br><br>
if($_COOKIE['Song']=='SweetDream'){<br>
echo("meta http-equiv=refresh content=0;web3_2.php");<br>
}<br>
else{<br>
SetCookie("Song","Jelly_Jelly");<br>
}<br>
</body>
</html>
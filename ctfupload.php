<!-- multistep form -->
<?php
session_start();
if($_SESSION['name']!='root'){
?>
<script>
        alert('부적절한 침입을 감지하였습니다.');
        location.href='index.php';
</script>
<?php
exit();
}
else
{
?>


<html>
<head><meta http=equiv="Content=Type" content="text/html; charset=utf-8">

    <link href="assets/css/signup.css" rel="stylesheet" />
    <link href="assets/css/ctf.css" rel="stylesheet" />
    <link href="assets/css/modal.css" rel="stylesheet" />
    <script type="text/javascript" src="assets/js/modal.js"></script>
  
    <?php include("head.html"); ?>
<style type="text/css">
<!--
body{
background-color:black;
color:white;
border-color:white;
}
//-->
</style>
</head>
<body>
<?php include("header.php");?>
    
<center>
    
<div id="jb-container">
<center>
<form action="ctfupload_db.php" method="POST">
<input type="text" style="background-color:black;" placeholder="Title" name="title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" style="background-color:black;" placeholder="Answer" name="answer">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select style="background-color:black;" name="track"><option>Track</option><option value="web">Web</option><option value="reversing">Reversing</option><option value="forensic">Forensic</option><option value="programming">Programming</option><option value="misc">Misc</option><option value="warmingup">WarmingUp</option></select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<Br>
<textarea style="background-color:black;" rows="10" cols="60" name="content">
</textarea>
<input type="submit" style="background-color:black;" value="문제 제출">
</form>
</center>
</div>
</body>
</html>
<?php
}
?>


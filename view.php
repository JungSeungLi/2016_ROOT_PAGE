<!-- multistep form -->
<? session_start(); ?>

<?php
if(isset($_SESSION['email']))
{
}
else
{
    header('Location: ./index.php'); 
}
?>
<html>
<head>

    <link href="assets/css/signup.css" rel="stylesheet" />
    <link href="assets/css/ctf.css" rel="stylesheet" />
    <link href="assets/css/modal.css" rel="stylesheet" />
    <script type="text/javascript" src="assets/js/modal.js"></script>
  
    <?php include("head.html"); ?>
</head>
<body>
<?php include("header.php");?>
    
<center>
    
<div id="jb-container">
          <center><h2><?php 
$idx=$_GET['idx'];
$connect=mysqli_connect("localhost","root","4dminroot!","userimp");
$sql="select * from question where idx='$idx'";
$a=mysqli_query($connect,$sql);
$r=mysqli_fetch_assoc($a);
echo $r['title']."(".$r['point'].")";
?></h2></center>
          <?php
                    echo $r['content'];
            ?>
           <br>
    </div>
    
    </center>
</body>
</html>
<?php
?>

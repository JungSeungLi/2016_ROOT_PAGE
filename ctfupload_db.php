<?php
session_start();
if($_SESSION['name']!='root'){
?>
<script>
alert('부적절한 침입 감지');
location.href='index.php';
</script>
<?php
exit();
}
include "sqlconn.php";
$title=$_POST['title'];
$content=$_POST['content'];
$track=$_POST['track'];
$answer=$_POST['answer'];
$sql="insert into question(opoint,title,content,track,answer,clearer,point) values(300,'$title',:content,'$track',:answer,0,300)";
$stmt=$pdo->prepare($sql);
$stmt->bindValue(":content",$content);
$stmt->bindValue(":answer",$answer);
$stmt->execute();
?>
<script>
history.go(-1);
</script>

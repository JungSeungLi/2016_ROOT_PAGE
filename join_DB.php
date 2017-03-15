<? session_start(); ?>
   

   <?php
    
    $title = $_POST['title'];
    $content = $_POST['content'];
    

    include "sqlconn.php";
    

    $sql='INSERT INTO board (
    name,student_id,o_phone,title,content,time
    ) 
    values (:name,:student_id,:o_phone,:title,:content,:time)';
    
    $stmp = $pdo->prepare($sql);
    $stmp->bindValue(':name', $_SESSION['name']);
    $stmp->bindValue(':student_id', $_SESSION['student_id']);
    $stmp->bindValue(':o_phone', $_SESSION['o_phone']);
    $stmp->bindValue(':title', $title);
    $stmp->bindValue(':content', $content);
    $stmp->bindValue(':time', date("Y-m-d"));
    $stmp->execute();
 
    $pdo = null;
    header('Location: ./joinroot_page.php');
?>
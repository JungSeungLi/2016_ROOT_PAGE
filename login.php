<?    session_start();?>

<?php
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
    include "sqlconn.php";
    
    $sql = "select * from user_imp where email=:email and passwd=:passwd"; 
    $stmt = $pdo->prepare($sql); 
    $stmt->bindValue(':email', $email); 
    $stmt->bindValue(':passwd', $passwd); 
    $stmt->execute(); 
    $result = $stmt->fetchAll(); 
    $isSuccess = $result ? true : false; 
    
    
    if($isSuccess){ 
       $_SESSION['email'] = $email;
    
    foreach($result as $row)
    {
        $_SESSION['score'] = $row['score'];
        $_SESSION['name'] = $row['user_name'];
        $_SESSION['student_id'] = $row['student_id'];
        $_SESSION['o_phone'] = $row['o_phone'];
    }
        
       
    echo "<script>history.go(-1);</script>";
      
    ?>
    <?php
    }else
    {
    ?>

        <script> alert("아이디 또는 비밀번호를 확인해주세요"); 
            history.go(-1);
                    exit;</script>
        <?php
    }

    $pdo = null;
?>
<?php

    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
    $user_name = $_POST['user_name'];
    $student_id = $_POST['student_id'];

    $o_phone;
    switch($_POST['o_phone'])
    {
        case 1: $o_phone = "010"; break;
        case 2: $o_phone = "011"; break;
        case 3: $o_phone = "016"; break;
        case 4: $o_phone = "017"; break;
        case 5: $o_phone = "018"; break;
        case 6: $o_phone = "019"; break;
    }
    $o_phone = $o_phone."-".$_POST["o_phone2"]."-".$_POST["o_phone3"];

    
    include "sqlconn.php";
    
    $sql = "SELECT * FROM user_imp WHERE email='{$email}'";

    $stmh = $pdo->query($sql);
    $result = $stmh -> fetchAll();
    
    foreach($result as $row)
    {
        if($row['email'] == $email)
        {
?>
                <script>
                    alert("중복된 아이디가 있습니다.");
                    location.href="signup_page.php";
                    exit;
                </script>
<?php
        }
    }


    $sql='INSERT INTO user_imp (
    email,passwd,user_name,student_id,o_phone
    ) 
    values (:email,:passwd,:user_name,:student_id,:o_phone)';
    
    $stmp = $pdo->prepare($sql);
    $stmp->bindValue(':email', $email);
    $stmp->bindValue(':passwd', $passwd);
    $stmp->bindValue(':user_name', $user_name);
    $stmp->bindValue(':student_id', $student_id);
    $stmp->bindValue(':o_phone', $o_phone);
    $stmp->execute();?>
    
    <script>
        location.href="index.php";
        alert("회원가입이 완료되었습니다");
        exit;
    </script>

<?=
    $pdo = null;
?>
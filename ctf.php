<!-- multistep form -->

<?php
session_start();
?>

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
<head><meta http=equiv="Content=Type" content="text/html; charset=utf-8">

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
    <form id="ctfform" action="php_answer.php" method="post">
<fieldset>
	<input type="text" placeholder="Answer형식 = rootCTF('flag') " disabled />
        <input type="text" placeholder="Answer" name="answer"/>
<input type="submit" value="정답제출">
    </fieldset>
</form>
     
      <div id="jb-content">


<center><h2>Warming Up</h2></center>
          <?php
                            include "sqlconn.php";
                            $sql="select * from question where track='warmingup'";
                            $stmt=$pdo->prepare($sql);
                            $stmt->execute();
                            foreach($stmt as $row){
                                $idx=$row['idx'];
                                $point=$row['point'];
                                $title=$row['title'];
                                $content=$row['content'];
       echo "<a href='view.php?idx=$idx'><button><div class='bttitle' style='color:black; font-size:17px;'>$title</div>($point)</button></a>";                                                      };
            ?>
           <br><br><br><br><br><br>

<center><h2>Misc</h2></center>
          <?php
                            include "sqlconn.php";
                            $sql="select * from question where track='misc'";
                            $stmt=$pdo->prepare($sql);
                            $stmt->execute();
                            foreach($stmt as $row){
                                $idx=$row['idx'];
                                $point=$row['point'];
                                $title=$row['title'];
                                $content=$row['content'];
       echo "<a href='view.php?idx=$idx'><button><div class='bttitle' style='color:black; font-size:17px;'>$title</div>($point)</button></a>";
                                                        };
           ?>
           <br><br><br><br><br><br>
          <center><h2>Web</h2></center>
          <?php
                            include "sqlconn.php";
                            $sql="select * from question where track='web'";
                            $stmt=$pdo->prepare($sql);
                            $stmt->execute();
                            foreach($stmt as $row){
                                $idx=$row['idx'];
                                $point=$row['point'];
                                $title=$row['title'];
                                $content=$row['content'];
                            
                           echo "<a href='view.php?idx=$idx'><button><div class='bttitle' style='color:black; font-size:17px;'>$title</div>($point)</button></a>";
							};
          
                            echo "<br>";
            ?>
           <br><br><br><br><br><br>

           
            <center><h2>Reversing</h2></center>
          <?php
               $sql="select * from question where track='reversing'";
                            $stmt=$pdo->prepare($sql);
                            $stmt->execute();
                            foreach($stmt as $row){
                                $idx=$row['idx'];
                                $point=$row['point'];
                                $title=$row['title'];
                                $content=$row['content'];
          echo "<a href='view.php?idx=$idx'><button><div class='bttitle' style='color:black; font-size:17px;'>$title</div>($point)</button></a>";
                          
							};
            ?>
           <br><br><br><br><br>

           <br>
            <center><h2>Forensic</h2></center>
          <?php
                            include "sqlconn.php";
                            $sql="select * from question where track='forensic'";
                            $stmt=$pdo->prepare($sql);
                            $stmt->execute();
                            foreach($stmt as $row){
                                $idx=$row['idx'];
                                $point=$row['point'];
                                $title=$row['title'];
                                $content=$row['content'];
       echo "<a href='view.php?idx=$idx'><button><div class='bttitle' style='color:black; font-size:17px;'>$title</div>($point)</button></a>";
							};
           ?>
           <br><br><br><br><br><br>

            <center><h2>Programming</h2></center>
          <?php
                            include "sqlconn.php";
                            $sql="select * from question where track='programming'";
                            $stmt=$pdo->prepare($sql);
                            $stmt->execute();
                            foreach($stmt as $row){
                                $idx=$row['idx'];
                                $point=$row['point'];
                                $title=$row['title'];
                                $content=$row['content'];
       echo "<a href='view.php?idx=$idx'><button><div class='bttitle' style='color:black; font-size:17px;'>$title</div>($point)</button></a>";
							};
            ?>
           <br><br><br><br><br><br>




    
      </div>
      <div id="jb-sidebar">
          <center><h2>CTF Rank</h3></center>
        <ul>
            <?php
                $number = 1;
                include "rank.php";
                foreach($result as $row)
                {
		if($row['user_name']!='root'){
                    print "No.".$number.$row['user_name'].$row['score']."점"."<br>";
                    $number++;
												}
                }
                $number = 1;
            
            ?>  
        </ul>
      </div>
      <div id="jb-footer">
        <p>비정상적인 방법으로 답을 찾았을 경우를 대비해 대회 종료후 문제풀이를 제출하셔야 합니다</p>
      </div>
    </div>
    
    
   <div id="modalLayer">
  <div class="modalContent">
    <a href="#">모달창 테스트</a> 
    <button type="button">닫기</button>
  </div>
    </div>
    
    
</body>
</html>

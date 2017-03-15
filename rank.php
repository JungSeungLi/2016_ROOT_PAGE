<?    session_start();?>
<?php



 include "sqlconn.php";
    $sql="select * from user_imp";
    $ssql="select * from question";
    $sstmt=$pdo->prepare($ssql);
    $sstmt->execute();
    $rresult=$sstmt->fetchAll();
    $stmt=$pdo->prepare($sql);
    $stmt->execute();
    $result=$stmt->fetchAll();
    foreach($result as $row){
    $student_id=$row['student_id'];
    $clearidx=$row['clearidx'];
    $score=0;
    $clearidx=explode(",",$clearidx);
    	foreach($rresult as $rrow){
		foreach($clearidx as $idx){
			if($idx==$rrow['idx'])
				$score=$rrow['point']+$score;
}
} 
   $sssql="update user_imp set score='$score' where student_id='$student_id'";
   $ssstmt=$pdo->prepare($sssql);
   $ssstmt->execute();
}
    $sql = "select * from user_imp order by score desc"; 
    $stmt = $pdo->prepare($sql); 
    $stmt->execute(); 
    $result = $stmt->fetchAll(); 

    
        
?>

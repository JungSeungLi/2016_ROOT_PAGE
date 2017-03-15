<?php

try{
    $pdo = new pdo('mysql:host=59.18.118.179;dbname=userimp;charset=utf8','root','4dminroot!'); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
}
catch(Exception $e) {
    echo $e->getMessage();
    return false;
}

?>
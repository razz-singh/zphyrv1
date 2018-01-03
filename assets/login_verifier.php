<?php
$serverName = "localhost";
$userName = "root";
$passwordDb = "";



$password=md5($_POST['pass']);

$userid=$_POST['username'];


if($password==""||$userid==""){
    echo "fail";
    return 0;
}


try {
    $conn = new PDO("mysql:host=$serverName;dbname=zephrydb", $userName, $passwordDb);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    // use exec() because no results are returned
   
    $stmt = $conn->prepare("SELECT id, password FROM login where id='$userid' AND password='$password';"); 
    $stmt->execute();
     
    $data="";
    while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
      $data = $row[0] . "\t" . $row[1] .  "\n";
       echo $data;
     
    }
    if($data==""){
       return 0;
    }
    else{
       return 1;
    }
   
    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
   

?>
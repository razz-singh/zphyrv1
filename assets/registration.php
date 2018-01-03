<?php
$serverName = "localhost";
$userName = "root";
$passwordDb = "";

$email=$_POST['email'];

$password=md5($_POST['pass']);
$firstName=$_POST['firstname'];
$lastName=$_POST['lastname'];
$country=$_POST['country'];
$state=$_POST['state'];
$gamePreference=$_POST['gamepreference'];
$loginType="social";


date_default_timezone_set('Indian/Maldives'); echo date('d-m-Y H:i');
$timeDate=date("Y-m-d H:m:s");
$gender=$_POST['gender'];
$userid=$_POST['username'];

if(!$userid){
   die("you are dead");
}



echo $timeDate;
try {
    $conn = new PDO("mysql:host=$serverName;dbname=zephrydb", $userName, $passwordDb);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO registration (USERID,FIRST_NAME,LAST_NAME,EMAIL,PASSWORD,COUNTRY,STATE,GAME_PREFERENCE,LOGIN_TYPE,CREATE_TIME,GENDER)
    VALUES ('$userid','$firstName','$lastName','$email','$password','$country','$state','$gamePreference','$loginType','$timeDate','$gender');";
    // use exec() because no results are returned
   
    $conn->exec($sql);
    
    echo "Registration successfully";
    
    $loginDataSQL="INSERT INTO login (id,password)
    VALUES ('$userid','$password');";
    $conn->exec($loginDataSQL);
    echo "login data set";
    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
   

?>
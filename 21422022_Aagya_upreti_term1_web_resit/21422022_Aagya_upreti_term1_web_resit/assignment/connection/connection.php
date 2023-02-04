<?php

$server = "db";
$username ="student";
$password = "student";
$dbname ="database";
//try catch method is used for connecting database
try{
    
    $connect = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
 
}
 catch(PDOException $e){

    $e->getMessage();
    echo "No connected";
    


}

?>
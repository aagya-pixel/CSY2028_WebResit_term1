<?php
///database connection
include('../connection/connection.php');
if(isset($_GET['category_Id'])){
   //getting category id into variable
$IdCategory = $_GET['category_Id'];
//To delete, use the delete SQL query.
 $queryStatement =$connect->prepare("DELETE FROM  category WHERE category_Id = $IdCategory");
 //executing the query
 $queryStatement->execute();
 if($queryStatement){
   //if $queryStatement executes success is shown in adminCategory page
    header('location: adminCategory.php');
 }
}

?>
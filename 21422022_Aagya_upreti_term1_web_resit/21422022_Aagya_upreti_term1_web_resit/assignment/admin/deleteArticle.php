<?php
///database connection
include('../connection/connection.php');
//To delete, use the delete SQL query.
 $queryStatement =$connect->prepare("DELETE FROM  article WHERE article_Id =". $_GET['article_Id']);
 //executing query
 $queryStatement->execute();
 if($queryStatement){
  // if $queryStatement executes success is shown in adminCategory page
    header('location: adminArticle.php');
 }


?>
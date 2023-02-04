<?php
///database connection
require('../connection/connection.php');
//including HTML for the header page
require('../user/header.php');


if(isset($_GET['art_Id'])){
    ///GETS the id from another page and posts it to the database
    $IdArticle = $_GET['art_Id'];
    //A select query is used to retrieve data.
    $queryStatement = $connect->prepare("SELECT * FROM article WHERE article_Id = ?");
    //bindparam is used to bind a parameter to the specified variable name
    $queryStatement->bindparam(1,$IdArticle);
    //executing query
    $queryStatement->execute();
      $returnData = $queryStatement->fetch(PDO::FETCH_OBJ);//PDO:: FETCH_OBJ fetch in object form
}
 echo '<nav>
 <ul>
 <li><a href="adminpage.php">Home</a></li>
 <li><a href="adminArticle.php">Manage Article</a></li>
  <li><a href="adminCategory.php">Manage Category</a></li>
 
 <li><a href="logout.php">logout</a></li>			
 </ul>
 </nav>
 <img src="../images/banners/randombanner.php" />><main>
 <nav>
 </nav>
 <article>';
 ?>
 <form action="" method="POST">
 <input type="hidden" name="phonenumber" value="<?= $returnData->id;?>"/>
 <h2>Update Admin:</h2>
 <label>title</label>
 <input type="text" name="title" value="<?= $returnData->title;?>"/>
 <label>description</label>
 <input type="text" name="content" value="<?= $returnData->content;?>"/>
 <input type="submit" name="updateArt" value="Update" /> 

<?php

if(isset($_POST['updateArt'])){
/// obtaining user fields in a different variable
    $post_title = $_POST['title'];
    $post_description = $_POST['content'];
   // To update, use the update query.
    $SQLquery = 'UPDATE article SET title = ? , content = ? WHERE article_Id = '.$_GET['art_Id'];
    $queryStatement = $connect->prepare($SQLquery);
    ////bindparam is used to bind a parameter to the specified variable name
    $queryStatement->bindparam(1,$post_title);
    $queryStatement->bindparam(2,$post_description);
   //executing the query
    $queryStatement->execute();

}



//joining footer.php file
require('../user/footer.php');
?>
<?php
///database connection
require('../connection/connection.php');
//including HTML for the header page
require('../user/header.php');

 if(isset($_GET['category_Id'])){
  //GETS the id from another page and posts it to the database
    $IdCategory = $_GET['category_Id'];
       //A select query is used to retrieve data.
    $queryStatement = $connect->prepare("SELECT * FROM category WHERE category_Id = ?");
    //bindparam is used to bind a parameter to the specified variable name
    $queryStatement->bindparam(1,$IdCategory);
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
<img src="../images/banners/randombanner.php" />
<main>
<nav>
</nav>
<article>';
?>
<form action="" method="POST">
<input type="hidden" name="phonenumber" value="<?= $returnData->id;?>"/>
<h2>Update Category:</h2>
<label>Category Name</label>
<input type="text" name="catName" value="<?= $returnData->categoryName;?>"/>
<input type="submit" name="updateCat" value="Update" /> 


<?php
// POST data into data base using bindparam
if(isset($_POST['updateCat'])){
  //getting field name into variable
    $categoryName = $_POST['catName'];
    // To update, use the update query.
    $SQLquery = 'UPDATE category SET categoryName = ? WHERE category_Id = '.$_GET['category_Id'];
    $queryStatement = $connect->prepare($SQLquery);
    //bindparam is used to bind a parameter to the specified variable name
    $queryStatement->bindparam(1,$categoryName);
    $queryStatement->execute();

}


//joining footer.php file
require('../user/footer.php');
?>
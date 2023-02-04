<?php
//starting session
session_start();
//database connection
require('../connection/connection.php');
require('../user/header.php');
echo '<nav>
<ul>';

 if(isset($_SESSION['fullname'])){
    echo '<li><a href="../user/loginpage.php">Home</a></li>';
    echo '<li><a href="../admin/logout.php">logout</a></li>';

    }
    else{
        
        
echo '<li><a href="../user/register.php">Register</a></li>';
 echo '<li><a href="../index.php">Home</a></li>';

    }
    echo '<li><a href="latest.php">Latest Articles</a></li>';
    echo '<li><a href="#">Select Category</a>
    <ul>';
//A select query is used to retrieve data.
$queryStatement = $connect->prepare("SELECT * FROM category");
$queryStatement->execute();

if($queryStatement){
    ///data was retrieved using a while loop
	while($outcome = $queryStatement->fetch(PDO::FETCH_OBJ)){
	// / getting the category name with the value categoriesId
        echo '<li> <a href="Category.php?categories_Id='. $outcome->category_Id .'">'.$outcome->categoryName.'</a></li>';

    }
}
echo '</ul>
</li>

</ul>
</nav>
<img src="../images/banners/randombanner.php" /><main>
<nav>
</nav>
<article>';

if(isset($_GET['categories_Id'])){
///category of obtaining Id in a different variable
    $IdCategory  = $_GET['categories_Id'];
       //A select query is used to retrieve data.
$queryStatement =$connect->prepare("SELECT * FROM article WHERE categoryId = ?");

//bindparam is used to bind a parameter to the specified variable name
$queryStatement->bindparam(1,$IdCategory);
$queryStatement->execute();
  $returnData = $queryStatement->fetchAll(PDO::FETCH_OBJ);//PDO:: FETCH_OBJ fetch in object form
  /////data was retrieved using a foreach loop
foreach($returnData as $outcome){
  // retrieved data from the article table
    echo '
    <h2>'.$outcome->title.'</h2>'.
    
    '<h3>'. $outcome->content.'</h3>'.
    '<br>'.
   '<em>postedDate:'.  $outcome->date.'</em>'.
    '<br>'.
   '<em>postedBy:'. $outcome->postedperson.'</em>'.
'<hr>
    ';
}
}
    
  
 

//joining footer.php file
require('../user/footer.php');
?>
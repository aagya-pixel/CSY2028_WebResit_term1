<?php 
///database connection
require('../connection/connection.php');
require('../user/header.php'); 
 echo '<nav>
 <ul>';

 if(isset($_SESSION['fullname'])){
	

	echo '<li><a href="../admin/login.php">logout</a></li>';
 }else{

	
	
 echo '<li><a href="../user/latest.php">Latest Articles</a></li>';
 echo '<li><a href="#">Select Category</a>';
  echo '<ul>';
  
 
 


 // select query to fetch data from category table
$queryStatement = $connect->prepare("SELECT * FROM category");
$queryStatement->execute();
if($queryStatement){
	//while loop is used to fetch record from database
	while($outcome = $queryStatement->fetch(PDO::FETCH_OBJ)){//PDO:: FETCH_OBJ fetch in object form
		// fetching category name with value i.e categoriesId
		echo '<li> <a href="../user/Category.php?categories_Id='. $outcome->category_Id .'">'.$outcome->categoryName.'</a></li>';

	}}
 
	echo '</li>
	</ul>
';
?>
<?php
 }
 ?>
<?php
echo'
	</nav>
	<img src="../images/banners/randombanner.php" />
	<main>
	<nav>
	</nav>
	<article>
	<h2>Latest Article</h2>';

//   //A select query is used to retrieve data.

$queryStatement = $connect->prepare("SELECT * FROM article ORDER BY article_id DESC LIMIT 10");
//executing the query
$queryStatement->execute();

if($queryStatement){
	//data was retrieved using a while loop
    while($outcome = $queryStatement->fetch(PDO::FETCH_OBJ) ){//PDO:: FETCH_OBJ fetch in object form
		echo " <h2>".$outcome->title."</h2>".
		"<p>".$outcome->content."</p>".
		"<em>".$outcome->date."</em> ".
		"<em><br>".$outcome->postedperson."</em> <hr>"
		;

	}}





    //joining footer.php file
    require('../user/footer.php');
    ?>
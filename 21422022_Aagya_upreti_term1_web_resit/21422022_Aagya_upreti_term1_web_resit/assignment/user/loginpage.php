<?php
//starting session
 session_start();
//including header page html
require('../user/header.php');
///database connection
require('../connection/connection.php');
if(!empty($_SESSION['fullname'])){

	echo '<nav>
	<ul>
	<li><a href="loginpage.php">Home</a></li>
	<li><a href="latest.php">Latest Articles</a></li>
	<li><a href="#">Select Category</a>
	<ul>';

 //select query to fetch data from category table
$stmtQuery = $connect->prepare("SELECT * FROM category");
//executing the query
$stmtQuery->execute();
if($stmtQuery){
	//while loop is used to fetch data from database
	while($outcome = $stmtQuery->fetch(PDO::FETCH_OBJ)){//PDO:: FETCH_OBJ fetch in object form
		// fetching category name with value i.e categoriesId
		echo '<li> <a href="../user/Category.php?categories_Id='. $outcome->category_Id .'">'.$outcome->categoryName.'</a></li>';
	}}
	echo '</ul>
	</li>
	<li><a href="../admin/logout.php">logout</a></li>
	</ul>
	</nav>
	<img src="../images/banners/randombanner.php" /><main>
	<nav>
	</nav>
	<article>';
 
//displaying loggedIn user name
 echo '<h2> Welcome::'.$_SESSION['fullname'].'</h2>';

echo '<h3>All News</h3>';

  //A select query is used to retrieve data.
$queryStatement = $connect->prepare("SELECT * FROM article limit  10");
//executing query
$queryStatement->execute();
if($queryStatement){
	///data was retrieved using a while loop
    while($outcome = $queryStatement->fetch(PDO::FETCH_OBJ)){
		/// retrieved data from the article table
		echo "<h2>".$outcome->title."</h2>".
		"<p>".$outcome->content."</p>".
		"<em>".$outcome->date."</em>".
		
		"<br><em>".$outcome->postedperson."</em>".
		"<hr>";

	}}



}



///joining footer.php file
require('../user/footer.php');

?>

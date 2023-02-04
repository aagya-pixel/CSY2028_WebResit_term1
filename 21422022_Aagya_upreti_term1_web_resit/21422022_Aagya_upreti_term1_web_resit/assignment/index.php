<?php
///database connection
require('connection/connection.php');
//including header page
require('user/header.php');
echo '<nav>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="admin/login.php">Login</a></li>
<li><a href="./user/register.php">Register</a></li>
<li><a href="user/latest.php">Latest Articles</a></li>
<li><a href="#">Select Category</a>
<ul>';

 //   //A select query is used to retrieve data.
$query_Statement = $connect->prepare("SELECT * FROM category");
$query_Statement->execute();
if($query_Statement){
	///data was retrieved using a while loop
while($outcome = $query_Statement->fetch(PDO::FETCH_OBJ) ){
// fetching category name with value i.e categoriesId
echo '<li> <a href="./user/Category.php?categories_Id='. $outcome->category_Id .'">'.$outcome->categoryName.'</a></li>';

}}
echo '</li>
</ul>
</nav>
<img src="images/banners/randombanner.php" />
<main>
<nav>
</nav>

<article>	
<h2>Welcome to Northampton News</h2>';
	

//A select query is used to retrieve data.
$query_Statement = $connect->prepare("SELECT * FROM article limit  10");
$query_Statement->execute();
  $returnData = $query_Statement->fetchAll(PDO::FETCH_OBJ);//PDO:: FETCH_OBJ fetch in object form
  //foreach loop is used to fetch data from database
foreach($returnData as $outcome){
	echo '<h2>'. $outcome->title.'</h2>'. 
	'<p>'.$outcome->content.'</p>'.
	'<em>'.$outcome->date.'</em>'.
	'<br>'.
	'<em>'.$outcome->postedperson.'</em>'.
'<hr>';
}



///joining footer.php file
require('user/footer.php');
?>
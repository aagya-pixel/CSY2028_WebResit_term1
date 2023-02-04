<?php

///database connection
include('../connection/connection.php');
//including HTML for the header page
include('../user/header.php');

echo '<nav>';
echo '	<ul>
<li><a href="adminpage.php">Home</a></li>
<li><a href="adminArticle.php">Manage Article</a></li>
<li><a href="adminCategory.php">Manage Category</a></li>
	<li><a href="index.php">Latest Articles</a></li>
	
</ul>
</nav>
<img src="../images/banners/randombanner.php" /><main>

<nav>
</nav>
<article>
	
	<form action="" method="POST">
		<h2>Add Category</h2>
		<label>Category Name</label>
		 <input type="text" name="post_categoryName"/>
		<input type="submit" name="addCategory" value="Add" /> 
		
';



		

//Enter all data into the database
if(isset($_POST['addCategory'])){

	///obtaining fields from the user
	$categoryNames  = $_POST['post_categoryName'];
//The SQL query Insert is used.
	$querySQL = "INSERT INTO category(categoryName) VALUES(?)";
	$queryStatement = $connect->prepare($querySQL);
	///bindparam is used to associate a parameter with the variable name specified.
	$queryStatement->bindparam(1,$categoryNames);
	///execute a query to insert data
	 $queryStatement->execute();



	

}


///joining footer.php file
include('../user/footer.php');
?>
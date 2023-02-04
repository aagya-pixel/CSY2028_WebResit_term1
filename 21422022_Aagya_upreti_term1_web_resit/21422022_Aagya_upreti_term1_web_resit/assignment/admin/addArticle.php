<?php
//session began to be used $_SESSION
session_start();
//including HTML for the header page
include('../user/header.php');
//database connection
include('../connection/connection.php');

 echo '<link rel="stylesheet" type="text/css" href="../frame/style.css"/>';
 echo '<nav>
 <ul>
 <li><a href="adminpage.php">Home</a></li>
 <li><a href="adminArticle.php">Manage Article</a></li>
 <li><a href="adminCategory.php">Manage Category</a></li>
 <li><a href="logout.php">logout</a></li>
 
 </ul>
</nav>
<img src="../images/banners/randombanner.php" /><main>
<nav>
</nav>
<article>';
echo '<form action="" method="POST" enctype="multipart/form-data">
<h2>Add Article:</h2>
<label>Title</label>
 <input type="text" name="post_title"/>
<label>Image</label>
<input type="file" name="image" />
<label>Category:</label >
<select name="categoryName">';

///A select query is used to retrieve data.
					$queryStatement=$connect->prepare("SELECT * FROM category");
					$queryStatement->execute();
					//The while loop is used to retrieve the categoryname.
					while($outcome = $queryStatement->fetch(PDO::FETCH_OBJ)){
						echo '<option value="' .$outcome->category_Id . '">'.$outcome->categoryName.'</option>';
					}
		
echo '</select>
<label>Article</label>
<textarea  name="post_description"></textarea>
<input type="submit" name="addArticle" value="Add" /> 
</form>';


//Enter all of the data into the database
if(isset($_POST['addArticle'])){
	//obtaining the names of fields in various variables
   $post_catId = $_POST['categoryName'];
	$post_title = $_POST['post_title'];
	$post_description  = $_POST['post_description'];
	$date=date("y-m-d");
	 ////The SQL query Insert is used.
	$sqlQuery = "INSERT INTO article (title,content,categoryId,date,postedperson) VALUES(?,?,?,?,?)";
	$runQuery = $connect->prepare($sqlQuery);
	//bindparam is used to associate a parameter with the variable name specified.
	$runQuery->bindparam(1,$post_title);
	$runQuery->bindparam(2,$post_description);
	$runQuery->bindparam(3,$post_catId);
	$runQuery->bindparam(4,$date);
	$runQuery->bindparam(5,$_SESSION['fullname']);
///running query
	$runQuery->execute();
	
}

//including footer page html
include('../user/footer.php');
?>
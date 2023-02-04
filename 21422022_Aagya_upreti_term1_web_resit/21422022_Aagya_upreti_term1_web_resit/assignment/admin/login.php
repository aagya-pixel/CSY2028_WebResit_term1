<?php
// session started 
session_start();
///database connection
require('../connection/connection.php');
//including HTML for the header page
require('../user/header.php');

echo '<nav>
<ul>
<li><a href="../index.php">Home</a></li>
 <li><a href="../admin/login.php">Login</a></li>
<li><a href="../user/register.php">Register</a></li>
<li><a href="../user/latest.php">Latest Articles</a></li>
<li><a href="#">Select Category</a>
					
<ul>';

    //A select query is used to retrieve data.
$queryStatement = $connect->prepare("SELECT * FROM category");
$queryStatement->execute();
if($queryStatement){
	///data was retrieved using a while loop
	while($outcome = $queryStatement->fetch(PDO::FETCH_OBJ)){
			// / getting the category name with the value categoriesId
		echo '<li> <a href="../user/Category.php?categories_Id='. $outcome->category_Id .'">'.$outcome->categoryName.'</a></li>';
	}
}
echo '</li>
</ul>
</nav>
<img src="../images/banners/randombanner.php" />
<main>
<nav>
</nav>
<article>
<form action="" method="POST">
<h2>login:</h2>
<label>Username</label> 
<input type="text" name="fullname" required/>
<label>Password</label>
<input type="text" name="password" required/>
<input type="submit" name="loginBtn" value="login" /> 
</form>
';




		
if(isset($_POST['loginBtn'])){

if(empty($_POST['fullname']) || empty($_POST['password'])){
	echo "fields cannot be empty";
}else{
	//select sql query is used to fetch information
	$queryStatement = $connect->prepare("SELECT * FROM registration WHERE fullname = ? ");
	//bindparam is used to bind a parameter to the specified variable name
	$queryStatement->bindparam(1,$_POST['fullname']);
	$queryStatement->execute();
	 $fetched = $queryStatement->fetch();
	 //password_verify function is used to compare passwords 
	if(password_verify($_POST['password'], $fetched['password'])){
		$_SESSION['fullname'] = $_POST['fullname'];
		echo"<script>location.href='../user/loginpage.php'</script>";
		//passing value to another page
		//text used for taking to another page
		
	}
	elseif($_POST['fullname'] == 'admin' && $_POST['password'] == 'admin'){
		$_SESSION['fullname'] = $_POST['fullname'];
		//passing value to another page  
		
//text used for taking to another page
echo"<script>location.href='../admin/adminpage.php'</script>";
	}
}


}

///joining footer.php file
require('../user/footer.php');
?>
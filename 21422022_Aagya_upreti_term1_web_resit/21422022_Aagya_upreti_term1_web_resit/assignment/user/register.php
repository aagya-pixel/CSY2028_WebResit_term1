<?php
///database connection
include('../connection/connection.php');
require('../user/header.php');
echo '<nav>
<ul>
<li><a href="../index.php">Home</a></li>
<li><a href="../admin/login.php">Login</a></li>
<li><a href="../user/register.php">Register</a></li>
<li><a href="../user/latest.php">Latest Articles</a></li>
<li><a href="#">Select Category</a>	
<ul>';

 //   //A select query is used to retrieve data.
$queryStatement = $connect->prepare("SELECT * FROM category");
$queryStatement->execute();
if($queryStatement){
	///data was retrieved using a while loop
while($outcome = $queryStatement->fetch(PDO::FETCH_OBJ)){//PDO:: FETCH_OBJ fetch in object form	
	// / getting the category name with the value categoriesId
		echo '<li> <a href="../user/Category.php?categories_Id='. $outcome->category_Id .'">'.$outcome->categoryName.'</a></li>';
	}
}


echo '</li>
</ul>
</nav>
<img src="../images/banners/randombanner.php"/>
<main>
<nav>
</nav>
<article>
<form action="" method="POST">
<h2>Register:</h2>
<label>FullName</label>
<input type="text" name="r_fullname" required/>
<label>Email</label> 
<input type="email" name="r_email" required/>
<label>Password</label>
<input type="text" name="r_password" required/>
<input type="submit" name="registerBtn" value="Register" /> 
</form>
';

//post data into database afetr checking variables
if(isset($_POST['registerBtn'])){
	//getting fields name in variables
$registername = $_POST['r_fullname'];
$registeremail = $_POST['r_email'];
$registerpassword  =  $_POST['r_password'];
	//pasword_hash is being used to hide real one
$hashedpassword = password_hash($registerpassword,PASSWORD_DEFAULT);
///The SQL query Insert is used.
$sql_Query = "INSERT INTO registration (fullname, email, password) VALUES(?, ?, ?)";
$run_Query = $connect->prepare($sql_Query);

//bindparam is used to bind a parameter to the specified variable name
$run_Query->bindparam(1,$registername);
$run_Query->bindparam(2,$registeremail);
$run_Query->bindparam(3,$hashedpassword);
$run_Query->execute();
	echo 'Record Added';
}

///joining footer.php file
include('../user/footer.php');
?>
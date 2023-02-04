<?php
//session started
session_start();
///database connection
require('../connection/connection.php');
//including HTML for the header page
require('../user/header.php');
echo '<nav>
<ul>
<li><a href="adminpage.php">Home</a></li>
<li><a href="adminCategory.php">Manage Category</a></li>
<li><a href="adminArticle.php">Manage Article</a></li>
<li><a href="logout.php">logout</a></li>
</ul>
</nav>
<img src="../images/banners/randombanner.php" /><main>
<nav>
</nav>
<article>';

//if user loggedIn displays name
echo '<h2>Welcome::'.$_SESSION['fullname'].'</h2>';


///joining footer.php file
require('../user/footer.php');
?>
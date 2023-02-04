
<?php   

//database connection
require('../connection/connection.php');
//including HTML for the header page
require('../user/header.php');
echo '
<nav>
<ul>
<li><a href="adminpage.php">Home</a></li>
<li><a href="adminArticle.php">Manage Article</a></li>
<li><a href="adminCategory.php">Manage Category</a></li>
<li><a href="logout.php">logout</a></li>

</ul>
</nav>
<img src="../images/banners/randombanner.php" />><main>
<nav>
</nav>
<article>
    
<a href="addArticle.php">Add Article</a>
<br>
';

echo "<table>
<tr>
<th>title</th>
<th>content</th>
<th>Action</th>
</tr>


";
//A select query is used to retrieve data.
$queryStatement = $connect->prepare("SELECT * FROM article");
$queryStatement->execute();
$returnData = $queryStatement->fetchAll(PDO::FETCH_OBJ);//PDO:: FETCH_OBJ fetch in object form
//data was retrieved using a foreach loop
foreach($returnData as $outcome){
 
    echo "
      
    <tr>
    <td>.$outcome->title.</td>
    <td>.$outcome->content.</td>";
    echo '<td><a style="float: right" href="editArticle.php?art_Id=' . $outcome->article_Id . '">Edit</a></td>';
    echo '<td><a style="float: right" href="deleteArticle.php?article_Id=' . $outcome->article_Id . '">Delete</a></td>';
    
   
   
    echo "</tr>
    
   

 ";
}

 echo '
 <style>
 table, th, td {
 border:1px solid black;
}
 </style>
 </table>
             
';
    

    


////joining footer.php file
require('../user/footer.php');
?>

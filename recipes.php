<?php 
include "includes/connect.php";
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
            <title>Recipe World</title>
            <link rel="stylesheet" href="home.css">
    </head>   
    <body>
        <div class="header">
        
            <?php include "includes/header.php"?>
        
        </div>
        <div class="content">
            <div class="disp">
                    <h2>Recipes</h2>
                    <ul class="recipes-ul">
                    <?php 
                    $qry = "SELECT * FROM `tbl_recipe`";
                    $sql = mysqli_query($conn,$qry);
                    if(mysqli_num_rows($sql)>0) {
                        while($row=mysqli_fetch_assoc($sql)) {

                    ?>
                        <li><img src="uploads/<?php echo $row['photo']; ?>"><h3><a href="view.php?rid=<?php echo $row['recipe_id']; ?>"><?php echo $row['name']; ?></a></h3><p><?php echo $row['description']; ?></p></li>
                        <?php  } } else {  ?> 
                        <li>No Recipes</li>
                        <?php } ?>
                    </ul>
            </div> 
            <p class="footer">&#169; 2014 Recipe World</p>
        </div>
    </body>  
</html>
<?php 
include "includes/connect.php";
session_start();
if(!isset($_SESSION['email'])) 
    header('location:login.php');

if(isset($_POST['sub'])) {
    $rname = $_POST['rname'];
    $description = $_POST['description'];    
    $ingredients = $_POST['ingredients'];
    $directions = $_POST['directions'];
    //$photo = $_POST['photo'];
    $user_id=$_SESSION['user_id'];



    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
            $warning = "Please upload valid file";
        }
    
    // Check if file already exists

    // Check file size
    if ($_FILES["photo"]["size"] > 500000) {
        $warning = "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        $warning =  "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $warning =  "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
            ;
        } else {
            $warning =  "Sorry, there was an error uploading your file.";
        }
    }



    if ($uploadOk == 1) {
    $photo= $_FILES["photo"]["name"];
    $qry = "INSERT INTO `tbl_recipe` ( `name`,`user_id`, `description`, `ingredients`, `directions`, `photo` ) VALUES ('$rname','$user_id' ,'$description', '$ingredients', '$directions', '$photo' );";
    mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
    
        header('location:recipes.php');
    }
}
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
                <h2>Suggest</h2>
                <h4> <?php if(isset($warning)) echo $warning; ?></h4>
                <form class="form" method="post" action="" enctype="multipart/form-data">
                Recipe Name<input type="text" name="rname">
                Description<textarea name="description"></textarea>
                Ingrediants<textarea name="ingredients"></textarea>
                Directions<textarea name="directions"></textarea>
                Photo<input type="file" name="photo" id="photo">
                <input type="submit" name="sub" value="Click to Submit">
            </form>
            </div> 
            <p class="footer">&#169; 2014 Recipe World</p>
        </div>
    </body>  
</html>
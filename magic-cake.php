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
            <div class="disp decription">
                <h2>Magic Cake</h2>
                <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac...</p>
                <h3>Ingrediant</h3>
                <ul>
                    <li>2 eggs</li>
                    <li>1 pound sugar</li>
                    <li>2 butter</li>
                </ul>
                <h3>Directions</h3>
                <ol>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                </ol>
                <h3>Your Photos</h3>
                <ul class="inline">
                       <li><img src="images/magic-cake1.jpg"></li>
                       <li><img src="images/magic-cake2.jpg"></li>
                       <li><img src="images/magic-cake3.jpg"></li>
                        
                </ul>
            </div> 
            <p class="footer">&#169; 2014 Recipe World</p>
        </div>
    </body>  
</html>
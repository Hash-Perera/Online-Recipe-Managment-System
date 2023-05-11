<?php
session_start();
require 'config.php';

if(isset($_POST['submitbtn'])){

    $recipe_name = $_POST['rec_name'];
    $recipe_preptime = $_POST['rec_preTime'];
    $recipe_cooktime = $_POST['rec_cookTime'];
    $recipe_diflevel = $_POST['rec_diflevel'];
    $recipe_serves = $_POST['rec_serves'];
    $recipe_categ = $_POST['rec_category'];
    $recipe_price = $_POST['rec_price'];

    $target_dir = "../images/";
    $target_file = $target_dir.basename($_FILES["rec_img"]["name"]);
    move_uploaded_file($_FILES["rec_img"]["tmp_name"],$target_file);

    $recipe_ingred = $_POST['rec_ingr'];
    $recipe_desc = $_POST['rec_desc'];

    $sql = "INSERT INTO recipedetails(rec_name, rec_preTime, rec_cookTime, rec_diflevel, rec_serves, rec_category, rec_price, rec_img, rec_ingr, rec_desc ) 
    VALUES('$recipe_name', '$recipe_preptime', '$recipe_cooktime', '$recipe_diflevel', $recipe_serves, '$recipe_categ' , '$recipe_price', '$target_file', '$recipe_ingred', '$recipe_desc' ) ";

    if($conn->query($sql)){
        echo "<script> alert('Recipe added successfully!!!')</script>";
        echo '<a href="Chefdashboard.php">'."Back to Dashboard".'</a>';
    }
    
    else{
        echo "<script> alert('ERROR : could not able to execute the quary)</script>";
        //echo $sql;
    }
}

else{
    echo 'comthing went wrong';
}
    


?>
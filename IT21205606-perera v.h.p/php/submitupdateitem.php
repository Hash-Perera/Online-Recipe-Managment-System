<?php
session_start();
require 'config.php'; 

//$id = $_GET['recipeId'];

$dbrecipe_name = $_POST['rec_name'];
$dbrecipe_preptime = $_POST['rec_preTime'];
$recipe_cooktime = $_POST['rec_cookTime'];
$recipe_diflevel = $_POST['rec_diflevel'];
$recipe_serves = $_POST['rec_serves'];
$recipe_categ = $_POST['rec_category'];
$recipe_price = $_POST['rec_price'];

$target_dir = "../images/";
$target_file = $target_dir.basename($_FILES["rec_imgg"]["name"]);
move_uploaded_file($_FILES["rec_imgg"]["tmp_name"],$target_file);

$recipe_ingred = $_POST['rec_ingr'];
$recipe_desc = $_POST['rec_desc'];

if($_FILES["rec_imgg"]["name"] == ''){

    $sql = "UPDATE recipedetails SET rec_name = '$dbrecipe_name' , rec_preTime = '$dbrecipe_preptime', rec_cookTime = '$recipe_cooktime', rec_diflevel = '$recipe_diflevel' , rec_serves = '$recipe_serves', rec_category = '$recipe_categ' , rec_price = '$recipe_price' , rec_ingr = '$recipe_ingred', rec_desc = '$recipe_desc' WHERE rec_name = '$dbrecipe_name' ";
}

else{
    $sql = "UPDATE recipedetails SET rec_name = '$dbrecipe_name' , rec_preTime = '$dbrecipe_preptime', rec_cookTime = '$recipe_cooktime', rec_diflevel = '$recipe_diflevel' , rec_serves = '$recipe_serves', rec_category = '$recipe_categ' , rec_price = '$recipe_price' ,  rec_img = '$target_file', rec_ingr = '$recipe_ingred', rec_desc = '$recipe_desc' WHERE rec_name = '$dbrecipe_name' ";
}




if($conn->query($sql)){
    echo "<script> alert('Record updated successfully!!!')</script>";
    echo '<a href="Chefdashboard.php">'."Back to Dashboard".'</a>';

}

else{
    echo "<script> alert('ERROR : could not able to execute the quary ')</script>";
}




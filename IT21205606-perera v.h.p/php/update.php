<?php 
session_start();
require 'config.php'; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/addreciepe.css">
    <title>Update Recipe</title>
</head>
<body>

<form method="post">

        <h3>Update recipe Data</h3>
        
        Recipe Name:<input type="text" name="recname"><br>

        <input type='submit' name='submit' value="Submit">

        <input type="reset" value="Reset">
    
</form>

<?php

require ('config.php');

if(isset($_POST['submit'])){
    

    $name = $_POST['recname'];

    $sql = "SELECT * FROM `recipedetails` WHERE rec_name = '$name'";
    $result = mysqli_query($conn, $sql);

    if($row = mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_assoc($result)){

            $dbrecipe_name = $row['rec_name'];
            $dbrecipe_preptime = $row['rec_preTime'];
            $dbrecipe_cooktime = $row['rec_cookTime'];
            $dbrec_diflevel = $row['rec_diflevel'];
            $dbrec_serves = $row['rec_serves'];
            $dbrec_category = $row['rec_category'];
            $dbrec_price = $row['rec_price'];
            $dbrec_img = $row['rec_img'];
            $dbrec_ingr = $row['rec_ingr'];
            $dbrec_desc = $row['rec_desc'];
        }
    }else{
            $dbrecipe_name = '';
            $dbrecipe_preptime = '';
            $dbrecipe_cooktime = '';
            $dbrec_diflevel = '';
            $dbrec_serves = '';
            $dbrec_category = '';
            $dbrec_price = '';
            $dbrec_img = '';
            $dbrec_ingr = '';
            $dbrec_desc = '';
    }

    echo ("
    <form method=\"POST\" action=\"submitupdateitem.php\" enctype=\"multipart/form-data\">
    
        <h2>Update Recipe</h2>
    
        <div class=\"fullform\">
    
            <div class=\"formleft\">
            
                <div class=\"inputbox\">
                    <span class=\"details\">Recipe Name:</span><br/>
                    <input value=\"$dbrecipe_name\" name=\"rec_name\" class=\"detailinput\" type=\"text\"  required>
                </div>
    
                <div class=\"inputbox\">
                    <span class=\"details\">Preparation Time:</span><br/>
                    <input value=\"$dbrecipe_preptime \" name=\"rec_preTime\" class=\"detailinput\" type=\"text\"  required>
                </div>
    
                <div class=\"inputbox\">
                    <span class=\"details\">Cook Time:</span><br/>
                    <input value=\" $dbrecipe_cooktime \" name=\"rec_cookTime\" class=\"detailinput\" type=\"text\"  required>
                </div>
    
                <div class=\"inputbox\">
                    <span class=\"details\">Difficulty level:</span><br/>
                    <input value=\"$dbrec_diflevel \" name=\"rec_diflevel\" class=\"detailinput\" type=\"text\"  required>
                </div>
    
                <div class=\"inputbox\">
                    <span class=\"details\">Serves:</span><br/>
                    <input value=\"$dbrec_serves \" name=\"rec_serves\" class=\"detailinput\" type=\"text\" required>
                </div>
    
                <div class=\"inputbox\">
                    <span class=\"details\">Category:</span><br/>
                    <select class=\"detailinput\" name=\"rec_category\" id=\"rec_category\" required>
                        <option value=\"\">$dbrec_category </option>
                        <option value=\"Main\">Main</option>
                        <option value=\"Desert\">Desert</option>
                        <option value=\"Beve\">Beverages</option>
                        <option value=\"Snaks\">Snaks</option>
                        <option value=\"Soup\">Soup</option>
                        <option value=\"Sweets\">Sweets</option>
                        <option value=\"Other\">Other</option>
                    </select>
                </div>
    
                <div class=\"inputbox\">
                    <span class=\"details\">Price:</span><br/>
                    <input value=\" $dbrec_price\" name=\"rec_price\" class=\"detailinput\" type=\"text\"  required>
                </div>
    
            </div>
    
            <div class=\"formright\">
    
                <div class=\"inputbox\">
                    <span class=\"details\">Image:</span><br/>
                    <input name=\"rec_imgg\"  value=\"$dbrec_img \" class=\"detailinput\" type=\"file\">
                </div>
    
                <div class=\"inputbox\">
                    <span class=\"details\">Ingredients:</span><br/>
                    <textarea name=\"rec_ingr\" class=\"detailinput_area\" rows=\"10\"  required>$dbrec_ingr</textarea>
                </div>
    
                <div class=\"inputbox detailinput_txt\">
                    <span class=\"details\">Description:</span><br/>
                    <textarea name=\"rec_desc\" class=\"detailinput_area\" rows=\"10\"  required>$dbrec_desc</textarea>
                </div>
    
                <input name=\"submitbtn\" class=\"recAddbtn\" type=\"submit\" value=\"Update Recipe\">
    
            </div>
    
        </div>
        
    </form>");

}

?>




</body>
</html>
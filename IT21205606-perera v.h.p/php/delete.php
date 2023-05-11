<?php
    session_start();    
    require 'config.php';
?>


<!DOCTYPE html>
<html>


    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">

        <h3>Delete Recipe</h3>
        Recipe Name:<input type="text" name="recname"><br>
        <input type="submit" value="Delete" name="btnSubmit">
        <input type="reset" value="Reset">
    
    
    </form>



</html>


<?php

if(isset($_POST['btnSubmit']))
{
$recname = $_POST["recname"];
$sql = "DELETE FROM recipedetails WHERE rec_name = '$recname' ";

    if($conn->query($sql)){
        echo "deleted successfull<br>";
        echo '<a href="Chefdashboard.php">'."Back to Dashboard".'</a>';
    }

    else
    {
        echo "error".conn->error ;
    }
}

?>

<?php include 'config.php';

if(isset($_POST['submitbtn'])){

$name = $_POST["Name"];
$email = $_POST["Email"];
$messsage = $_POST["Message"];
    
    
$sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$messsage')";

if($conn->query($sql)){
  echo "<script> alert('Recipe added successfully!!!')</script>";
  header("location:contactus.php");
}

else{
  echo "<script> alert('ERROR : could not able to execute the quary)</script>";
  //echo $sql;
}

}


    
?>
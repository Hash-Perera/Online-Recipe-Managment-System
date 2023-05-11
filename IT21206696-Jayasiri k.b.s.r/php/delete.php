<? require 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM promotion WHERE id='$id'";


if($conn->query($sql)){
    echo "deleted successfull<br>";
    echo '<a href="promo.php">'."Back".'</a>';
}

else
{
    echo "error".conn->error ;
}



?>
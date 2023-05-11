<?php
 
    echo "Logged out successfully";
 
    session_start();
    header("location:../html/Home-guest.html");
    session_destroy();
    
 
?>
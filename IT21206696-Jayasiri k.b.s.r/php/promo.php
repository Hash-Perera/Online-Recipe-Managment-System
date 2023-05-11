<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/promo.css">
    <script src="https://kit.fontawesome.com/a39ba673b3.js" crossorigin="anonymous"></script>
    <title>Promotions</title>
</head>
<body>

    <!------------------------------------------------------>
    <!----------------Header Section------------------------>
    <section class="header">

        <div class="navbar">

                <div class="logo">
                    <img src="../images/logo-text-3.png">
                </div>
    
                <div class="navlinks">
                    <ul>
                        <li><a href="../../IT21205606-perera v.h.p/php/Home.php">HOME</a></li>
                        <li><a href="../../IT21205606-perera v.h.p/php/Categories.php">CATEGORY</a></li>
                        <li><a href="#">STORE</a></li>
                        <li><a href="promo.php">PROMO</a></li>
                        <li><a href="../../IT21205774-herath h.m.y.m/php/nutrients.php">NUTRIENTS</a></li>
                        <li><a href="../../IT21205774-herath h.m.y.m/php/contactus.php">CONTACT</a></li>
                        <li><a href="#">ABOUT</a></li>
                    </ul>
                </div>

                <div class="profile">
                    <a href="#"><i class="fa-solid fa-circle-user fa-4x"></i></a>
                </div>

        </div>

        

    </section>

    <section class="promosection">
            <center><h1>Promotions</h1></center>
        <div class="promohead">

            <?php
                require 'config.php';
                $sql = "SELECT* FROM promotion";
                $result = $conn->query($sql);

            
                
                while($row = $result->fetch_assoc())
                {
                    echo '<div class="item">';
                    echo        '<div class="off">'.$row['percentage'].'<br>Off</div>';
                        $img = $row['image'];
                        $id = $row['id'];

                    echo       "<img src='$img' >";

                           echo '<div class="details">';
                               echo ' <p>Special Offer</p>';
                                echo '<p class="x">Price -'.$row['oldprice'].' </p>';
                                echo '<p class="x">Promo Price -'.$row['promoprice'].'</p>';
                                echo "<a href='delete.php?id=$id'>Delete Item</a>";
                                
                            echo '</div>';
                    echo '</div>';
                }

                ?>

            </div>

            <!--<center class="butnset">
            <button class="btns" name="submitbtn" type="submit" onclick="location.href='../html/addpromoform.html'">Add New Item</button>
            <button class="btns">Delete Item</button>
            <button class="btns">Add New Item</button>
            </center>-->


    </section>



    <!------------------------------------------------------>
    <!----------------Footer Section------------------------>
    <section>
    
        <div class="footer">
            <div class="footerItem">
                <a ><img class="QR" src="../images/qr.png"></a>
            </div>

            <div class="footerItem">
                <h3>ABOUT US</h3>
                <p>TastyKitchen is a Sri lankan website that provide various recipes arround the world.You Can buy recipes and add your own recipes</p>
                <i class="fa-brands fa-google-play fa-2x"></i>
                <i class="fa-brands fa-app-store fa-2x"></i>

            </div>

            <div class="footerItem">
                <h3>CONTACT US</h3>
                <p>Tel : +94112666978<br>Fax : 94112666978<br>E-mail : info@TastyKitchen.net</p>
            </div>

            <div class="footerItem">
                <h3>FOLLOW US</h3>
                <div class="f_icon">
                    <i class="fa-brands fa-facebook-f fa-2x"></i>
                    <i class="fa-brands fa-instagram fa-2x"></i>
                    <i class="fa-brands fa-twitter fa-2x"></i>
                    <i class="fa-brands fa-google-plus-g fa-2x"></i>
                </div>
                
            </div>

            <div class="footerItem">
                    <img class="f_logo" src="../images/Logo.png" alt="Logo">
            </div>

        </div>

</section>

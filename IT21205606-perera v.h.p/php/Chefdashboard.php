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
    <link rel="stylesheet" href="../css/chefDashboard.css">
    <script src="https://kit.fontawesome.com/a39ba673b3.js" crossorigin="anonymous"></script>
    <title>TastyKitchen</title>

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
                        <li><a href="home.php">HOME</a></li>
                        <li><a href="Categories.php">CATEGORY</a></li>
                        <li><a href="#">STORE</a></li>
                        <li><a href="../../IT21206696-Jayasiri k.b.s.r/php/promo.php">PROMO</a></li>
                        <li><a href="../../IT21205774-herath h.m.y.m/php/nutrients.php">NUTRIENTS</a></li>
                        <li><a href="../../IT21205774-herath h.m.y.m/php/contactus.php">CONTACT</a></li>
                        <li><a href="../../IT21208812-jayarathne h.g.n.k/html/About.html">ABOUT</a></li>
                    </ul>
                </div>

                <div class="profile">
                    <a href="#"><i class="fa-solid fa-circle-user fa-4x"></i></a>
                </div>

        </div>

        

    </section>

<!---------Methana idn code krnna ganna oyalage ewaa-------------->
    <section class="dashboard">

        <div class="sidebar">
            <div class="logo-details">
                <span class="logo_name">Dashboard</span>
            </div>

            <div class="logoimg">


            </div>

            <div class="role">
                <h2>Hashan Perera</h2>
                <a href="logout.php"><button class="logoutbtn">LogOut</button></a>
            </div>


        </div>

        <div class="r-side">

            <h1>Welcome Chef !</h1>

                <div class="r-sideboxes">
                    <div class="chefbtn">
                        <a href="../html/addrecipe.html">Add Recipe</a>
                        <a href="delete.php">Delete Recipe</a>
                        <a href="update.php">Update Recipe</a>
                    </div>

                        <div class="div">

                            <a href="#">
                            <div class="boxes">
                                <h2>Feedbacks</h2>
                            </div>
                            </a>

                            <a href="#">
                            <div class="boxes">
                                <h2>User Recipes</h2>
                            </div>
                            </a>

                            <a href="Categories.php">
                            <div class="boxes">
                                <h2>Recipes</h2>
                            </div>
                            </a>

                    
                        </div>

                        
                </div>

        </div>

        </div>
    </section>















 <!---------Methanin yata code karanna epa.. uda comment ekai meekai athare code krnna-------------->   
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

    

</body>
</html>
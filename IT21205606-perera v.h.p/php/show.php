<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a39ba673b3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/show.css">
    <title>Recipe</title>
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
                    <li><a href="Home.html">HOME</a></li>
                        <li><a href="Categories.php">CATEGORY</a></li>
                        <li><a href="#">STORE</a></li>
                        <li><a href="../../IT21206696-Jayasiri k.b.s.r/php/promo.php">PROMO</a></li>
                        <li><a href="../../IT21205774-herath h.m.y.m/php/nutrients.php">NUTRIENTS</a></li>
                        <li><a href="../../IT21205774-herath h.m.y.m/php/contactus.php">CONTACT</a></li>
                        <li><a href="../../IT21208812-jayarathne h.g.n.k/html/About.html">ABOUT</a></li>
                        <li><a href="../../IT21208812-jayarathne h.g.n.k/html/About.html">ABOUT</a></li>
                    </ul>
                </div>

                <div class="profile">
                    <a href="#"><i class="fa-solid fa-circle-user fa-4x"></i></a>
                </div>

        </div>
    
    </section>

    <section>


    <section>
        <div class="recipeview">

            <?php
                require 'config.php';

                $id = $_GET['id'];
                $sql = "SELECT*FROM recipedetails WHERE recipeId = '$id' ";
                
                $result = $conn->query($sql);

                while($row = $result->fetch_assoc())
                {


                    echo '<h1>'.$row["rec_name"].'</h1>';


                       echo '<div class="recipedec">';
                        echo    '<div>';

                        $img = $row['rec_img'];
                            echo    "<img src='$img'>";

                                echo '<div class="recipebtns">';
                                echo   '<input type="submit" value="Buy Recipe">';
                                    echo '<input type="submit" value="Add Cart">';
                                    echo '<input id="feedbackbtn" type="submit" value="Feedback">';
                                echo '</div>';
                            echo '</div>'; 

                            echo '<div class="descr">';
                                echo '<h2>Ingrediants</h2>';
                                echo '<p>'.$row["rec_ingr"].'</p>';
                            echo '</div>';
                            echo '<div class="descr">';
                               echo '<h2>Desciption</h2>';
                                echo '<p>preperation time : '.$row["rec_preTime"].'</p>';
                                echo '<p>Cook time : '.$row["rec_cookTime"].'</p>';
                                echo '<p>Difficulty Level : '.$row["rec_diflevel"].'</p>';
                                echo '<p>Recipe category : '.$row["rec_category"].'</p>';
                                echo '</br>';
                                echo '<p>'.$row["rec_desc"].'</p>';
                            echo '</div>';
                        echo '</div>';

                        $conn->close();

                }
                    ?>

                <div class="feedbacksection">
                    <div class="feedbacktopic">Feedback</div>
                </div>
        </div>
    </section>





    <!------------------------------------------------------>
    <!----------------Footer Section------------------------>
    <section>
        <hr class="footer_hr">
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
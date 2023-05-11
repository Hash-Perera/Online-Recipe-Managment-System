<?session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/categories.css">
    <script src="https://kit.fontawesome.com/a39ba673b3.js" crossorigin="anonymous"></script>
    <title>Categories</title>
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
                        <li><a href="Home.php">HOME</a></li>
                        <li><a href="#">CATEGORY</a></li>
                        <li><a href="">STORE</a></li>
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


    <!----------------------------------------------------------------------------------------------------->
    <!----------------------------------------------------------------------------------------------------->

    <div class="fx">
        <h2>Categories</h2>
    <input type="search">
    </div>

  

    <div class="Ce_items">
        
        <div class="recipe">
            
            <?php
                require 'config.php';
                $sql = "SELECT* FROM recipedetails";
                $result = $conn->query($sql);

            
                
                while($row = $result->fetch_assoc())
                {
                    $id = $row["recipeId"];

                    //echo '<a href="selectedrecipe.php?id=$id">';

                   
                    echo '<div class="recitem">';
                    
                    $img = $row['rec_img'];
                    echo "<img src='$img'>";

                    echo '<h3>'.$row["rec_name"].'</h3>';

                    echo '<div class="itemdec">';
                    echo '<ul>';
                                echo '<li>'."Prep Time : ".$row["rec_preTime"].'</li>';
                                echo '<li>'."Category: ".$row["rec_category"].'</li>';
                                echo '<li>'."Level :".$row["rec_diflevel"].'</li>';
                    echo '</ul>';

                    echo '<ul>';
                                echo '<li>'."Serves : ".$row["rec_serves"].'</li>';
                                echo '<li>'."Cook Time :".$row["rec_cookTime"].'</li>';
                                echo '<div class="btn">';
                                //echo '<button class="btnp" type="button">'.$row["rec_price"].'</button>';
                                echo "<button class='btnp' type='submit'><a href='show.php?id=$id'>".$row['rec_price']."</a></button>";
                                echo '</div>';
                    echo '</ul>';
                            
                    echo '</div>';
                        
                    echo '</div>';

                }
                ?>


        </div>
                
                
              
    
        </section>

    </div>




























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
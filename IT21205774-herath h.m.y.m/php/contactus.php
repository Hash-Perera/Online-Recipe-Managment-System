

<!DOCTYPE html>
<html lang="en">
<?php include 'config.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a39ba673b3.js" crossorigin="anonymous"></script>    
    <title>Contact</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/contactus.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <div class="container">

    </div>
        
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
                        <li><a href="../../IT21206696-Jayasiri k.b.s.r/php/promo.php">PROMO</a></li>
                        <li><a href="../php/nutrients.php">NUTRIENTS</a></li>
                        <li><a href="contactus.php">CONTACT</a></li>
                        <li><a href="#">ABOUT</a></li>
                    </ul>
                </div>

                <div class="profile">
                    <a href="#"><i class="fa-solid fa-circle-user fa-4x"></i></a>
                </div>

        </div>

        
    </section>

     <!--------------------------------------------------->
      <!----------------new Section------------------------>

    <center>
        <h1 class="titletext">Contact Us</h1>
        <p>If you have any questions, just contact us through email or give us feedback on your recent experience</p>
    </center>

    <section class="contact">   
        <div class="content">
            <div class="content-form">
                <section>
                    <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                    <h2>Address</h2>
                    <p>173/1,<br>Colombo 08,<br>Colombo<br>Sri Lanka</p>
                </section>

                
                <section>
                    <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                    <h2>Phone</h2>
                    <p>+94112666978</p>
                </section>

                <section>
                    <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                    <h2>E-mail</h2>
                    <p>info@TastyKitchen.net</p>
                </section>
            </div>
        </div>

      
      
        <form method="POST" action="contact.php">
            <div class="form">

                    <div class="right">
                        <div class="contact-form">
                            <input name="Name" type="text" required>
                            <span>Name</span>
                        </div>
        
                        <div class="contact-form">
                            <input name="Email" type="E-mail" required>
                            <span>Email</span>
                        </div>

                        <div class="contact-form">
                            <textarea name="Message"></textarea>
                            <span>Message</span>
                        </div>
        
                        <div class="contact-form">
                            <input name="submitbtn" type="submit" name="submit">
                        </div>
                    </div>
                
            </div>

        </form>




        <div class="media">
            <li><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></li>
            <li><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></li>
            <li><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></li>
            <li><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></li>
        </div>
        <div class="empty">

        </div>
    </section>
    

    

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

<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a39ba673b3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/Nutrients.css">
    <title>Nutrients</title>
</head>
<body>

    <div class="container">

    </div>
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
                        <li><a href="../../IT21206696-Jayasiri k.b.s.r/php/promo.php">PROMO</a></li>
                        <li><a href="../php/nutrients.php">NUTRIENTS</a></li>
                        <li><a href="../php/contactus.php">CONTACT</a></li>
                        <li><a href="#">ABOUT</a></li>
                    </ul>
                </div>

                <div class="profile">
                    <a href="#"><i class="fa-solid fa-circle-user fa-4x"></i></a>
                </div>

        </div>

        
    </section>

     <!------------------------------------------------------>
    <!----------------Dashboard Section------------------------>
    <center><h1>Nutrients</h1></center>
    <section class="dashboard">


        <!---<div class="left">
           
            <form method="POST" action="add_nutrients.php">
                
            <lable>Food Name</lable>
                <input name="FoodName" type="text" placeholder="Food Name">
               
                    
                
                <lable>Fat</lable>
                <input name="Fat" type="text" placeholder="Fat">
                
              

                   
                <lable>Carbohydrate</lable>
                <input name="Carbohydrate" type="text" placeholder="Carbohydrate">
               

                
                <lable>Protein</lable>
                <input name="Protein" type="text" placeholder="Protein">
            
           

                
                <lable>Calories</lable>
                <input name="Calories" type="text" placeholder="Calories">
              
        
                <input class="btnsubbmit" type="submit" name="btnsubbmit" value="submit">
        
                
            </form>
            
        </div>-->


        <div class="right">
          <div class="tablearea">

            <table class="paymentTable" border="1">
                <tr class="tablerow">
                    <th>Food Name</th>
                    <th>Fat</th>
                    <th>Carbohydrate</th>
                    <th>Protein</th>
                    <th>Calories</th>
                </tr>
                <?php
                    $sql = "SELECT * FROM nutrients";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0)
                    {
                        while($row = $result->fetch_assoc())
                        {
                            echo "<tr class='tablerow'>";
                            echo "<td>".$row["food"]."</td>";
                            echo "<td>".$row["fat"]."</td>";
                            echo "<td>".$row["carb"]."</td>";
                            echo "<td>".$row["protein"]."</td>";
                            echo "<td>".$row["calories"]."</td>";
                            echo "</tr>";
                        }
                    }else{
                        echo "No results";
                    }
                ?>
            </table>

            </div>
        </div>















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

    
</body>
</html>





if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";} 
    else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
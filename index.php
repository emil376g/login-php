<?php
include "connect.php";
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta content="ski og udstyr">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        <title>opgave 1</title>
    </head>

    <body>
        <div class="wrapper">
            <header class="header">
                <div class="headerLeft"><img src="Website/images/logo.png" alt="logo">
                    <p class="LogoTitle"><strong>Skiudstyr.<span class="LogoSpan">dk</span></strong></p>
                </div>
                <div class="HeaderMiddle">
                    <form action="" method="post"> <i class="fa fa-search" aria-hidden="true"></i>
                        <input placeholder="seacher here" class="seacherPlads"> </form>
                </div>
                <div class="headerRight"> <i class="fa fa-commenting ChatIcon" aria-hidden="true"> chat</i><i class="fa fa-phone" aria-hidden="true"> mobil#12345678</i> </div> <i class="fa fa-bars PhoneNavBar" aria-hidden="true" style="display: none"></i>
                <nav class="navBar">
                    <li class="NavItem activ"> <a href="" class="NavBarLink ">home</a> </li>
                    <li class="NavItem"> <a href="" class="NavBarLink">nyheder</a> </li>
                    <li class="NavItem"> <a href="" class="NavBarLink">mærker</a> </li>
                    <li class="NavItem"> <a href="" class="NavBarLink">aktiviteter</a> </li>
                    <li class="NavItem"> <a href="" class="NavBarLink">kvinder</a> </li>
                    <li class="NavItem"> <a href="" class="NavBarLink">mænd</a> </li>
                    <?php
                if(isset($_COOKIE[$cookie_name])) {
                    ?>
                        <li class="NavItem"> <a href="logout.php" class="NavBarLink">logout</a> </li>
                        <?php 
                }else{
                    ?>
                            <li class="NavItem"> <a href="#" class="NavBarLink">register</a> </li>
                            <li class="NavItem"> <a href="#" class="NavBarLink">login</a> </li>
                            <?php } ?>
                </nav>
            </header>
            <main class="main">
                <div class="slider"><img alt="" class="sliderImg sliderContent4"> <img class="sliderImg sliderContent"> <img alt="" class="sliderImg sliderContent2"> <img alt="" class="sliderImg sliderContent3"> <img alt="" class="sliderImg sliderContent4"> <img class="sliderImg sliderContent"> </div>
                <div class="ArrowPladsHolder"> <i class="fa fa-arrow-circle-left arrowLeft" aria-hidden="true"></i><i class="fa fa-arrow-circle-right arrowRight" aria-hidden="true"></i></div>
                <h1 class="SkiOgUdstyr">Ski og udstyr</h1>
                <h2 class="SkiOgUdstyr">best sellers</h2>
                <div class="itemSale">
                    <div class="ItemToSale"> <img src="Website/images/products/product1.jpg" alt="" class="ItemImg">
                        <h4>produkt1</h4>
                        <p>et meget flot produkt fra</p>
                        <br>
                        <p>pris 200.00 kr</p>
                    </div>
                    <div class="ItemToSale"> <img src="Website/images/products/product2.jpg" alt="" class="ItemImg">
                        <h4>produkt2</h4>
                        <p>et meget flot produkt fra</p>
                        <br>
                        <p>pris 200.00 kr</p>
                    </div>
                    <div class="ItemToSale"> <img src="Website/images/products/product3.jpg" alt="" class="ItemImg">
                        <h4>produkt3</h4>
                        <p>et meget flot produkt fra</p>
                        <br>
                        <p>pris 200.00 kr</p>
                    </div>
                    <div class="ItemToSale"> <img src="Website/images/products/product4.jpg" alt="" class="ItemImg">
                        <h4>produkt4</h4>
                        <p>et meget flot produkt fra</p>
                        <br>
                        <p>pris 200.00 kr</p>
                    </div>
                    <div class="ItemToSale"> <img src="Website/images/products/product5.jpg" alt="" class="ItemImg">
                        <h4>produkt5</h4>
                        <p>et meget flot produkt fra</p>
                        <br>
                        <p>pris 200.00 kr</p>
                    </div>
                </div>
            </main>
            <footer class="footer">
                <div class="footerLeft">
                    <p class="footerGift"><strong>gavekort</strong></p>
                    <br>
                    <p class="Gift">giv gavekort til dine venner</p>
                    <p class="Gift"><a href="">send som gave</a></p>
                    <br>
                    <p class="footerGift"><strong>skiguide</strong></p>
                    <br>
                    <p class="Gift"><a href="">skisteder i Norge</a></p>
                    <p class="Gift"><a href="">skisteder i Sverige</a></p>
                </div>
                <div class="FooterMiddle">
                    <p class="footerGift"><strong>omkring skiudstyr.dk</strong></p>
                    <br>
                    <p class="Gift"><a href="">historien</a></p>
                    <p class="Gift"><a href="">økonomi</a></p>
                    <p class="Gift"><a href="">vision</a></p>
                    <p class="Gift"><a href="">mission</a></p>
                    <p class="Gift"><a href="">fission</a></p>
                </div>
                <div class="FooterRight">
                    <p class="footerGift"><strong>Sociale medier</strong></p>
                    <br> <i class="fa fa-facebook-official" aria-hidden="true"></i> <i class="fa fa-twitter-square" aria-hidden="true"></i> <i class="fa fa-instagram" aria-hidden="true"></i> <i class="fa fa-google-plus" aria-hidden="true"></i> </div>
            </footer>
        </div>
        <script src="slider.js"></script>
        <script src="ajax.js"></script>
    </body>

    </html>
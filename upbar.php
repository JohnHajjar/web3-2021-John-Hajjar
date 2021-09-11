<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/a0043d9bc2.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="jquery-comp-3.6.js"></script>
        <link href="http://fonts.cdnfonts.com/css/brandon-grotesque-regular" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
    </head>
    <body>
        <?php error_reporting(0); ?>
        <?php include 'db.php' ?>

        <nav>
            <div class="logo">
                <a href="../">
                    <img src="/web3x/imgs/whitejxlogo.jpg"  width="55px" height=50px style="margin: 10px;">
                </a>
            </div>
            <div class="hamburger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-links">
                <li>
                    <?php 
                        if(!isset($_SESSION['status']) && empty($_SESSION['status'])) {
                   ?>   <a class="a-button" href="/web3x/" >
                            <div class="button" id="button-5">
                                <div id="translate"></div>
                                Home
                            </div>
                        </a>
                <?php } 
                        if($_SESSION['status'] == 'logged_in' ) {
                   ?>   <a class="a-button" href="/web3x/store" >
                            <div class="button" id="button-5">
                                <div id="translate"></div>
                                Store
                            </div>
                        </a>
                <?php } ?>
                    
                </li>
                <li>
                    <?php 
                        if($_SESSION['status'] == 'logged_in') {
                    ?>      <a class="a-button" href="/web3x/cart">
                                <div class="button" id="button-6">
                                    <div id="spin"></div>
                                    Cart
                                </div>
                            </a>
                    <?php    }
                        else { ?>
                            <a class="a-button" href="/web3x/signup.php">
                                <div class="button" id="button-6">
                                    <div id="spin"></div>
                                    Join Us
                                </div>
                            </a>
                    <?php    } ?>



                </li>
                <li>
                    <?php
                        if($_SESSION['status'] == 'logged_in') {
                    ?>      <a class="a-button" href="/web3x/profile">
                               <div class="button" id="button-5">
                                <div id="translate"></div>
                                My Profile
                            </div>           
                            </a>
                    <?php  } else { ?>
                            <a class="a-button" href="/web3x/contact.php">
                               <div class="button" id="button-5">
                                <div id="translate"></div>
                                Contact US
                            </div>           
                            </a>
                  <?php } ?>
                </li>
                <li>
                    <br>
                <input class="searchdiv"><div class="div1"></div></input>
               </li>
            </ul>
        </nav>




        <script>
            const hamburger = document.querySelector(".hamburger");
            const navLinks = document.querySelector(".nav-links");
            const links = document.querySelectorAll(".nav-links li");

            hamburger.addEventListener('click', ()=>{
            //Animate Links
                navLinks.classList.toggle("open");
                links.forEach(link => {
                    link.classList.toggle("fade");
                });

                //Hamburger Animation
                hamburger.classList.toggle("toggle");
            });

        </script>
</body>

</html>

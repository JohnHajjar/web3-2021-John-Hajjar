<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/a0043d9bc2.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="jquery-comp-3.6.js"></script>
        <link href="http://fonts.cdnfonts.com/css/brandon-grotesque-regular" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/web3x/stylesheet.css"/>
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
                <?php 
                    if((isset($_SESSION['ID'])  && $_SESSION['ID'] == 0)){
                        // echo '<li>';
                        //     echo '<a class="a-button" href="/web3x/admin" >';
                        //         echo '<div class="button" id="button-5">';
                        //             echo '<div id="translate"></div>';
                        //             echo 'Admin';
                        //         echo '</div>';
                        //     echo '</a>';
                        // echo '</li>';
                        echo '<li>';
                        echo '<a href="/web3x/admin" >';
                        echo '<img src="data:image/png;base64,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" width="50px">';
                        echo '</a>';
                        echo '</li>';
                    }
                 
                ?>
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
                    <form action="/web3x/search/" method="post" style="display:inline-block;">
                        <input type="text" name="searchinput" id="searchinput" class="searchdiv">
                        <input type="submit" name="submit" style="height: 0px; width: 0px; border: none; padding: 0px;" hidefocus="true" />
                            <div class="div1"></div>
                        </input>
                    </form>
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

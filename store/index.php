<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../stylesheet.css"/>
        <link href="http://fonts.cdnfonts.com/css/neoneon" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a0043d9bc2.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="jquery-comp-3.6.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="http://fonts.cdnfonts.com/css/brandon-grotesque-regular" rel="stylesheet">

    </head>
    <body class="storepagecss">
            <?php include '../db.php'; ?>
            <?php include '../upbar.php'; ?>
            <br><br>

            <div style=" width:70%; margin:auto;">
                <h1 align=center style="color:white; font-family: Neoneon,sans-serif; font-size: 60px; line-height: 1.3em; font-weight: 400;">
                    Welcome to JEWXRLY store
                </h1>
            </div>

            <br><br>

            <div class="section1">
                <a href="#deliveryinfo">
                    <div class="childs11">
                        <img src="imgs/delivery-truck.png" width="40%" height="auto">
                        <p style="font-family: cursive;">
                            Free shipping
                        </p>
                    </div>
                </a>
                <a href="#easyreturninfo">
                    <div class="childs22">
                        <img src="imgs/return-policy.png" width="40%" height="auto">
                        <p style="font-family: cursive;">
                            Easy return
                        </p>
                    </div>
                </a>
                <a href="#pricesinfo">
                    <div class="childs33">
                        <img src="imgs/moneybag.png"width="40%" height="auto">
                        <p style="font-family: cursive;">
                            Best prices
                        </p>
                    </div>
                </a>
            </div>

            <br><br><br><br><br><br><br><br><br><br><br>
        <section id="categories">
            <hr>
                <h1 style="color:white; letter-spacing:5px; font-family: Neoneon,sans-serif; color:white;" align=center>
                Categories </h1>
            <hr><br><br>
            <div class="section2">
                <a href="#">
                    <div class="categmen">
                        <img src="imgs/menjewerlrycat.jpg">
                        <div class="categ-text">
                            <h2>MEN'S SECTION </h2>
                        </div>
                        <div class="smscreen-men">
                            <h2> MEN'S SECTION </h2>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="categwomen">
                        <img src="imgs/jewlrycategorywomenwebp.png">
                        <div class="categ-text">
                            <h2> WOMEN'S SECTION </h2>
                        </div>
                        <div class="smscreen-women">
                            <h2>WOMEN'S SECTION </h2>    
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="categboth">
                        <img src="imgs/categboth.png">
                        <div class="categ-text">
                            <h2>UNISEX SECTION</h2>
                        </div>
                        <div class="smscreen-both"> 
                            <h2>UNISEX'S SECTION</h2>
                        </div>
                    </div>
                </a>
            </div>
        </section>
            <br><br>
            <section class="section3">
                <hr>
                <h1 style="color:white; letter-spacing:5px; font-family: Neoneon,sans-serif; color:white;" align=center>
                NEWEST ITEMS </h1>
                <hr><br>
    
            
            </section>
            <br><br><br><br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br><br><br><br>
            <section class="section4">
                <hr>
                <h1 style="color:white; letter-spacing:5px; font-family: Neoneon,sans-serif; color:white;" align=center>
                BEST SELLERS </h1>
                <hr><br>
    
            
            </section>



            <br><br><br><br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br><br><br><br>
            <div style="background-color:black;">
                <?php include '../footer.php'; ?>
            </div>
            
            <br>
        
    </body>
</html>
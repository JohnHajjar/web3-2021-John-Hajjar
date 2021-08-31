<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="http://fonts.cdnfonts.com/css/neoneon" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a0043d9bc2.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="jquery-comp-3.6.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="http://fonts.cdnfonts.com/css/brandon-grotesque-regular" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../stylesheet.css"/>
    </head>
    <body class="storepagecss">

            <?php include '../db.php'; ?>
            <?php include '../upbar.php'; ?>
            <br><br>
        <div class="storep-withmargin">
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

            <br><br><br><br><br><br><br><br>
        <section id="categories">
            <hr>
                <h1 style="color:white; letter-spacing:5px; font-family: Neoneon,sans-serif; color:white;" align=center>
                Categories </h1>
            <hr><br><br>
            <div class="section2">
                <a href="men/">
                    <div class="categmen">
                        <img src="imgs/menjewerlrycat.jpg">
                        <div class="categ-text">
                            <h2>MEN'S SECTION </h2>
                        </div>
                        <div class="smscreen-men">
                            <h3> MEN'S SECTION</h3>
                        </div>
                    </div>
                </a>
                <a href="women/">
                    <div class="categwomen">
                        <img src="imgs/jewlrycategorywomenwebp.png">
                        <div class="categ-text">
                            <h2> WOMEN'S SECTION </h2>
                        </div>
                        <div class="smscreen-women">
                            <h3>WOMEN'S SECTION</h3>    
                        </div>
                    </div>
                </a>
                <a href="unisex/">
                    <div class="categboth">
                        <img src="imgs/categboth.png">
                        <div class="categ-text">
                            <h2>UNISEX SECTION</h2>
                        </div>
                        <div class="smscreen-both"> 
                            <h3>UNISEX'S SECTION</h3>
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
                    <?php 
                        $sqlnewitems = 'SELECT Imagesrc FROM productinfo ORDER BY Timeadded DESC LIMIT 3 ';
                        $resultnewitems = mysqli_query($conn, $sqlnewitems);
                        $counter = 1;
                        while ($row = mysqli_fetch_array($resultnewitems))
                        { 
                            ${ 'src' . $counter } = $row['Imagesrc'];  
                            $counter++;
                        }
                    ?>
                <div style="margin-left:5%; width:90%; height:90%; background-color:transparent; overflow:hidden;">
                    <?php //PRFERRABLE DIMENSION 600X400
                    include '../carousalbootstrap.php';?>
                </div> 
            </section>

            <br><br><br><br><br><br><br><br><br><br><br><br>
            <section class="section4">
                <hr>
                <h1 style="color:white; letter-spacing:5px; font-family: Neoneon,sans-serif; color:white;" align=center>
                BEST SELLERS </h1>
                <hr><br>
                <!-- ADD A NEW TABLE FOR SALES AND GROUP BY ETC OR ADD A NWE COLUMN WITH TEH
                AMOUT OF SALES
                AND FOR LAYOUT DO THE SAME THING AS THE ONE BEFORE LITERALLY COPY PASTE IT ! -->
            
            </section>



            <br><br><br><br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br><br><br><br>
            
            <div style="background-color:black;">
                <hr><?php include '../footer.php'; ?>
            </div>
            
        </div>
                 <br>
        <script>
            $('.carousel').carousel({
                    interval: 6000,
                    pause: "false"
                });
        </script>
    </body>
</html>
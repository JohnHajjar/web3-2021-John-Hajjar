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
    <body class="adm-page">
        <?php include '../db.php'; ?>
        <?php include '../upbar.php'; ?>
        <?php     
        if(!isset($_SESSION['status']) && empty($_SESSION['status'])) {
            header("Location: /web3x/store");
        } else if (isset($_SESSION['ID'])  && $_SESSION['ID'] == 0) {
            ?>
            <br><br><br><br>
            <h1 align=center class="hover-effect">ADMIN PAGE </h1>
            <br>
            
            <!--  
                PRODUCT MANAGEMENT -> LIST OF PRODUCTS REMOVE EDIT INSERT 
                PAGES MODIFICATIONS -> CONTACT US - ABOUT US - OUR TEAM - CAREERS
                SALES -> NUMBER OF SALES, SUM OF REVENU.
        
        
        
            -->



            <hr> <h2 align=center  class="hover-effect"> Products management</h2><hr>

            <h5 align=center class="hover-effect"> Here you can see the list of the products in the database,
                 you can also perform remove and edit actions.</h5>
            <div class="admin-box">
                <a class="admin-button" href="#popup1">Product list</a>
             </div>

             
             <h5 align=center class="hover-effect"> Here you can insert products to the database.</h5>
             <div class="admin-box">
                <a class="admin-button" href="#popup2"> Insert </a>
            </div>

            
            <hr> <h2 align=center class="hover-effect"> Pages modifications </h2><hr>

            <br>
            <!-- <h5 align=center> Edit 'Contact Us' page.</h5> -->
            <div class="admin-box" style="float:left;">
                <a class="admin-button" href="#popup3">Contact Us</a>
             </div>
            <br><br>
             
             <!-- <h5 align=center> Edit 'About Us' page.</h5> -->
             <div class="admin-box" style="float:right;">
                <a class="admin-button" href="#popup4">About Us</a>
            </div>
            <br><br>

            <!-- <h5 align=center> Edit 'Our Team' page.</h5> -->
             <div class="admin-box" style="float:left;">
                <a class="admin-button" href="#popup4">Our Team</a>
            </div>
            <br><br>

            <!-- <h5 align=center> Edit 'Careers' page.</h5> -->
             <div class="admin-box" style="float:right;">
                <a class="admin-button" href="#popup4">Careers</a>
            </div>
            <br><br><br><br><br><br>

            <hr> <h2 align=center class="hover-effect"> Satistics + Graphs</h2><hr>
            <!-- NUMBER OF SALES, SUM OF REVENU. 
                NUMBER OF MALE VS FEMALE PRODUCTS SOLD ETC... -->



            <div id="popup1" class="admin-overlay">
                <div class="admin-popup">
                    <h2>Here i am</h2>
                    <a class="close" href="#">&times;</a>
                    <div class="admin-content" >
                        Thank to pop me out of that button, but now i'm done so you can close this window.
                        <br><br><br><br><br><br>
                        ddddd<br><br><br><br><br>
                        dddddd<br><br><br>
                    </div>
                </div>
            </div>
                
            <div id="popup2" class="admin-overlay">
                <div class="admin-popup">
                    <h2> hi 2 </h2>
                    <a class="close" href="#">&times;</a>
                    <div class="admin-content">
                        Pop me 2 baby
                        <br><br><br><br><br><br>
                        ddddd<br><br><br><br><br>
                        dddddd<br><br><br>
                    </div>
                </div>
            </div>



            
      <?php } ?>
            
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/a0043d9bc2.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../jquery-comp-3.6.js"></script>
        <link href="http://fonts.cdnfonts.com/css/brandon-grotesque-regular" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/web3x/stylesheet.css"/>
    </head>
    <body style="background-color:black;">
        <?php // error_reporting(0); ?>
        <?php include '../upbar.php'; ?>
        <?php include '../db.php'; ?> 
        <br><br><br><br><br><br>
        

        <?php 
            $sqlcontactus = 'SELECT CEmail, CPnumber FROM companydetails';
            $rescontactus = mysqli_query($conn,$sqlcontactus);

            $res = mysqli_fetch_row($rescontactus);
            $cemail = $res[0];
            $cpnumber = $res[1];            

        ?>
        
        <div class="responsive-div">
            <h1 class="hover-effect" align=center>Contact Us</h1>
            <small class="hover-effect" align=center> We'd love to hear from you !</small>
            <br><br>
            <h4 align=center>
                Send us an e-mail to :
                    <?php echo $cemail; ?> <br><br><br>
                    <a href="mailto:<?php echo $cemail;?>">
                        <img width="18%" src="data:image/png;base64,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">
                    </a>                  
            </h4>
                <h2 class="hover-effect" align=center> OR </h2>
            <h4 align=center>
                Give us a call on : &nbsp;
                    <?php echo $cpnumber; ?>
                    <br>
                    <img src="">
            </h4>
            <br><br>
        </div>

        
        <?php include '../footer.php' ?>
    </body>
</html>
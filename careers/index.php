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
        
            <div class="responsive-div">
            <h1 class="hover-effect" align=center>Careers</h1>
        
        <?php 
            $sqlcareers = 'SELECT * FROM careers';
            $rescareers = mysqli_query($conn,$sqlcareers);
            ?>
             
                <h2 align=center>
                        Sorry there no current positions open.
                </h2>
            
                <br><br><br>
        </div>
        <?php include '../footer.php'; ?>
    </body>
</html>
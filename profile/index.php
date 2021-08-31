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
        <?php // error_reporting(0); ?> 
        <?php include '../db.php' ?>
        <?php     
        if(!isset($_SESSION['status']) && empty($_SESSION['status'])) {
            header("Location: /web3x");
        } else { ?>
               <!--  EASY PHP QUERY GET ALL USER INFO
                    ADD A CATEGORY FOR LOCATION OF THE USER THAT WILL BE ADDED
                    TO A NEW DB TABLE CALLED USERDETAILS
                    ADD A CHANGE PASSWORD
                    ADD A LOGOUT BUTTON -->
            <form method="post">
                <input type="submit" name="logout-btn" value="Log Out">
            </form>



        <?php } ?> 
    
        <?php 
            if(isset($_POST['logout-btn'])){
                session_destroy();
                header("Location: /web3x/store");
            }
        ?>
    </body>
</html>
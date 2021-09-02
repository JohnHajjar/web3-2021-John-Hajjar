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
            <?php 
                //get userdetails and userinfo
                $sql1 = "SELECT * FROM userinfo WHERE ID = '".$_SESSION['ID']."'";
                $res1 = mysqli_query($conn,$sql1);
                $sql2 = "SELECT * FROM userdetails WHERE ID = '".$_SESSION['ID']."'";
                $res2 = mysqli_query($conn,$sql2);

                $res1arr = mysqli_fetch_row($res1);
                $res2arr = mysqli_fetch_row($res2);
                $displaymessage = '';

                if ($res2arr[1] == 0){
                    $displaymessage = 'Welcome '.$res1arr[1] .'. <br> 
                    This is your profile, please fill out the empty fields.
                    Remember that you can edit everything later on.';
                } else {
                    $displaymessage = 'Welcome back '.$res1arr[1]. ' !';

                }

                //UPDATE MYPROFILE VISITS
                $res2arr[1]++;
                $sqlvisits = "UPDATE userdetails SET ProfileVisit='".$res2arr[1]."' WHERE IDuser ='".$_SESSION['ID']."'";
                $ressqlvisits = mysqli_query($conn,$sqlvisits);


        ?>
            
            <!-- Personal info category  -->

            <!-- Location -->



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
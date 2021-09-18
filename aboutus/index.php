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
            $sqlaboutus = 'SELECT CDescription, CStores FROM companydetails';
            $resaboutus = mysqli_query($conn,$sqlaboutus);

            $res = mysqli_fetch_row($resaboutus);
            $cdesc = $res[0];
            $cstores = $res[1];            

        ?>
        
        <div class="responsive-div">
            <h1 class="hover-effect" align=center>About Us</h1>
            <small class="hover-effect" align=center> </small>

            <h5 align=center style="margin:80px;">
                    <?php echo $cdesc; ?>
            </h5>
                <h2 class="hover-effect" align=center> Stores </h2>
            <h4 align=center>
                    <?php echo $cpnumber; 
                        $storesarr = explode('---',$cstores);
                        for ($i=0; $i<sizeof($storesarr); $i++){
                            echo $storesarr[$i].'<br>';
                        }

                    ?>
            </h4>
            <br><br>
        </div>

        
        <?php include '../footer.php' ?>
    </body>
</html>
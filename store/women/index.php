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
        <link rel="stylesheet" type="text/css" href="../../stylesheet.css"/>
    </head>
    <body style="background-color:black">
        <?php include '../../db.php'; ?>
        <?php include '../../upbar.php'; ?>
        <br><br><br><br><br><br>
        <div class="cover-imgs">
            <img src="https://cfs3.monicavinader.com/images/2020-plp-banner-wide-medium/14078840-doina-plp.jpeg">
          <h1 align=center>Best jewelry <br> for everyday use </h1>
        </div>

    <br><br><br><br>

        <?php $dirgender= basename(__DIR__) ?>
        <?php include '../storeitems.php'; ?>





    <br><br><br><br><br>
        <div style="background-color:black; ">
                <hr><?php include '../../footer.php'; ?>
            </div>



            
    </body>
</html>
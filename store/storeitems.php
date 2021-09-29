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


<!-- Necklaces -- RINGS -- Bracelets -- EARRINGS-->
<section id="items-all">
  <hr>
    <h1 class="storeitem-h1" align=center>
     <?php echo $dirgender; ?> </h1>
  <hr>
  <span class="subcategories"> Necklaces </span>

  <br>

  <div class="items-list">
    <div class="items">
        <?php
            $gender= strtoupper($dirgender);
            $sqlnecklaces = "SELECT ID, Imagesrc FROM productinfo WHERE Gender='".$gender."' AND ProductType='NECKLACES' ";
            $resnecklace = mysqli_query($conn,$sqlnecklaces);
            $counter1 = 0;
            while ($arr = mysqli_fetch_assoc($resnecklace)){
                echo '<form id="prodetails" class="formproducts" method="post" action="../products/" target="_blank">';
                echo '<input type="hidden" id="prodid" name="prodid" value="'.$arr['ID'].'" > ';
                echo '<input type="image" src="'.$arr['Imagesrc'].'"  class="img-items" >';
                echo '</form>';
                $counter1++;
            }


        ?>




      

    </div>
  </div>

  <span class="subcategories"> Bracelets </span>
  <br>

  <div class="items-list">
    <div class="items">
          <?php
              $gender= strtoupper($dirgender);
              $sqlbracelets = "SELECT ID, Imagesrc FROM productinfo WHERE Gender='".$gender."' AND ProductType='BRACELETS' ";
              $resbracelets = mysqli_query($conn,$sqlbracelets);
              $counter2 = 0;
              while ($arr = mysqli_fetch_assoc($resbracelets)){
                  echo '<form id="prodetails" class="formproducts" method="post" action="../products/" target="_blank">';
                  echo '<input type="hidden" id="prodid" name="prodid" value="'.$arr['ID'].'" > ';
                  echo '<input type="image" src="'.$arr['Imagesrc'].'"  class="img-items" >';
                  echo '</form>';
                  $counter2++;
              }
              ?>

    </div>
  </div>

  <span class="subcategories"> Rings </spans>
  <br>

  <div class="items-list">
    <div class="items">
      <?php
              $gender= strtoupper($dirgender);
              $sqlrings = "SELECT ID, Imagesrc FROM productinfo WHERE Gender='".$gender."' AND ProductType='RINGS' ";
              $resrings = mysqli_query($conn,$sqlrings);
              $counter3 = 0;
              while ($arr = mysqli_fetch_assoc($resrings)){
                  echo '<form id="prodetails" class="formproducts" method="post" action="../products/" target="_blank">';
                  echo '<input type="hidden" id="prodid" name="prodid" value="'.$arr['ID'].'" > ';
                  echo '<input type="image" src="'.$arr['Imagesrc'].'"  class="img-items" >';
                  echo '</form>';
                  $counter3++;
              }
              ?>
      
    </div>
  </div>


  <span class="subcategories"> Earrings </spans>
  <br>

  <div class="items-list">
    <div class="items">
          <?php
              $gender= strtoupper($dirgender);
              $sqlearrings = "SELECT ID, Imagesrc FROM productinfo WHERE Gender='".$gender."' AND ProductType='EARRINGS' ";
              $researrings = mysqli_query($conn,$sqlearrings);
              $counter4 = 0;
              while ($arr = mysqli_fetch_assoc($researrings)){
                  echo '<form id="prodetails" class="formproducts" method="post" action="../products/" target="_blank">';
                  echo '<input type="hidden" id="prodid" name="prodid" value="'.$arr['ID'].'" > ';
                  echo '<input type="image" src="'.$arr['Imagesrc'].'"  class="img-items" >';
                  echo '</form>';
                  $counter4++;
              }
              ?>

    </div>
  </div>

</section>


    </body>
</html>
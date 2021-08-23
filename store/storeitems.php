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


<!-- Necklaces -- RINGS -- Bracelets -->
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
                echo '<a href="/products.php?ID='.$arr['ID'].'" >';
                echo '<img src="'.$arr['Imagesrc'].'" >';
                echo '</a>';
                $counter1++;
            }






            // $sqlquerynecklace =
            // "SELECT ID, ProductName, ProductType, Imagesrc, Keywords, Gender, Price FROM productinfo WHERE Gender='".$dirgender."' AND ProductType='NECKLACES' ";
            // $resnecklacemen = mysqli_query($conn,$sqlnecklacemen);
            // $counter = 0;
        //     while ($arr = mysqli_fetch_assoc($resnecklacemen)){
        //       echo "<a href=\"#popup".$arr['ID']."\">";
        //         echo '<img src="'.$arr['Imagesrc'].'" >';
        //       echo '</a>';
        //       echo "<div id=\"popup".$arr['ID']."\" class=\"overlay\">";
        //         echo '<div class="popup">';
        //           echo '<h3> '.$arr['ProductName'].' </h3>';
        //           echo '<a class="close" href="#men"> &times; </a>';
        //           echo '<div class="content">';
        //             echo 'Product type : '. strtolower($arr['ProductType']) . ' for ' . strtolower($arr['Gender']);
        //             echo '<img src="'.$arr['Imagesrc'].'" >';
        //             echo '<br><br>';
        //             echo 'Price : '. $arr['Price'] . ' $ <br>';
        //             echo '<button onclick="addtocart("'.$SESSION['ID'].'", "'.$arr['ID'].'")"> Clickme </button>';
        //             echo '<hr>';
        //             echo '<p>Keywords related to this product : ' . $arr['Keywords'] . '</p>';
        //           echo "</div>";
        //         echo "</div>";
        //       echo "</div>";
        //       $counter++;
        //     }

        // ?>


    <!--get all items about necklaces PHP simple query -->
      <!-- add to HREF to on click item to go to prod details -->

    </div>
  </div>

  <span class="subcategories"> Bracelets </span>
  <br>

  <div class="items-list">
    <div class="items">
      <!--get all items about necklaces PHP simple query -->
      <!-- add to HREF to on click item to go to prod details -->
      <a href="#">
        <img src="../../imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      </a>
      <img src="../../imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      <img src="../../imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      <img src="../../imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      <img src="../../imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      <img src="../../imgs/197313437_921483241967859_3678868605241913414_n.jpg">

    </div>
  </div>

  <span class="subcategories"> Rings </spans>
  <br>

  <div class="items-list">
    <div class="items">
      <!--get all items about necklaces PHP simple query -->
      <!-- add to HREF to on click item to go to prod details -->
      <a href="#"> <!--EASY PHP req to prodetails-->
       <img src="../../imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      </a>
    </div>
  </div>


  <span class="subcategories"> Earrings </spans>
  <br>

  <div class="items-list">
    <div class="items">
      <!--get all items about necklaces PHP simple query -->
      <!-- add to HREF to on click item to go to prod details -->
      <a href="#">
        <img src="imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      </a>
      <img src="../../imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      <img src="../../imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      <img src="../../imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      <img src="../../imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      <img src="../../imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      <img src="../../imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      <img src="../../imgs/197313437_921483241967859_3678868605241913414_n.jpg">

    </div>
  </div>

</section>


    </body>
</html>
<!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.cdnfonts.com/css/neoneon" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
    <script src="https://kit.fontawesome.com/a0043d9bc2.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="jquery-comp-3.6.js"></script>
  </head>

    <body class="storepagecss">
   


    <?php include 'db.php';
                //TO ADD IF SIGNED IN OR NOT
                // USER MUST NOT ENTER THE SHOP IF NOT SIGNED IN AKA A SESSION IN PLACE !!!!!
    //if (!isset($_SESSION)) { header ('location : welcomepage.php'); }
                        // if ( session_status() === PHP_SESSION_NONE || $_SESSION['logged'] == false )
    //font-family: 'IBM Plex Mono',sans-serif;
    ?>

  <?php include 'upbar.php'; ?>
 <br><br>

<div style=" width:70%; margin:auto;">
     <h1 align=center style="color:white; font-family: Neoneon,sans-serif; font-size: 60px; line-height: 1.3em; font-weight: 400;">
         Welcome to JEWXRLY store
    </h1>
</div>

<br><br>

<div class="section1">
    <div class="childs1">
      <img src="imgs/delivery-truck.png" width=25% height=25%> 
       <p style="font-family: cursive;"> Free shipping</p>
    </div>
    <div class="childs2">
       <img src="imgs/return-policy.png" width=25% height=25%>
       <p style="font-family: cursive;"> Easy return</p>
    </div>
    <div class="childs3">
        <img src="imgs/moneybag.png" width=25% height=25%>
        <p style="font-family: cursive;"> Best prices</p>
    </div>
</div>

<br><br><br><br><br><br><br><br><br><br><br>
<div align=center>
    <div class="h2men" align=center >
      <h1 style="color:white; font-family: Neoneon,sans-serif;"> 
        <a href="#men" style="color:white;">MEN's SECTION </a></h1>
    </div>
    <div class="h2women" align=center >
      <h1 style="color:white; font-family: Neoneon,sans-serif;"> 
      <a href="#women" style="color:white;"> WOMEN's SECTION </a></h1>
    </div>
</div>
<br><br><br><br><br><br><br>
    <div class="h2both" >
        <h1 style="color:white; font-family: Neoneon,sans-serif;" align=center>
        <a href="#both" style="color:white;">  UNISEX &nbsp; &nbsp;SECTION </a></h1>
    </div>
<br>

<!-- VARS FOR CATEGORIES AND SUB CATEGORIES -->

<?php

$conn = new mysqli('localhost', 'root', '', 'webdb3');
  $men = 'MEN';
  $women = 'WOMEN';
  $necklaces = 'NECKLACES';
  $bracelets = 'BRACELETS';
  $rings = 'RINGS';
  $earrings = 'EARRINGS';

?>



<!-- Categories : NECKLACE/ RINGS/ BRACELETS/ MEN / WOMEN / COUPLES
        With an explore more on hover showing more of this category (simple sql)-->
<br><br><br><br><br><br><br><br><br>


<!-- Necklaces -- RINGS -- Bracelets -->
<section id="men">
  <hr>
    <h1 style="color:white; letter-spacing:5px; font-family: Neoneon,sans-serif; color:white;" align=center>
     MEN </h1>
  <hr>
  <span class="subcategories"> Necklaces </span>

  <br>
  
  <div class="items-list">  
    <div class="items">
        <?php 
            $sqlnecklacemen = 
            "SELECT ID, ProductName, ProductType, Imagesrc, Keywords, Gender, Price FROM productinfo WHERE Gender='MEN' AND ProductType='NECKLACES' ";
            $resnecklacemen = mysqli_query($conn,$sqlnecklacemen);
            $counter = 0;
            while ($arr = mysqli_fetch_assoc($resnecklacemen)){
              echo "<a href=\"#popup".$arr['ID']."\">";
                echo '<img src="'.$arr['Imagesrc'].'" >';
              echo '</a>';
              echo "<div id=\"popup".$arr['ID']."\" class=\"overlay\">";
                echo '<div class="popup">';
                  echo '<h2> '.$arr['ProductName'].' </h2>';
                  echo '<a class="close" href="#men"> &times; </a>';
                  echo '<div class="content">';
                    echo 'henlo';
                  echo "</div>";
                echo "</div>";
              echo "</div>";
              $counter++;
            }
          
        ?>    
    
    
    <!--get all items about necklaces PHP simple query -->
      <!-- add to HREF to on click item to go to prod details -->
      <a href="#">
        <img src="imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      </a>
    </div>
  </div>

  <span class="subcategories"> Bracelets </span>
  <br>

  <div class="items-list">  
    <div class="items">
      <!--get all items about necklaces PHP simple query -->
      <!-- add to HREF to on click item to go to prod details -->
      <a href="#">
        <img src="imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      </a>
      <img src="imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      <img src="imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      <img src="imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      <img src="imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      <img src="imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      
    </div>
  </div>

  <span class="subcategories"> Rings </spans>
  <br>

  <div class="items-list">  
    <div class="items">
      <!--get all items about necklaces PHP simple query -->
      <!-- add to HREF to on click item to go to prod details -->
      <a href="#"> <!--EASY PHP req to prodetails-->
       <img src="imgs/197313437_921483241967859_3678868605241913414_n.jpg">
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
      <img src="imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      <img src="imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      <img src="imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      <img src="imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      <img src="imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      <img src="imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      <img src="imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      
    </div>
  </div>
  
</section>

<br><b><br>

<section id="women">

<hr>
    <h1 style="color:white; letter-spacing:5px; font-family: Neoneon,sans-serif; color:white;" align=center>
     WOMEN </h1>
  <hr>
  <span class="subcategories"> Necklaces </span>
  <br>
  
  <div class="items-list">  
    <div class="items">
      <!--get all items about necklaces PHP simple query -->
      <!-- add to HREF to on click item to go to prod details -->
      <a href="#">
        <img src="imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      </a>
    </div>
  </div>

  <span class="subcategories"> Bracelets </span>
  <br>

  <div class="items-list">  
    <div class="items">
      <!--get all items about necklaces PHP simple query -->
      <!-- add to HREF to on click item to go to prod details -->
      <a href="#">
        <img src="imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      </a>
    </div>
  </div>

  <span class="subcategories"> Rings </spans>
  <br>

  <div class="items-list">  
    <div class="items">
      <!--get all items about necklaces PHP simple query -->
      <!-- add to HREF to on click item to go to prod details -->
      <a href="#"> <!--EASY PHP req to prodetails-->
       <img src="imgs/197313437_921483241967859_3678868605241913414_n.jpg">
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
    </div>
  </div>

</section>

<br><br>

<section id="both">

<hr>
    <h1 style="color:white; letter-spacing:5px; font-family: Neoneon,sans-serif; color:white;" align=center> 
    UNISEX </h1>
  <hr>
  <span class="subcategories"> Necklaces </span>
  <br>
  
  <div class="items-list">  
    <div class="items">
      <!--get all items about necklaces PHP simple query -->
      <!-- add to HREF to on click item to go to prod details -->
      <a href="#">
        <img src="imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      </a>
      <img src="imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      
      <img src="imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      
      <img src="imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      
      <img src="imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      
      <img src="imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      
    </div>
  </div>

  <span class="subcategories"> Bracelets </span>
  <br>

  <div class="items-list">  
    <div class="items">
      <!--get all items about necklaces PHP simple query -->
      <!-- add to HREF to on click item to go to prod details -->
      <a href="#">
        <img src="imgs/197313437_921483241967859_3678868605241913414_n.jpg">
      </a>
    </div>
  </div>

  <span class="subcategories"> Rings </spans>
  <br>

  <div class="items-list">  
    <div class="items">
      <!--get all items about necklaces PHP simple query -->
      <!-- add to HREF to on click item to go to prod details -->
      <a href="#"> <!--EASY PHP req to prodetails-->
       <img src="imgs/197313437_921483241967859_3678868605241913414_n.jpg">
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
    </div>
  </div>

</section>




<br><br><br><br><br><br><br><br>
<div>
&nbsp; &nbsp; &nbsp;
 <span class="texts" style="color:white; font-size:18px;"> Women test &nbsp;&nbsp;</span>
<a class="expmore" href="expmore.php">
 <span class="expmore"> > </span>
</a>
</div>


<div class="items-list">  
  <div class="items">
    <div class="itemdetails">
    <img src="imgs/197313437_921483241967859_3678868605241913414_n.jpg" width=10% height=10% title="helootest">
    </div>

  </div>
</div>

<br><br>

<div>
&nbsp; &nbsp; &nbsp;
 <span class="texts" style="color:white; font-size:18px;"> Men test &nbsp;&nbsp;</span>
<a class="expmore" href="expmore.php">
 <span class="expmore"> > </span>
</a>
</div>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<script>



$(document).ready(function(){
  $(".texts").mouseenter(function(){
    $('.expmore').animate({'opacity': 0}, 500, function () {
      $(this).html('Explore more ');
  }).animate({'opacity': 1}, 500);
  
   });

   $(".texts").mouseleave(function(){
  
    $('.expmore').delay(4000).animate({'opacity': 0}, 500, function () {
      $(this).html('>');
  }).animate({'opacity': 1}, 500);




   });

});

</script>

    </body>
    </html>
<!DOCTYPE html>
    <html>
    <head>
    <link href="http://fonts.cdnfonts.com/css/neoneon" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
    <script src="https://kit.fontawesome.com/a0043d9bc2.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="jquery-comp-3.6.js"></script>
  </head>

    <body class="storepagecss">
   


    <?php 
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
<!--style="display:inline;"-->
<div align=center>
    <div class="h2men" align=center >
      <h1 style="color:white; font-family: Neoneon,sans-serif;"> MEN's SECTION</h1>
    </div>
    <div class="h2women" align=center >
      <h1 style="color:white; font-family: Neoneon,sans-serif;"> WOMEN's SECTION </h1>
    </div>
</div>
<br><br><br><br><br><br><br>

    <div class="h2both" >
        <h1 style="color:white; font-family: Neoneon,sans-serif;" align=center> UNISEX &nbsp; &nbsp;SECTION </h1>
    </div>
<br><br>





<!-- Categories : NECKLACE/ RINGS/ BRACELETS/ MEN / WOMEN / COUPLES
        With an explore more on hover showing more of this category (simple sql)-->
<br><br><br><br><br><br><br><br><br>


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
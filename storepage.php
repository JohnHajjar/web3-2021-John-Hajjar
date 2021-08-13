<!DOCTYPE html>
    <html>
    <head>
    <link href="http://fonts.cdnfonts.com/css/neoneon" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
    <script src="https://kit.fontawesome.com/a0043d9bc2.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="script.js"></script>
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


<div class="section1">
    <div class="childs1"> 
       FREE SHIPPING !!!
    </div>
    <div class="childs2">
       Easy return !!!!
    </div>
    <div class="childs3">
      Best prices !!
    </div>

</div>




<div> <!-- TOP SELLERS BIG PICTURES -->
</div>

<!-- Categories : NECKLACE/ RINGS/ BRACELETS/ MEN / WOMEN / COUPLES
        With an explore more on hover showing more of this category (simple sql)-->





<div>
&nbsp;&nbsp;&nbsp;
 <span class="texts" style="color:white; font-size:18px;"> Men rings &nbsp;&nbsp;</span>
<a class="expmore" href="expmore.php">
 <span class="expmore"> > </span>
</a>
</div>


<div>  


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



    //$('.expmore').delay(2000).animate({'opacity': 0}, 500);
    //$(".expmore").delay(1000).animate({'opacity': 1}, 500, function() {
    ///  $(this).html('>')
    //});
   });

});

</script>

    </body>
    </html>
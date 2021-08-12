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


<div> <!-- TOP SELLERS BIG PICTURES -->
</div>

<!-- Categories : NECKLACE/ RINGS/ BRACELETS/ MEN / WOMEN / COUPLES
        With an explore more on hover showing more of this category (simple sql)-->





<div>
&nbsp;&nbsp;&nbsp;
 <span class="txt123" style="color:white; font-size:18px;"> Men rings &nbsp;&nbsp;</span>
<span class="expmore" style="color:cyan;"> > </span>
</div>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
hi
<script>





$(document).ready(function(){
  $(".txt123").mouseenter(function(){
    $(".txt123").animate({'font-size':'25px'},"slow");
    
    $(".expmore").html("Explore more >");
  });
  $(".txt123").mouseleave(function(){
    $(".txt123").animate({'font-size':'18px'},"slow");
  
    $(".expmore").html(" >");
  });

});

</script>

    </body>
    </html>
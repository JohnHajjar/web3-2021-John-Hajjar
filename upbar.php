<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="stylesheet.css"/>
</head>

<body>

  <?php $current_file_name = basename($_SERVER['PHP_SELF']);  ?>


<div class="upbar">
    <a href="welcomepage.php"> 
        <img src="imgs/whitejxlogo.jpg" width="55px" height=50px style="margin: 10px;">
    </a>
    
<div class="upbar2">
    <div class="button" id="button-5">
        <div id="translate"></div>
     
        <?php if ($current_file_name == 'signup.php') { ?>
                <a class="a-button" href="login.php"> Login </a>
        <?php  } else if($current_file_name == 'login.php') {?>
                <a class="a-button" href="signup.php"> Sign up </a>
        <?php } else {?>
                <a class="a-button" href=""> Cart </a>
        <?php } ?>
    </div>

    <div class="button" id="button-6">
        <div id="spin"></div>
        <a class="a-button" href="\..\web3x\index.php"> About Us </a>
    </div>     
        
    <div class="button" id="button-5">
        <div id="translate"></div>
        <a class="a-button" href="#">Policy</a>
    </div>
</div>

</div>>


</body>
</html>
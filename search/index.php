<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/a0043d9bc2.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="jquery-comp-3.6.js"></script>
        <link href="http://fonts.cdnfonts.com/css/brandon-grotesque-regular" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/web3x/stylesheet.css"/>
    </head>
    <body style="background-color:black;">
        <?php // error_reporting(0); ?>
        <?php include '../upbar.php'; ?>
        <?php include '../db.php'; ?>
        <?php

            echo '<br><br><br>';
            if (isset($_POST['submit'])){
                if (empty($_POST['searchinput'])){
                    //header("Location: /web3x/store"); 
                    echo $_POST['searchinput'];
                    echo 'bye';
                } else {
                    echo '<div class="searchwelc"><h2 align=center> Items for search <br> \' '.$_POST['searchinput'].' \'</h2></div>';
                    $itemscount = 0;
                    $searchinput = $_POST['searchinput'];
                    $searcharr = explode(' ', $searchinput);

                    $sqlsearchall = "SELECT * FROM productinfo";
                    $ressearchall = mysqli_query($conn,$sqlsearchall);

                    $listeditems = array();
                    echo '<div class="items-list">';
                    echo '<div class="items">';
                    while ($arr = mysqli_fetch_assoc($ressearchall)){
                        $prodkeywordsarr = explode('-',$arr['Keywords']);
                        //1st FOR --> searcharr
                        for ($i=0; $i<sizeof($searcharr); $i++)
                        {
                            //2nd FOR --> prodkeywordsarr
                            for ($j=0; $j<sizeof($prodkeywordsarr); $j++)
                            {
                                if (strtoupper($searcharr[$i]) == $prodkeywordsarr[$j])
                                {
                                    if (in_array($arr['ID'], $listeditems))
                                    {
                                        continue; //item already posted
                                    }
                                    else {  
                                        array_push($listeditems, $arr['ID']);       
                                        echo '<form id="prodetails" class="formproducts" method="post" action="/web3x/products/" target="_blank">';
                                        echo '<input type="hidden" id="prodid" name="prodid" value="'.$arr['ID'].'" > ';
                                        echo '<input type="image" src="'.$arr['Imagesrc'].'"  class="img-items" >';
                                        echo '</form>';
                                        $itemscount++;
                                    }
                                }
                            }   
                        }   
                    }
                    if ($itemscount == 0)
                    {
                        echo '<div class="searchwelc"><h2 align=center> Sorry no items found.</h2></div>';
                    }
                    echo '</div>';
                    echo '</div>';
            echo '<hr>';
            echo '<h5 align=center style="color:white"> ( '. $itemscount .' ) Item(s) found.  </h5>';
            echo '<hr>';  


        }
    }?>

        <!--- put post words in array -->
        <!-- search for all products and keywords putting them in an array -->
        <!--  -->




    </body>
</html>
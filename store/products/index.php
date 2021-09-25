<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="http://fonts.cdnfonts.com/css/neoneon" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a0043d9bc2.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../../jquery-comp-3.6.js"></script>

        <link rel="stylesheet" type="text/css" href="../../stylesheet.css"/>
        <link href="http://fonts.cdnfonts.com/css/brandon-grotesque-regular" rel="stylesheet">

    </head>
    <body class="body-productinfo">
         <?php if (empty($_POST["prodid"]) || !isset($_POST["prodid"]))
               { header('Location: ../');  }
         ?>

    <?php include '../../db.php'; ?>
        <?php include '../../upbar.php'; ?>   

        <?php 
        echo $_POST["prodid"];
        $productID = $_POST["prodid"];
        //get all product info 
        $sqlgetinfo = 'SELECT * FROM productinfo WHERE ID='.$productID;
        $resgetinfo = mysqli_query($conn,$sqlgetinfo);
        while ($arr1 = mysqli_fetch_assoc($resgetinfo)){
            $productName = $arr1['ProductName'];
            $productType = $arr1['ProductType'];
            $Imagesrc = $arr1['Imagesrc'];
            $keywords = $arr1['Keywords'];
            $gendermf = $arr1['Gender'];
            $price = $arr1['Price'];
            $timeadded = $arr1['Timeadded'];
        }

        //get all product details !
        $sqlgetdetails = 'SELECT * FROM productdetails WHERE IDP='.$productID;
        $resgetdetails = mysqli_query($conn,$sqlgetdetails);
        while ($arr2 = mysqli_fetch_assoc($resgetdetails)){
            $allimgsrc = explode("--IMG--", $arr2['AltImgsrc']);
            $instock = $arr2['InStock'];
            $color = $arr2['Color'];
            $description = $arr2['Description'];
            $weight = $arr2['Weight'];
            $dimensions = $arr2['Dimensions'];
            $ratings = $arr2['Ratings'];            
        }

        ?>

        <section id="images-left">
           
            <div class="product-imgs">
                <div class="img-display">
                    <div class="img-showcase">
                        <?php
                             $nbrimgs = sizeof($allimgsrc); 
                                for ($i=0; $i<$nbrimgs; $i++){
                                    echo '<img src="'.$allimgsrc[$i].'">';
                                }
                        ?>
                    </div>
                </div>
                <div class="img-select">
                        <?php 
                            for ($j=1; $j<sizeof($allimgsrc)+1; $j++){
                                echo '<div class="img-item">';
                                echo '<a href="#" data-id="'.$j.'" >';
                                echo '<img src="'.$allimgsrc[$j-1].'">';
                                echo '</a>';
                                echo '</div>';
                            }

                        ?>
                </div>
            </div>
        </section>


        <section id="prodetails-right">
            <div>
                <h1 align=center> <?php echo $productName; ?> </h1>
                <h4 align=center> 
                    <?php echo $gendermf.'  '; ?> &nbsp; - &nbsp; <?php echo ' '.$productType; ?> 
                </h4>
                
                <div class="rating-stars">
                        <div class="star-ratings">
                        <?php $ratingperc = (100*$ratings)/5; ?>
                        <div class="fill-ratings" style="width: <?php echo $ratingperc; ?>%;">
                            <span>★★★★★</span>
                        </div>
                        <div class="empty-ratings">
                            <span>★★★★★</span>
                        </div>
                        </div>
                    (<?php echo $ratings; ?>)
                </div>
                <div class="prodprice">
                   <h3 align=center> <?php echo '$'.$price; ?> </h3>
                </div>
            <hr>
                <table align=center class="table-productpage">
                    <tr>
                        <td>
                            In stock 
                        </td>
                        <td>
                            <?php if($instock > 3){ $instockcolor = 'green';}
                                  else if ($instock > 0 && $instock < 3)
                                        { $instockcolor = 'orange';}
                                  else {$instockcolor = 'red';}
                                ?>
                           <div class="color-instock" style="background-color:<?php echo $instockcolor ?>;">
                           </div> 
                        </td>
                        <td>
                            <?php echo $instock.' left.'; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Color 
                        </td>
                        <td>
                            <div class="color-productpage" style="background-color:<?php echo $color ?>">
                            </div>
                        </td>
                        <td>
                            <?php echo $color; ?>
                        </td>
                    </tr>
                </table>
          <br><br>
            <div class="addtocart-div">
           <!--     <form action="insertcart/" method="post">  $_POST["prodid"]-->
                <form method="post">
                <input type="hidden" name="prodid" value="<?php echo $productID ?>">
                <p align=center> Quantity <input type="text" name="quantity" value="1" style="width:15px;"> </p>
                <input type="submit" name="addtc" class="addtocart-btn" value="ADD TO CART">
                </form>
            </div>

            <?php 
       if(isset($_POST['addtc'])){
           if (!isset($_SESSION['ID']) || empty($_SESSION['ID']))
           {
               echo '<p align=center> Error : You must sign in to be able to add to your cart. </p>';
           }
           else if($_POST['quantity'] === 0){
               echo '<p align=center> Error: 0 is not an acceptable value.</p>';
            }
           else if ($instock < $_POST['quantity']){
                echo '<p align=center> Error : Insuffisent stock. </p>';
           }
           else {
        $sqladdtocart = "INSERT INTO `cart`(`IDuser`, `IDproduct`, `Quantity`) VALUES ('".$_SESSION['ID']."','".$_POST['prodid']."', '".$_POST['quantity']."')"; 
        $resaddtocart = mysqli_query($conn,$sqladdtocart);
            if($resaddtocart) {
               echo '<p align=center> Successful : The item was added to your cart. </p>';
             //UPDATE STOCK
                $newstock = $instock-$_POST['quantity'];
                $sqlupdatestock = 'UPDATE productdetails SET InStock="'.$newstock.'" WHERE IDP="'.$_POST['prodid'].'"';
                $resupdatestock = mysqli_query($conn,$sqlupdatestock);
            }
            else { echo '<p align=center> Error : Please try again later. </p>';} 
            }
    }
            ?>



        <br><br>
        <hr>
                    <h3 align=center> Description & Details. </h3>
                    <span id="span-more" onclick="showhidefunction()" align=center>+</span>
                     <div id="moredetails-productpage">
                        <h4 align=center>
                            Description:
                        </h4>
                        <p align=center> 
                            <?php echo $description; ?>
                        </p>
                        <hr>
                        <h4 align=center>
                            Dimensions
                        </h4>
                        <p align=center>
                            <?php echo $dimensions; ?>
                        </p>
                        <hr>
                        <h4 align=center>
                            Weight
                        </h4>
                        <p align=center>
                            <?php echo $weight; ?>
                        </p>
                        <hr>
                     </div>

        </div> 
    
       </section>

        <script>
            function showhidefunction () {
                if (document.getElementById("moredetails-productpage").style.display == "block")
                {
                    document.getElementById("span-more").innerHTML = "+";
                    document.getElementById("moredetails-productpage").style.display = "none";
                } else {
                    document.getElementById("span-more").innerHTML = "-";
                    document.getElementById("moredetails-productpage").style.display = "block";
                }
        }

            /*------------------*/
                                
                $(document).ready(function() {
                // Gets the span width of the filled-ratings span
                // this will be the same for each rating
                var star_rating_width = $('.fill-ratings span').width();
                // Sets the container of the ratings to span width
                // thus the percentages in mobile will never be wrong
                $('.star-ratings').width(star_rating_width);
                });
            
            /*------------------*/

                const imgs = document.querySelectorAll('.img-select a');
                const imgBtns = [...imgs];
                let imgId = 1;

                imgBtns.forEach((imgItem) => {
                    imgItem.addEventListener('click', (event) => {
                        event.preventDefault();
                        imgId = imgItem.dataset.id;
                        slideImage();
                    });
                });

                function slideImage(){
                    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

                    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
                }

                window.addEventListener('resize', slideImage);
        </script>

    </body>
</html>
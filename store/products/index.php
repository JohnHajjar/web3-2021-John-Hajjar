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
    <body>
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
            $allimgsrc = explode("--IMG--", $arr2['Alt-Imgsrc']);
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
            <div class="rrrr">
                <h2> <?php echo $productName; ?> </h2>
                <h4 align=center> <?php echo $productType; ?> </h4>
                
                <div class="rating-stars">
                        <span class="rrrr"> Product rating : <?php echo $ratings; ?> </span>
                </div>
                <div class="prodprice">
                   <h3> <?php echo '$'.$price; ?> </h3>
                </div>
                <hr>
                <table>
                    <tr>
                        <td>
                            In stock 
                        </td>
                        <td>
                            asd <!--add small green tick if stock >=0 and gray if not -->
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
                            asd<!-- add circle with color inside easy border radius back-color -->
                        </td>
                        <td>
                            <?php echo $color; ?>
                        </td>
                    </tr>
                </table>
        <br><br>
                    <h3> Description & Details. </h3>
    
    
        </div> 
    
       </section>

        <script>
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
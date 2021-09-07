<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/a0043d9bc2.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../jquery-comp-3.6.js"></script>
        <link href="http://fonts.cdnfonts.com/css/brandon-grotesque-regular" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../stylesheet.css"/>
    </head>
    <body class="body-cart">
        <?php include '../db.php'; ?>
        <?php include '../upbar.php'; ?>
        <?php     
        if(!isset($_SESSION['status']) && empty($_SESSION['status'])) {
            header("Location: /web3x");
        } else { ?>

           <?php //get all cart items from DB
           $sqlc1 = "SELECT * FROM cart WHERE IDuser='".$_SESSION['ID']."'";
           $resc1 = mysqli_query($conn,$sqlc1);
           $totalcheckout = 0;
           $counterc1 = 0;
           $arrIDprods = array ();
           $quantity = array();
           while ($arr1 = mysqli_fetch_assoc($resc1)){
                $arrIDprods[$counterc1] = $arr1['IDproduct'];
                $quantity[$counterc1] = $arr1['Quantity'];
                $counterc1++;
           }
        //Now we have all the quantities and all the product IDs

        //Get all the product information
           //and insert in a table directly;
           echo '<br><br><br><br><br><br><br>';
           echo '<div class="table-wrapper">';
           echo '<table class="table-cart" border="1">';
           echo '<th>Product Display</th>';
           echo '<th>Name</th>';
           echo '<th>Type</th>';
           echo '<th>Quantity</th>';
           echo '<th>Price</th>';
           echo '<th>Action</th>';

            for ($i=0; $i<sizeof($arrIDprods);$i++){
                echo '<tr>';
                $sqlc2 = "SELECT * FROM productinfo WHERE ID='".$arrIDprods[$i]."'";
                $resc2 = mysqli_query($conn,$sqlc2);
                $arr_resc2 = mysqli_fetch_row($resc2);
                //add to total 
                $totalcheckout += $arr_resc2[6]*$quantity[$i];
                echo '<td style="display:contain;">';
                    echo '<img src="'.$arr_resc2[3].'" class="img-display-cart">';
                echo '</td>';
                echo '<td align=center>';
                    echo  $arr_resc2[1];
                echo '</td>';
                echo '<td align=center>';
                    echo $arr_resc2[2];
                echo '</td>';
                echo '<td align=center>';
                    echo '&nbsp;';
                    echo '<input type="text" value="'.$quantity[$i].'" class="quantity" style="width: 12px" disabled>';
                    echo 'x $'.$arr_resc2[6];
                echo '</td>';
                echo '<td align=center>';
                    echo '$'.($quantity[$i]*$arr_resc2[6]);
                echo '</td>';                
                echo '<td align=center>';
                    echo '<button name="remove" class="remove remove-btn" value="'.$arr_resc2[0].'"> REMOVE </button>';
                echo '</td>';
                echo '</tr>';
           }
           echo '<tr>';
           echo '<td colspan="3" align=right>';
           echo 'Items in cart : '. $counterc1. '  ';
           echo '</td>';
           echo '<td colspan="3" align=center>';
           echo 'Total price : $' .$totalcheckout;
           echo '</td>';
           echo '</tr>';
           echo '</table>';
           echo '</div>';
           ?>

           <?php 
            echo '<div class="checkout-div">';
            echo '<p align=center>Proceed to checkout <br> <span class="cart-vals"> '.$counterc1.' </span> items with a total of <span class="cart-vals"> $'
            .$totalcheckout.' </span><br><br> </p>' ; 
            echo '<button name="checkout" class="checkout remove-btn" value="Checkout"> Checkout </button>';
            echo '</div>';
           ?>
            


    <?php } ?>

           
    <?php
    
    if(isset($_POST["action"]))
    {
        if($_POST["action"]=="remove"){
            $idp=$_POST['prodid'];
            $quantity=$_POST['quantity'];
                $sqldel = "DELETE FROM cart WHERE IDproduct='$idp' AND IDuser='".$_SESSION['ID']."'";
                        $resdel = mysqli_query($conn, $sqldel); 
                   }
    }
    ?>


    <script>
        $(".remove").click(function(){
        var prodid = $(this).attr("value");
    var quantity= $(".quantity").text();
    var action = 'remove';

        if(confirm("Are you sure you want to remove this product?"))
        {
            $.ajax({
                url:"index.php",
                method:"POST",
                data:{'prodid':prodid, 'action':action, 'quantity':quantity},
                success:function()
                {
                    location.reload();
                }
            })
        }
        else
        {
            return false;
        }
    });

    </script>


    </body>
</html>
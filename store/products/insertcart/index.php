<?php echo 'asdasdasdas'; ?>
<?php
    include '../../../db.php'; 
?>
<?php 
       if(isset($_POST['addtc'])){
    echo 'hi';
        $sqladdtocart = "INSERT INTO cart (IDuser,IDproduct) VALUES('".$_SESSION['ID']."','".$_POST['prodid']."')";
        $resaddtocart = mysqli_query($conn,$sqladdtocart);
            if($resaddtocart) {
                header("Location: ../");
            }
            else { echo 'false';}
       }
       else {
           echo 'elseeeeeeee';
       }
            ?>

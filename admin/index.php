<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/a0043d9bc2.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../jquery-comp-3.6.js"></script>
        <link href="http://fonts.cdnfonts.com/css/brandon-grotesque-regular" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/web3x/stylesheet.css"/>
    </head>
    <body class="adm-page">
        <?php include '../db.php'; ?>
        <?php include '../upbar.php'; ?>
        <?php
        if(!isset($_SESSION['status']) && empty($_SESSION['status'])) {
            header("Location: /web3x/store");
        } else if (isset($_SESSION['ID'])  && $_SESSION['ID'] == 0) {
            ?>
            <br><br><br><br>
            <h1 align=center class="hover-effect">ADMIN PAGE </h1>
            <br>

            <!--
                PRODUCT MANAGEMENT -> LIST OF PRODUCTS REMOVE EDIT INSERT
                PAGES MODIFICATIONS -> CONTACT US - ABOUT US - OUR TEAM - CAREERS
                SALES -> NUMBER OF SALES, SUM OF REVENU.



            -->



            <hr> <h2 align=center  class="hover-effect"> Products management</h2><hr>

            <h5 align=center class="hover-effect"> Here you can see the list of the products in the database,
                 you can also perform remove and edit actions.</h5>
            <div class="admin-box">
                <a class="admin-button" href="#popup1">Product list</a>
             </div>


             <h5 align=center class="hover-effect"> Here you can insert products to the database.</h5>
             <div class="admin-box">
                <a class="admin-button" href="#popup2"> Insert </a>
            </div>


            <hr> <h2 align=center class="hover-effect"> Pages modifications </h2><hr>

            <br>
            <!-- <h5 align=center> Edit 'Contact Us' page.</h5> -->
            <div class="admin-box" style="float:left;">
                <a class="admin-button" href="#popup3">Contact Us</a>
             </div>
            <br><br>

             <!-- <h5 align=center> Edit 'About Us' page.</h5> -->
             <div class="admin-box" style="float:right;">
                <a class="admin-button" href="#popup4">About Us</a>
            </div>
            <br><br>

            <!-- <h5 align=center> Edit 'Our Team' page.</h5> -->
             <div class="admin-box" style="float:left;">
                <a class="admin-button" href="#popup4">Our Team</a>
            </div>
            <br><br>

            <!-- <h5 align=center> Edit 'Careers' page.</h5> -->
             <div class="admin-box" style="float:right;">
                <a class="admin-button" href="#popup4">Careers</a>
            </div>
            <br><br><br><br><br><br>

            <hr> <h2 align=center class="hover-effect"> Satistics + Graphs</h2><hr>
            <!-- NUMBER OF SALES, SUM OF REVENU.
                NUMBER OF MALE VS FEMALE PRODUCTS SOLD ETC... -->



            <div id="popup1" class="admin-overlay" >
                <div class="admin-popup">
                    <h2 align="center" class="hover-effect">List of all products in DB</h2>
                    <a class="close" href="#">&times;</a>
                    <div class="admin-content" >
                        <?php
                            $sqllist = "SELECT * FROM productinfo";
                            $reslist = mysqli_query($conn,$sqllist);
                            echo '<table border="1" style="display:flex-grow; overflow:auto;">';
                            echo '<th> Name </th>';
                            echo '<th> Type </th>';
                            echo '<th> Imagesrc </th>';
                            echo '<th> Keywords </th>';
                            echo '<th> Gender </th>';
                            echo '<th> Price </th>';
                            echo '<th> Edit </th>';
                            echo '<th> Remove </th>';
                            while ($arr = mysqli_fetch_assoc($reslist)){
                                echo '<tr>';
                                    echo '<td>';
                                        echo $arr['ProductName'];
                                    echo '</td>';
                                    echo '<td>';
                                        echo $arr['ProductType'];
                                    echo '</td>';
                                    echo '<td style="max-width:250px; overflow:auto; user-select:text;">';
                                        echo $arr['Imagesrc'];
                                    echo '</td>';
                                    echo '<td>';
                                        echo $arr['Keywords'];
                                    echo '</td>';
                                    echo '<td>';
                                        echo $arr['Gender'];
                                    echo '</td>';
                                    echo '<td>';
                                        echo $arr['Price'];
                                    echo '</td>';
                                    echo '<td>';
                                        echo '<form method="POST">';
                                        echo '<input type="hidden" name="productid" value="'.$arr['ID'].'">';
                                        echo '<input type="submit" name="edit-product" value="EDIT">'; 
                                        echo '</form>';                    
                                    echo '</td>';
                                    echo '<td>';
                                        echo '<button name="remove-adm" class="remove-adm" value="'.$arr['ID'].'">';
                                         echo 'Remove';
                                       echo '</button>';
                                    echo '</td>';
                                echo '</tr>';
                            }
                            echo '</table>';
                         ?>
                         <br>
                    </div>           
                    </div>
                </div>
             </div>

            <div id="popup2" class="admin-overlay">
                <div class="admin-popup">
                    <h2 align=center> Insert a product </h2>
                    <a class="close" href="#">&times;</a>
                    <div class="admin-content">
                    <div class="insert-section">    
                    <h5 align=center> --Product Info-- </h5>
                        <form name="insertprod" class="insert-form formadm" method="POST"> 
                            Name <input type="text" name="pname" placeholder="Name"><br>
                            Type <input type="text" name="ptype" placeholder="Type" ><br>
                            
                            Imagesrc <small> Main image source (1) </small>
                            <input type="text" name="pimgsrc" placeholder="Image source"><br>
                    
                            Keywords <small> Uppercase with ' - ' between words </small>
                            <input type="text" name="pkeywords" placeholder="KEY--WORDS"><br>
                            
                            Gender <small> MEN - WOMEN OR BOTH ONLY </small>
                            <input type="text" name="pgender" placeholder="GENDER"><br>
                            
                            Price <small> Just the number </small>
                            <input type="text" name="pprice" placeholder="Price"><br>

                            <h5 align=center>--Product Details--</h5>
                            
                            Main img + more imgs <small> Seperate each URL with ' --IMG-- ' </small>
                            <input type="text" name="paltimg" placeholder="alt-imgs"><br>
                            In-Stock <input type="text" name="pstock" placeholder="In-stock"><br>
                            Color <input type="text" name="pcolor" placeholder="Color"><br>
                            Description <input type="text" name="pdesc" placeholder="Description"><br>
                            Weight <input type="text" name="pweight" placeholder="Weight"><br>
                            Dmiensions <input type="text" name="pdimensions"  placeholder="Dimensions"><br>
                            Ratings <input type="text" name="pratings"  placeholder="Ratings"><br>
                            <button type="submit" name="insert-product"> Insert </button> 
                            
                        </form> 
                    </div>
                    </div>
                </div>
            </div>




      <?php } ?>


      <?php
        //INSERT
        if (isset($_POST['insert-product'])){
            $pname = $_POST['pname'];
            $ptype = strtoupper($_POST['ptype']);
            $pimgsrc = $_POST['pimgsrc'];
            $pkeywords = $_POST['pkeywords'];
            $pgender = $_POST['pgender'];
            $pprice = $_POST['pprice'];

            $paltimg = $_POST['paltimg'];
            $pstock = $_POST['pstock'];
            $pcolor = $_POST['pcolor'];
            $pdesc = $_POST['pdesc'];
            $pweight = $_POST['pweight'];
            $pdimensions = $_POST['pdimensions'];
            $pratings = $_POST['pratings'];

            $sqlinsert1 = 'INSERT INTO productinfo (ProductName, ProductType, Imagesrc, Keywords, Gender, Price)
                            VALUES ("'.$pname.'","'.$ptype.'","'.$pimgsrc.'","'.$pkeywords.'","'.$pgender.'","'.$pprice.'")';
            $sqlinsert2 = 'INSERT INTO productdetails (AltImgsrc, InStock, Color, Description, Weight, Dimensions, Ratings)
                            VALUES ("'.$paltimg.'","'.$pstock.'","'.$pcolor.'","'.$pdesc.'","'.$pweight.'","'.$pdimensions.'","'.$pratings.'")';

            $resinsert1 = mysqli_query($conn,$sqlinsert1);

            if ($resinsert1)
            {
                $resinsert2 = mysqli_query($conn,$sqlinsert2);
                if ($resinsert2){
                    echo '<script> alert("The product was inserted !") </script>';
                } else {
                    echo '<script> alert("Database error product only inserted in first table. Please contact a professional.") </script>';
                }
            } else {
                echo '<script> alert("Database error nothing was inserted.") </script>';
            }


        }

        //EDIT
        if (isset($_POST['edit-product'])){
            $prodid = $_POST['productid']; 
            // echo '<script> alert("product : '.$prodid.'"); </script>';

            echo '<div class="edit-div" id="div-edit">';
            echo '<br>';
            echo '<h2> Editing the product " '.$prodid.' " </h2>';
            echo '<div class="close" onclick="closeEdit()"> &times; </div>';
            $sqledit1 = "SELECT * FROM productinfo WHERE ID='$prodid'";
            $sqledit2 = "SELECT * FROM productdetails WHERE IDP='$prodid'";
            $resedit1 = mysqli_query($conn,$sqledit1);
            $resedit2 = mysqli_query($conn,$sqledit2);
            $row1 = mysqli_fetch_row($resedit1);
            $row2 = mysqli_fetch_row($resedit2);

                $editpname = $row1[1];
                $editptype = $row1[2];
                $editpimgsrc = $row1[3];
                $editpkeywords = $row1[4];
                $editpgender = $row1[5];
                $editpprice = $row1[6];

                $editpaltimg = $row2[1];
                $editpstock = $row2[2];
                $editpcolor = $row2[3];
                $editpdesc = $row2[4];
                $editpweight = $row2[5];
                $editpdimensions = $row2[6];
                $editpratings = $row2[7];
                echo '<h5 align=center> --Product Info-- </h5>';
                echo '<form class="formadm" method="POST">';
                echo '<input type="hidden" name="pid" value="'.$prodid.'">';
                echo 'Name <input type="text" name="pname" value="'.$editpname.'"><br>';
                echo 'Type <input type="text" name="ptype" value="'.$editptype.'"><br>';
                echo 'Imagesrc <input type="text" name="pimgsrc" value="'.$editpimgsrc.'"><br>';
                echo 'Keywords <input type="text" name="pkeywords" value="'.$editpkeywords.'"><br>';
                echo 'Gender <input type="text" name="pgender" value="'.$editpgender.'"><br>';
                echo 'Price <input type="text" name="pprice" value="'.$editpprice.'"><br>';

                echo '<h5 align=center>--Product Details--</h5>';
                echo 'Alt-Img-sources for display <small> keep srcs seperated by --IMG-- </small>
                 <input type="text" name="paltimg" value="'.$editpaltimg.'"><br>';
                echo 'In-Stock <input type="text" name="pstock" value="'.$editpstock.'"><br>';
                echo 'Color <input type="text" name="pcolor" value="'.$editpcolor.'"><br>';
                echo 'Description <input type="text" name="pdesc" value="'.$editpdesc.'"><br>';
                echo 'Weight <input type="text" name="pweight" value="'.$editpweight.'"><br>';
                echo 'Dimensions <input type="text" name="pdimensions" value="'.$editpdimensions.'"><br>';
                echo 'Ratings <input type="text" name="pratings" value="'.$editpratings.'"><br>';
                echo '<br><br>';
                echo '<button type="submit" name="ed-prod"> Submit Edit </button>';
                echo '</form>';
                echo '<br><br>';
            echo '</div>';

             echo '<script>window.scrollTo(0.5,document.body.scrollHeight); </script>';

        }
            
        if(isset($_POST['ed-prod'])){
            $idp = $_POST['pid'];
            $PN = $_POST['pname'];
            $PT = $_POST['ptype'];
            $PI = $_POST['pimgsrc'];
            $PK = $_POST['pkeywords'];
            $PG = $_POST['pgender'];
            $PP = $_POST['pprice'];

            $PAL = $_POST['paltimg'];
            $PS = $_POST['pstock'];
            $PC = $_POST['pcolor'];
            $PDESC = $_POST['pdesc'];
            $PW = $_POST['pweight'];
            $PDIM = $_POST['pdimensions'];
            $PR = $_POST['pratings'];


            $sqlsubmitedit1 = 'UPDATE productinfo SET ProductName="'.$PN.'", ProductType="'.$PT.'",
            Imagesrc="'.$PI.'", Keywords="'.$PK.'", Gender="'.$PG.'", Price="'.$PP.'" 
            WHERE ID="'.$idp.'"';

            $sqlsubmitedit2 = 'UPDATE productdetails SET AltImgsrc="'.$PAL.'", InStock="'.$PS.'",
            Color="'.$PC.'", Description="'.$PDESC.'", Weight="'.$PW.'", Dimensions="'.$PDIM.'",
            Ratings ="'.$PR.'" WHERE IDP="'.$idp.'"';

            $ressubmitedit1 = mysqli_query($conn,$sqlsubmitedit1);
            $ressubmitedit2 = mysqli_query($conn,$sqlsubmitedit2);
            if ($ressubmitedit1 && $ressubmitedit2){
                echo '<script> alert("Product successfully updated !") </script>';
            } else {
                echo '<script> alert("There was a database error. Product not updated.") </script>';
            }
        }



        if (isset($_POST["action"])){
            if ($_POST["action"] == "remove-prod-adm"){
                $idp = $_POST["prodid"];
                $sqldel1 = "DELETE FROM productinfo WHERE ID='$idp'";
                $sqldel2 = "DELETE FROM productdetails WHERE IDP='$idp'";
                $resdel1 = mysqli_query($conn,$sqldel1);
                $resdel2 = mysqli_query($conn,$sqldel2);
                if ($resdel1 && $resdel2){
                    echo '<script>alert("Product successfully deleted.")</script>';
                }
            }

        }


            
        
      ?>

    <script>
      
         $(".remove-adm").click(function(){
             var action = 'remove-prod-adm';
             var prodid = $(this).attr("value");

             if(confirm("Are you sure you want to remove this product from the databse for ever ?"))
             {
                 $.ajax({
                     url:"index.php",
                     method:"POST",
                     data:{'prodid':prodid, 'action':action},
                     success:function(){
                         location.reload();
                     }
                 })
             }
             else {
                 return false;
             }

         });

         function closeEdit(){
            var x =document.getElementById("div-edit");
            if(x.style.display = "block")
            {
            x.style.display = "none";
        }
        }

        //  $(".edit-product").click(function(){
        //     $("#tedit").attr("hidden",false);
        //     var action = 'edit-prod-adm';
        //     //var prodid = $(this).attr("value");
        //          $.ajax({
        //              url:"index.php",
        //              method:"POST",
        //              data:{'action':action},
                     
        //          })
    
        //     });
    </script>

    </body>
</html>
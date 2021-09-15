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



            <div id="popup1" class="admin-overlay">
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
                                    echo '<td style="max-width:50px; overflow:auto; user-select:text;">';
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
                                        echo '<button name="edit-adm" class="edit-adm" value="'.$arr['ID'].'">';
                                         echo 'Edit';
                                        echo '</button>';
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
                        <div class="edit-section">
                            <br><br>
                            <h2 align=center class="hover-effect"> Editing Product
                            <h5 align=center> --Product Info-- </h5>
                            Name <input type="text" name="pname"><br>
                            Type <input type="text" name="ptype"><br>
                            Imagesrc <input type="text" name="pimgsrc"><br>
                            Keywords <input type="text" name="pkeywords"><br>
                            Gender <input type="text" name="pgender"><br>
                            Price <input type="text" name="pprice"><br>

                            <h5 align=center>--Product Details--</h5>
                            Alt-Img-sources <input type="text" name="paltimg"><br>
                            In-Stock <input type="text" name="pstock"><br>
                            Color <input type="text" name="pcolor"><br>
                            Description <input type="text" name="pdesc"><br>
                            Weight <input type="text" name="pweight"><br>
                            Dmiensions <input type="text" name="pdimensions"><br>
                            Ratings <input type="text" name="pratings"><br>
                        </div>
                    </div>
                </div>
            </div>
                
            <div id="popup2" class="admin-overlay">
                <div class="admin-popup">
                    <h2> hi 2 </h2>
                    <a class="close" href="#">&times;</a>
                    <div class="admin-content">
                        Pop me 2 baby
                        <br><br><br><br><br><br>
                        ddddd<br><br><br><br><br>
                        dddddd<br><br><br>
                    </div>
                </div>
            </div>



            
      <?php } ?>


      <?php 
        if (isset($_POST["action"])){
            if ($_POST["action"] == "remove-prod-adm"){
                $idp = $_POST["prodid"];
                $sqldel1 = "DELETE FROM productinfo WHERE ID='$idp'";
                $sqldel2 = "DELETE FROM productdetails WHERE ID='$idp'";
                $resdel1 = mysqli_query($conn,$sqldel1);
                $resdel2 = mysqli_query($conn,$sqldel2);
                if ($resdel1 && $resdel2){
                    echo '<script>alert("Product successfully deleted.")</script>';
                }
            }
        }
      ?>

    <script>
        $(".edit-adm").click(function(){
            if ($(".edit-section").css("display") == "none")
            {
                var idp = $(this).attr("value");
                $.ajax({
                        //PUT POST VARIABLES IN THE EDIT INPUT TYPES
                        //MAKE SAME AS REMOVE ISSET ABOVE AND PLACE THE VALUES IN POST VARS
                        //SHOULD DISPLAY THE CORRECT VALUES 
                        //ADD FORM AND A BUTTON CHECK IF CHANGES IF YES THEN EDIT
                        //IF NO THEN NO
                })
                $(".edit-section").css("display","grid");
            } else {
                $(".edit-section").css("display","none");
            }
                
        });

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

         $(".edit-adm").click(function(){

         });
    </script>
            
    </body>
</html>
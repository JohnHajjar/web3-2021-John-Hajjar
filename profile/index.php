<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/a0043d9bc2.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="jquery-comp-3.6.js"></script>
        <link href="http://fonts.cdnfonts.com/css/brandon-grotesque-regular" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../stylesheet.css"/>
    </head>
    <body style="background-color:black;">
        <?php include '../db.php'; ?>
        <?php include '../upbar.php'; ?>
        <?php     
        if(!isset($_SESSION['status']) && empty($_SESSION['status'])) {
            header("Location: /web3x");
        } else { ?>
               <!--  EASY PHP QUERY GET ALL USER INFO
                    ADD A CATEGORY FOR LOCATION OF THE USER THAT WILL BE ADDED
                    TO A NEW DB TABLE CALLED USERDETAILS
                    ADD A CHANGE PASSWORD
                    ADD A LOGOUT BUTTON -->
            <?php 
                //get userdetails and userinfo
                $sql1 = "SELECT * FROM userinfo WHERE ID = '".$_SESSION['ID']."'";
                $res1 = mysqli_query($conn,$sql1);
                $sql2 = "SELECT * FROM userdetails WHERE IDuser = '".$_SESSION['ID']."'";
                $res2 = mysqli_query($conn,$sql2);

                $res1arr = mysqli_fetch_row($res1);
                $res2arr = mysqli_fetch_row($res2);
                $displaymessage = '';
                
 
                if ($res2arr[1] == 0){
                    $displaymessage = 'Welcome '.$res1arr[1] .'. <br> 
                    This is your profile, please fill out the empty fields. <br>
                    Remember that you can edit everything later on.';
                } else {
                    $displaymessage = 'Welcome back '.$res1arr[1]. ' !';

                }

                //UPDATE MYPROFILE VISITS
                $res2arr[1]++;
                $sqlvisits = "UPDATE userdetails SET ProfileVisit='".$res2arr[1]."' WHERE IDuser ='".$_SESSION['ID']."'";
                $ressqlvisits = mysqli_query($conn,$sqlvisits);

               

        ?>

        <section class="myprofile" >
            

        <div class="col-xl-8">
          <div class="card">
            <div class="card-header">
              <div class="row">
                    <?php echo '<p align=center>'.$displaymessage.'</p>'; ?>
                    <hr style="color:rgba(212, 175, 55,1); width:100%;">
               </div>   
            </div>               
            
            <form method="post" class="myprofile-form">
                <!-- Personal info category  -->
             <h4> User information</h4>
             <hr style="color:white; width:80%; margin-top:-10px;">
                
             <h5>Full name</h5>
             <input type="text" name="fullname" class="myprofile-input" value="<?php echo $res1arr[1]; ?>"disabled>
            
             <h5> Username </h5>
             <input type="text" name="username" class="myprofile-input" value="<?php echo $res1arr[2]; ?>" disabled >
             
             <h5>Phone number</h5>
             <input type="text" name="pnumber" class="myprofile-input" value="<?php echo $res1arr[3]; ?>" disabled>
        
             <h5>E-mail</h5>
              <input type="text" name="email" class="myprofile-input" style="width:150px;" value="<?php echo $res1arr[4]; ?>" disabled>  
                

            <!-- Location -->
            <br>
            <h4> Contact information</h4>
             <hr style="color:white; width:80%; margin-top:-10px;">
            <h5>Address</h5>
            <input type="text" name="address" class="myprofile-input" style="width:150px;" value="<?php echo $res2arr[2]; ?>" disabled>  
             
            <h5>City</h5>
            <input type="text" name="city" class="myprofile-input" value="<?php echo $res2arr[3]; ?>" disabled>
            
            <h5>Country</h5>
            <input type="text" name="country" class="myprofile-input" value="<?php echo $res2arr[4]; ?>" disabled>
            
            <h5>Postal code</h5>
            <input type="text" name="postalcode" class="myprofile-input" value="<?php echo $res2arr[5]; ?>" disabled>


            <br>    
            <!--Change password --> 
            <h4>Change password</h4>
            <hr style="color:white; width:80%; margin-top:-10px;">
            <small align=center style="font-size:10px; margin-bottom:-10px;"> Please, leave this field empty if you do not wish to change your password.</small>
            <h5> Old password </h5>
            <input type="text" class="myprofile-input" name="oldpass" value="" disabled>
            <h5> New password </h5>
            <input type="text" class="myprofile-input" name="newpass" value="" disabled>
                <br>
            <hr style="color:white; width:80%; ">
            <br><br>
                <input type="submit" class="myprofile-btn" name="save-btn" id="save-btn" value="SAVE CHANGES" disabled>
            </form>
     
            <br><br>
            <button class="myprofile-btn" onclick="enable_edit()">EDIT</button>
            <br><br>
            <form method="post">
                <input type="submit" class="myprofile-btn" name="logout-btn" value="LOG OUT">
                <br>
            </form>


            
        </div>
        <br><br>
    </div>



        </section>
        <?php } ?> 
    
        <?php 
            if(isset($_POST['logout-btn'])){
                session_destroy();
                header("Location: /web3x/store");
            }


            //My Profile change password
    if (isset($_POST['save-btn'])) {
        //update database for any change  
        
        if (empty($_POST['fullname']) || empty($_POST['username']) || empty($_POST['pnumber'])
         || empty($_POST['email']) || empty($_POST['address']) || empty($_POST['city']) ||
          empty($_POST['country'])|| empty($_POST['postalcode']))
          {
            echo '<script>alert("None of the fields must be empty.")</script>';
          } else {
             
            $errors = 0;

            if ($res1arr[2] != $_POST['username']) {
            //Check if username exists already ( usercheck -> uc )
            $sqluc = "SELECT * FROM userinfo WHERE Username='".$_POST['username']."' LIMIT 1";
            $resultuc = mysqli_query($conn,$sqluc);
            if(mysqli_num_rows($resultuc) > 0){
                echo '<script>alert("Username already exists.")</script>';
                $errors++;
                }
            }
            if ($res1arr[3] != $_POST['pnumber']) {
            //Check if pnumber exists already ( pnumbercheck -> pc )
            $sqlpc = "SELECT * FROM userinfo WHERE Pnumber='".$_POST['pnumber']."' LIMIT 1";
            $resultpc = mysqli_query($conn,$sqlpc);
            if(mysqli_num_rows($resultpc) > 0){
                echo '<script>alert("Phone number already exists.")</script>';
                $errors++;
                }
            }
            if ($res1arr[4] != $_POST['email']) {
            //Check if email exists already ( emailcheck -> ec )
            $sqlec = "SELECT * FROM userinfo WHERE Email='".$_POST['email']."' LIMIT 1";
                $resultec = mysqli_query($conn,$sqlec);
                if (mysqli_num_rows($resultec) > 0){
                    echo '<script>alert("Email already exists.")</script>';
                    $errors++;
                    }  
            }
                
                if ($errors==0){
                         
                     $sql01 = "UPDATE userinfo SET FullName='".$_POST['fullname']."',Username='".$_POST['username']."',
                    Pnumber='".$_POST['pnumber']."',Email='".$_POST['email']."'
                    WHERE ID='".$_SESSION['ID']."' ";

                    $sql02 = "UPDATE userdetails SET Address='".$_POST['address']."', City='".$_POST['city']."',
                    Country='".$_POST['country']."', PostalCode='".$_POST['postalcode']."'
                    WHERE IDuser='".$_SESSION['ID']."'";
                
                    $res01 = mysqli_query($conn,$sql01);
                    $res02 = mysqli_query($conn,$sql02);

                    if ($res01 && $res02){
                        echo '<script>alert("Changes saved !")</script>';
                    }
                
                } 
    
           }
           
           //change pasword field
        if (!empty($_POST['oldpass'] || !empty($_POST['newpass']))){
    
            //check if old pass = old pass true
            $password = $_POST['oldpass'];
            $hashedpass = $res1arr[5];
            
            if (password_verify($password, $hashedpass))
             {
                //change password     
                $newpassword = password_hash($_POST['newpass'], PASSWORD_DEFAULT);
                $sql11 = "UPDATE userinfo SET Password='".$newpassword."' WHERE ID='".$_SESSION['ID']."'";
                $res11 = mysqli_query($conn,$sql11);
                echo '<script>alert("Password changed !")</script>';
             } else {
                 echo 'Old password is wrong.';
             }
        }
        
    }
    
        ?>

            <script>
                function enable_edit() {
                 var inputs = document.getElementsByClassName('myprofile-input');
                for(var i = 0; i < inputs.length; i++) {
                    inputs[i].disabled = false;
                    }
                document.getElementById("save-btn").disabled = false;
                }
            </script>
    </body>
</html>
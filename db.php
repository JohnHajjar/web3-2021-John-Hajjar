<?php

session_start();

$fullname= "";
$username = "";
$phonenumber = "";
$email= "";
$password="";
$errors= [];

$conn = new mysqli('localhost', 'root', '', 'webdb3');
//SIGN UP 
if (isset($_POST['signupbtn'])){
    if (empty($_POST['fullname'])){
        $errors['Name'] = 'Name is required';
    }
    if (empty($_POST['username'])){
        $errors['Username'] = 'Username is required';
    }
    if (empty($_POST['pnumber'])){
        $errors['Pnumber'] = 'Phone number is required';
    }
    if (empty($_POST['email'])){
        $errors['email']= 'A password is required';
    }
    if (empty($_POST['pass'])){
        $errors['pass']= 'A password is required';
    }
    if (isset($_POST['pass']) && $_POST['pass'] !== $_POST['cpass']){
        $errors['cpass'] = 'The two passwords do not match';
        echo '<script>alert("'.$errors['cpass'].'")</script>' ;
    }

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$phonenumber = $_POST['pnumber'];
$email = $_POST['email'];
$password = password_hash($_POST['pass'], PASSWORD_DEFAULT);

//Check if username exists already ( usercheck -> uc )
$sqluc = "SELECT * FROM userinfo WHERE Username='$username' LIMIT 1";
$resultuc = mysqli_query($conn,$sqluc);
if(mysqli_num_rows($resultuc) > 0){
    $errors['uc'] = 'Username already exists';
}

//Check if pnumber exists already ( pnumbercheck -> pc )
$sqlpc = "SELECT * FROM userinfo WHERE Pnumber='$phonenumber' LIMIT 1";
$resultpc = mysqli_query($conn,$sqlpc);
if(mysqli_num_rows($resultpc) > 0){
    $errors['pc'] = 'Phone number already exists';
}

//Check if email exists already ( emailcheck -> ec )
$sqlec = "SELECT * FROM userinfo WHERE Email='$email' LIMIT 1";
    $resultec = mysqli_query($conn,$sqlec);
    if (mysqli_num_rows($resultec) > 0){
        $errors['ec'] = 'Email already exists';
    }

//Check if array $errors is empty --> if yes then add to db
if (count($errors) === 0 ){
    $sql= "INSERT INTO userinfo (FullName, Username, Pnumber, Email, Password) 
        VALUES('".$fullname."','".$username."','".$phonenumber."','".$email."','".$password."')";
     $result = mysqli_query($conn,$sql);

   if ($result){
        $_SESSION['username'] = $username;
        $_SESSION['pnumber'] = $phonenumber;
        $sqluserdetails = "INSERT INTO userdetails (ProfileVisit) VALUES (0)";
        $resuserdetails = mysqli_query($conn,$sqluserdetails);
        header("Location: login.php");
     } else {
      $errors['db'] = 'Database error : Could not register user'; 
     }
  }
}
// END SIGN UP 



//START LOGIN 

if (isset($_POST['loginbtn'])) {

    if (empty($_POST['usernameli'])) {
        $errors['username']= 'Name is required';
    }
    if (empty($_POST['passli'])) {
        $errors['password'] = 'Password is required';
    }

    $username = $_POST['usernameli'];
    $password = $_POST['passli'];

    if(count($errors) === 0) {
               
        $sql = "SELECT * FROM userinfo WHERE Username='$username'";
        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) > 0 ) {
            $resultarr = mysqli_fetch_row($result);
            $hashedpass = $resultarr[5];
            
            if (password_verify($password, $hashedpass))
             {
                $_SESSION['ID'] = $resultarr[0];
                $_SESSION['fullname'] = $resultarr[1];
                $_SESSION['Username'] = $resultarr[2];
                $_SESSION['pnumber'] = $resultarr[3];
                $_SESSION['email'] = $result2[4];
                $_SESSION['status'] = 'logged_in';
                $message = 'You are logged in' ;
                echo '<script>alert("'.$message.'")</script>' ;
                header("Location: /web3x/store");
            } else {
                $errors['wrongpass'] = 'The password that you typed is incorrect.'; 
                echo $errors['wrongpass'];
             }

        } else {
            $errors['login_fail'] = 'Account not available in our Database. <br> Please Sign Up !';
            echo $errors['login_fail'];
        }
    }

}

//END LOGING





//DISPLAY OF ERRORS

?>
<?php if (count($errors) > 0): ?>
    <div>
      <?php foreach ($errors as $error): ?>
      <li>
        <?php echo $error; ?>
        <?php echo '<script>alert("'.$error.'");</script>'; ?>
      </li>
      <?php endforeach;?>
    </div>   
    <?php echo '<script> window.location = "login.php" </script>'; ?>
  <?php endif;?>
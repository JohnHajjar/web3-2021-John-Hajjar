<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css"/>
</head>

<body class="pagesignupcss">

<!-- 123 testing baby welcome to my world bitches
<div class="upbar">
    <a href="welcome.php">
        <img src="imgs/whitejxlogo.jpg" width="9%" height=50px style="margin: 10px;">
    </a>




    <div class="button" id="button-5">
        <div id="translate"></div>
        <a class="a-button" href="login.php"> Login </a>
    </div>




    
    <div class="button" id="button-6">
        <div id="spin"></div>
        <a class="a-button" href="\..\web3x\index.php"> About Us </a>
    </div>     
        
    <div class="button" id="button-5">
        <div id="translate"></div>
        <a class="a-button" href="#">Policy</a>
    </div></div>
-->


        <?php include 'upbar.php'; ?>


<div class="middlepage">
    <form action="db.php" method="post">
        <table align=center class="tablesignup">
            <tr align=center>
                <td colspan="2">
                    <h3> 
                    Welcome, please fill the form below to <br>
                           <h2> Sign up <h2>
                     </h3>
                </td>
            </tr>
            <tr align=center> <!-- Full Name -->     
                <td>
                    Full name
                </td>
                <td>
                    <input type="text" name="" id="" class="inputs" required>
                </td>
            </tr>
            <tr> <!-- Username -->  
                <td>
                    Username
                </td>
                <td>
                    <input type="text" name="" id="inputs" class="inputs" required>
                </td>
            </tr>
            <tr> <!-- Phone number -->  
                <td>
                    Phone number
                </td>
                <td>
                    <input type="text" name="" id="" class="inputs" required>
                </td>
            </tr>
            <tr> <!-- E-mail -->
                <td>
                    E-mail
                </td>
                <td>
                    <input type="text" name="" id="" class="inputs" required>
                </td>
            </tr>
            <tr> <!-- Password -->  
                <td>
                    Password
                </td>
                <td>
                    <input type="password" name="" id="" class="inputs" required>
                </td>
            </tr>
            <tr> <!-- Confirm Password -->  
                <td>
                    Confirm Password
                </td>
                <td>
                    <input type="text" name="" id="" class="inputs" required>
                </td>
            </tr>
            <tr align=center> <!-- Submit button -->
                <td colspan="2">
                <input type="submit" name="signupbtn" id="signupbtn" class="submitformsignup" value="Sign up" required>
                </td>
            </tr>
        </table>
    </form>

</div>



</body>
</html>
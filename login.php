<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css"/>
</head>

<body class="pagesignupcss">


<div class="upbar">
    <a href="mainpage.php">
        <img src="imgs/whitejxlogo.jpg" width="9%" height=50px style="margin: 10px;">
    </a>

    <div class="button" id="button-5">
        <div id="translate"></div>
        <a class="a-button" href="signup.php"> Sign up </a>
    </div>

    <div class="button" id="button-6">
        <div id="spin"></div>
        <a class="a-button" href="\..\web3x\index.php"> About Us </a>
    </div>     
        
    <div class="button" id="button-5">
        <div id="translate"></div>
        <a class="a-button" href="#">Policy</a>
    </div>
</div>

<div class="middlepage">
    <form action="db.php" method="post">
        <table align=center class="tablesignup">
            <tr align=center>
                <td colspan="2">
                    <h3> 
                    Welcome back, please fill the form below to <br>
                           <h2> Log in <h2>
                     </h3>
                </td>
            </tr>
            <tr align=center> <!-- Username -->     
                <td>
                    Username
                </td>
                <td>
                    <input type="text" name="usernameli" id="usernameli" class="inputs" required>
                </td>
            </tr>
            <tr> <!-- Password -->  
                <td>
                    Password
                </td>
                <td>
                    <input type="password" name="passli" id="passli" class="inputs" required>
                </td>
            </tr>
            </tr>
            <tr align=center> <!-- Submit button -->
                <td colspan="2">
                <input type="submit" name="loginbtn" id="loginbtn" class="submitformsignup" value="Log in" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                <input type="button" name="forgotpassbtn" id="forgotpassbtn" class="submitformsignup" onclick="forgotpassword(usernameli.value)" value="Forgot password?" required>
                </td>
            </tr>
        </table>
    </form>

</div>



</body>
<script>
function forgotpassword($username)
    {
        //WAITING FOR DB TO BE BUILT //
        //FORGOT PASSWORD STEPS :
        // ASK FOR : 1- PHONE NUMBER OR 2- EMAIL
        // PREPARE A VERIFICATION TOKEN
        // MAKE THE CHANGES IF EVERYTHING IS TRUE
    }

</script>



</html>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css"/>
</head>

<body class="pagesignupcss">

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
                    <input type="text" name="fullname" id="fullname" class="inputs" required>
                </td>
            </tr>
            <tr> <!-- Username -->  
                <td>
                    Username
                </td>
                <td>
                    <input type="text" name="username" id="username" class="inputs" required>
                </td>
            </tr>
            <tr> <!-- Phone number -->  
                <td>
                    Phone number
                </td>
                <td>
                    <input type="text" name="pnumber" id="pnumber" class="inputs" required>
                </td>
            </tr>
            <tr> <!-- E-mail -->
                <td>
                    E-mail
                </td>
                <td>
                    <input type="text" name="email" id="email" class="inputs" required>
                </td>
            </tr>
            <tr> <!-- Password -->  
                <td>
                    Password
                </td>
                <td>
                    <input type="password" name="pass" id="pass" class="inputs" required>
                </td>
            </tr>
            <tr> <!-- Confirm Password -->  
                <td>
                    Confirm Password
                </td>
                <td>
                    <input type="password" name="cpass" id="cpass" class="inputs" required>
                </td>
            </tr>
            <tr align=center> <!-- Submit button -->
                <td colspan="2">
                <input type="submit" name="signupbtn" id="signupbtn" class="submitformsignup" value="Sign up" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                Already have an account ?
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button class="submitformsignup">
                    <a href="login.php">
                        Log In
                    </a>
                    </button>
                </td>
            </tr>
        </table>
    </form>
<br><br><br><br><br><br><br><br><br>
</div>



</body>
</html>
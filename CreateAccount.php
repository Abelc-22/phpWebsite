<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="Background.css">

</head>
<body>
<div class="content-container">
    <h1> Sign Up</h1>

    <div class="loginBox">   
    <?php
    echo "This is the login box! <br>"
    ?>
    <a href="Login.php"><button>login</button></a>

    <?php
    // This defines variables and sets them to empty variables
    $fnameErr = $lnameErr = $emailErr = $passwordErr = $conpasswordErr = "";
    $fname = $lname = $email = $password = $conpassword = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["fname"])) {
            $fnameErr = "First Name is required";
        } else {
            $fname = test_input($_POST["fname"]);
        }

        if (empty($_POST["lname"])) {
            $lnameErr = "Last Name is required";
        } else {
            $lname = test_input($_POST["lname"]);
        }
        
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
        }
        
        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
        } else {
            $password = test_input($_POST["password"]);
        }

        if (empty($_POST["conpassword"])) {
            $conpasswordErr = "COnfirm Password is required";
        } else {
            $password = test_input($_POST["conpassword"]);
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        First Name: <input type="text" name="fname">
        <span class="error">*<?php echo $fnameErr;?></span><br>

        Last Name: <input type="text" name="lname">
        <span class="error">*<?php echo $lnameErr;?></span><br>
        
        E-mail: <input type="text" name="email">
        <span class="error">*<?php echo $emailErr;?></span><br>
        
        password: <input type="password" name="password">
        <span class="error">*<?php echo $passwordErr;?></span><br>
        
        confirm password: <input type="password" name="conpassword">
        <span class="error">*<?php echo $conpasswordErr;?></span><br>
        
        <input type="submit">
    </form>

    <?php 
    echo "First Name: " . $fname;
    echo "<br>";
    echo "Last Name: " . $lname;
    echo "<br>";
    echo "Email: " . $email;
    echo "<br>";
    echo "Password: " . $password;
    ?>

    </div>
</div>

</body>
</html>
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
    <h1> Login Page</h1>

    <div class="loginBox">   
    <?php
    echo "This is the login box! <br>"
    ?>
    <a href="Login.php"><button>login</button></a>
    <a href="CreateAccount.php"><button>Sign Up</button></a>

    <form action="SuccessfulLogin.php" method="GET">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    </div>
</div>

</body>
</html>
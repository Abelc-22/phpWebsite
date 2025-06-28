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
    <h1> Welcome World</h1>
    <?php
    $x = 5;
    $y = 9;
    $color = "PHP"; 
    echo "I Love $color <br>";
    echo phpversion() . "<br>";
    echo $x + $y . "<br>";
    var_dump($y);
    ?>

    <div class="loginBox">   
    <a href="Login.php"><button>login</button></a>
    </div>
</div>

</body>
</html>
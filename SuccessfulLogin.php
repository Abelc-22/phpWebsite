<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successful Login</title>
    <link rel="stylesheet" href="Background.css">

</head>
<body>
<div class="content-container">
    <h1>You have logged in!</h1>

    Welcome <?php echo $_GET["name"]; ?><br>
    Your email address is: <?php echo $_GET["email"]; ?>
</div>

</body>
</html>
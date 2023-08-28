<?php 

    // include 'headers.php';
    // echo 'Welcome';

    // echo readfile("welcome.txt");

    // Sessions / Cookies
    // setcookie(name, value, expire, path, domain, secure, httponly);

    // $cookie_name = "Demo";
    // $cookie_value = "12345";
    // setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

    // Session
    session_start();

    $_SESSION["name"] = "RunShaw Technologies";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to <?php echo $_SESSION["name"]; ?></h1>
</body>
</html>



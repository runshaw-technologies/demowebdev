<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        echo "Welcome";

        $a = 123;
        $b = 456;
        $x = $a + $b;

        // Constant
        define('Greetings', 'Good Morning!');
        echo Greetings;



        $abc = true;
        $xyz;

        if ($abc) {
            # code...
            $xyz = 12345;
        } else {
            # code...
            $xyz = "12345";
        }

        $t =   date("H");
        if($t < 18) {
            echo "Good evening";
        } else {
            echo "Good Night";
        }

        // Loop
        for($k = 0; $k < 100; $k++) {
            echo "Value of k : " + $k;
        }

        


    ?>

    <!-- Xampp / Wamp: Apache Server -->

</body>
</html>
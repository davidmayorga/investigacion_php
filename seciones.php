<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>seciones php</h1>
    <?php 
        //Iniciar una sesión de PHP
        // Start the session
        session_start();

        // Set session variables
        $_SESSION["favcolor"] = "green";
        $_SESSION["favanimal"] = "cat";
        echo "Session variables are set.";


        //Obtener valores de variables de sesión de PHP        
        // Echo session variables that were set on previous page
        echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
        echo "Favorite animal is " . $_SESSION["favanimal"] . ".";


        //Modificar una variable de sesión de PHP
        // to change a session variable, just overwrite it
        $_SESSION["favcolor"] = "yellow";
        print_r($_SESSION);

        
        //Destruir una sesión de PHP
        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy();
    ?>
</body>
</html>
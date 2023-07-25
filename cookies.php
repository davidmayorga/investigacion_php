<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>cookies</h1>
    <?php 
        //Crear cookies con PHP
        setcookie(name, value, expire, path, domain, secure, httponly);

        //PHP Crear/Recuperar una Cookie
        <?php
        $cookie_name = "user";
        $cookie_value = "John Doe";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
        ?>
        <html>
        <body>

        <?php
        if(!isset($_COOKIE[$cookie_name])) {
          echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
          echo "Cookie '" . $cookie_name . "' is set!<br>";
          echo "Value is: " . $_COOKIE[$cookie_name];
        }
        ?>

        </body>
        </html>

        //Modificar un valor de cookie
        <?php
        $cookie_name = "user";
        $cookie_value = "Alex Porter";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        ?>
        <html>
        <body>
        
        <?php
        if(!isset($_COOKIE[$cookie_name])) {
          echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
          echo "Cookie '" . $cookie_name . "' is set!<br>";
          echo "Value is: " . $_COOKIE[$cookie_name];
        }
        ?>
        
        </body>
        </html>

        //Eliminar una cookie
        <?php
        // set the expiration date to one hour ago
        setcookie("user", "", time() - 3600);
        ?>
        <html>
        <body>
        
        <?php
        echo "Cookie 'user' is deleted.";
        ?>
        
        </body>
        </html>

        //Comprobar si las cookies están habilitadas
        <?php
        setcookie("test_cookie", "test", time() + 3600, '/');
        ?>
        <html>
        <body>
        
        <?php
        if(count($_COOKIE) > 0) {
          echo "Cookies are enabled.";
        } else {
          echo "Cookies are disabled.";
        }
        ?>
        
        </body>
        </html>
    ?>
</body>
</html>
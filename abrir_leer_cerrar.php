<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a_l_c php</title>
</head>
<body>
    <h1>Archivo PHP Abrir/Leer/Cerrar</h1>
    <?php 
        //En este capítulo le enseñaremos cómo abrir, leer y cerrar un archivo en el servidor.

        //ABRIR ARCHIVO PHP - fopen()
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("webdictionary.txt"));
        fclose($myfile);

        //Archivo de lectura PHP - fread()
        fread($myfile,filesize("webdictionary.txt"));

        //PHP Cerrar archivo - fclose()
        $myfile = fopen("webdictionary.txt", "r");
        // some code to be executed....
        fclose($myfile);

        //PHP Leer una sola línea - fgets ()
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
        echo fgets($myfile);
        fclose($myfile);

        //PHP Verifica el final del archivo - feof ()
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
        // Output one line until end-of-file
        while(!feof($myfile)) {
          echo fgets($myfile) . "<br>";
        }
        fclose($myfile);

        //PHP Leer un solo carácter - fgetc ()
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
        // Output one character until end-of-file
        while(!feof($myfile)) {
          echo fgetc($myfile);
        }
        fclose($myfile);

    ?>
</body>
</html>
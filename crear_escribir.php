<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Archivo PHP Crear/Escribir</h1>
    <?php 
        //En este capítulo le enseñaremos cómo crear y escribir en un archivo en el servidor.

        //PHP Crear archivo - fopen ()
        $myfile = fopen("testfile.txt", "w")

        //PHP Escribir en archivo - fwrite()
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "John Doe\n";
        fwrite($myfile, $txt);
        $txt = "Jane Doe\n";
        fwrite($myfile, $txt);
        fclose($myfile);

        //Sobreescritura de PHP
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "Mickey Mouse\n";
        fwrite($myfile, $txt);
        $txt = "Minnie Mouse\n";
        fwrite($myfile, $txt);
        fclose($myfile);

        //PHP Añadir texto
        $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
        $txt = "Donald Duck\n";
        fwrite($myfile, $txt);
        $txt = "Goofy Goof\n";
        fwrite($myfile, $txt);
        fclose($myfile);
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manejo_archivos</title>
</head>
<body>
    <h1>manejode archivos en php</h1>
    <?php 
        //MANIPULANDO ARCHIVOS PHP//
        //El manejo de archivos es una parte importante de cualquier aplicación web. A menudo necesita abrir y procesar un archivo para diferentes tareas.// 

        //FUNCION DE ARCHIVO DE LECTURA DE PHP//
        /* La readfile()función lee un archivo y lo escribe en el búfer de salida.
        Supongamos que tenemos un archivo de texto llamado "webdictionary.txt", almacenado en el servidor, que se ve así:
        AJAX = Asynchronous JavaScript and XML
        CSS = Cascading Style Sheets
        HTML = Hyper Text Markup Language
        PHP = PHP Hypertext Preprocessor
        SQL = Structured Query Language
        VG = Scalable Vector Graphics
        XML = EXtensible Markup Language*/

        //El código PHP para leer el archivo y escribirlo en el búfer de salida es el siguiente (la readfile()función devuelve el número de bytes leídos en caso de éxito):
        echo readfile("webdictionary.txt");

        //La readfile()función es útil si todo lo que quiere hacer es abrir un archivo y leer su contenido.
    ?>
</body>
</html>
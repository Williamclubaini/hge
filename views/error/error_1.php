<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>

<body>
<style>
body {
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        background: #ed3c0d;
        color: #fff;
        font-weight: 600;
        display: flex;
        justify-content:center;
}
</style>
<?php 

 $ERROR = CONFIG['environment'] == '' && CONFIG['environment'] == NULL ? ERRSYSTEM : ERR404;

 echo($ERROR);
 
 exit();
 ?>

</body>

</html>
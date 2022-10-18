<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error!</title>
</head>
<body>

<style>
    body {
         font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
    .orange {
    color: #fff;
    background: #ed3c0d;
    font-weight: 600;
     }
    .container {
        width: 50%;
        border:1px solid #ed3c0d;
        margin-right:auto;
        margin-left:auto;
        padding:20px;
        margin-top:15%;
        height: 50vh;
        border-radius:8px;
        box-shadow: 10px 5px 5px gray;
        text-align:center;
    }
    h1{
        font-size:6.8rem;
    }
    /* p{
        font-weight:bold;
    } */
    a {
        text-decoration:none;
    }
    small {
        font-weight:normal;
    }
    .container div p{
        margin-top:-45px;
    }
</style>

<div class="container orange">

    <div>
        <h1>Oops!</h1>
        <p>     
            <?php 
                if ($ERROR == 1) {?>
                <b>Unable to connect to the server: <?php echo $msg;?>.</b>
                <br>
                
                <?php } elseif ($ERROR == 2) {?>
                Cannot load class <b><?php echo $class;?></b>.<br>
                <hr>
                <small>class is not found in <b><?php echo $class.'.php';?></b></small>
                <?php } elseif($ERROR == 3) {?>
                <b><?php echo $classname.'::'.ucfirst($method);?></b><br>
                <hr>
                <small>An error has occurred method called
                on the class is not found.</small>
            <?php }?>
            <br><br>
            <a href="<?php echo URL;?>index">>>> go back Home</a>
            <br>
            <a href='https://wa.me/265992263424'>>>> contact help</a>
            <br>
            <small>email: williamclubaini@gmail.com</small>
        </p>
    </div>
</div>
</body>
</html>
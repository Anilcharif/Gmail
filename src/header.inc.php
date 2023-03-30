<?php
 
    const title = "PHP - articles and post";
    $_modif_php = phpversion();
    $_date_php = date("d/m/Y - h:i");
    $_datetime = date("Y-M-J");
    
    class Page{
        public $_css = "./css/main.css";
        static $_lang = ["fr","en","it"];
       

    }
    $_new_css = new Page;
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <meta name="description" content="Gmail">
    <link rel="manifest" href="./image/logo.png">
    <link rel="stylesheet" href="<?= $_new_css->_css?>">

    <title>Gmail</title>

</head>
<?php
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylesheet.css">
    <!--<meta http-equiv="x-ua-compatible" content="ie=edge">-->
    <title>Avraham Yagudaev Website</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<!-- header & nav section -->
<header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a href="#" class="navbar-brand">avraamyagudaev <i class="fa fa-shopping-cart text-white ml-auto" id="cart-icon"></i></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ml-auto">
        <?php if (!isset($_POST['page'])) { ?>
            <li class="nav-item">
                <a href="#" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="#About-section" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="#contact-us" class="nav-link">Contact</a>
            </li>
        <?php } else { ?>
            <li class="nav-item">
                <a href="main.php" class="nav-link">back to store</a>
            </li>
       <?php } ?>

            </ul>
        </div>
    </nav>
</header>

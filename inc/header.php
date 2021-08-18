<?php
    require_once "admin/autoloader.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobileri</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Start Navbar -->
    <div class="body">
        <nav class="navbar navbar-expand-sm">
            <div class="container">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="collection.php" class="nav-link">Collection</a></li>
                </ul>
                <a href=""><img src="img/icon.png" alt=""></a>
                <button class="navbar-toggler" data-target="#meny" data-toggle="collapse"> 
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="meny">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="promo.php" class="nav-link">Promo</a></li>
                        <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                    </ul>
                </div>
                <a href=""><i class="fab fa-glide-g"></i></a>
                <a href=""><i class="fas fa-shopping-bag"></i></a>
            </div>
        </nav>
        <!-- End Navbar -->
        <header>
            <div class="text-center text-white furnit">
                <div class="mb-0 pb-0 furniture">
                    <h1 class="display-1">Furniture</h1>
                    <p class="para">Create your comfort zone for your better Me Made by quality wood</p>
                    <p class="para">with care, attention to detail to our beloved customers.</p>
                </div>

                <div class="input">
                    <i class="fas fa-search"></i> <input type="search" class="text-white text-center" placeholder="What are you looking for">
                </div>
                
                <div class="mt-0 pt-0 pl-5">
                    <img src="img/sofa.png" class="sofa" alt="">
                </div>
                
            </div>
            <div class="text-right mr-3 p-2 social">
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-google"></i></a>
            </div>
        </header>
    </div>
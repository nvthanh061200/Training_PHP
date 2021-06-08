<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <base href="http://localhost/php-mvc-master/php-mvc-master/">
        <title>Clean Blog - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="public/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav  class="navbar navbar-expand-lg navbar-light mainNav2" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <?php 
                            while($loai_tin =mysqli_fetch_array($data["loai_tin"])){?>
                                <li class="nav-item">
                                    <a style="color: #000 !important"  class="nav-link" href="home/loai_tin/<?php echo $loai_tin["id"];?>"> <?php echo $loai_tin["ten_loai"] ?></a>
                                </li>
                            <?php
                            }
                        ?>
                    </ul>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li><a class="nav-item" href="#">logout</a></li>
                        <li><a class="nav-item" href="#">----</a></li>

                        <li><a class="nav-item" href="#">login</a></li>
                    </ul>
                </div>
            
            </div>
        </nav>
  
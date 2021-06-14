<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
         <?php
                 $core= new core();
         ?>
        <base href=" <?php echo $core->base_url(); ?>">
        <title>USER</title>
        <link rel="icon" type="image/x-icon" href="public/assets/nodejs.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo $core->base_url(); ?>public/css/styles.css" rel="stylesheet" />
    </head>


    <body>
        <!-- Navigation-->
        <nav  class="navbar navbar-expand-lg navbar-light mainNav2" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html">Thế Giới Số</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item">
                            <a style="color: #fff !important"  class="nav-link" href="home/loai_product/111">MAC</a>
                        </li>
                        <li class="nav-item">
                            <a style="color: #fff !important"  class="nav-link" href="home/loai_product/112">HP</a>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">

                        <?php 

                            if(isset($_SESSION["permission"])){?>
                                    <li><a class="a_kha" href="login/logout">Logout</a></li>
                                <?php

                            }else{?>
                                    <li><a class="a_kha" href="login">Login</a></li>
                                <?php
                            }

                         ?>

                    </ul>
                </div>
            
            </div>
        </nav>
          <div class="container2" style="margin-top: 100px;">
      
  </div>
  <style type="text/css">
      .a_kha{
        font-size: 23px;
        font-weight: 700;
        color: #fff;
        margin: 0 20px;
      }
  </style>
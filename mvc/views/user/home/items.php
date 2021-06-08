    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <span class="subheading">A Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div> 
        </div>
        </header>
  <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <?php 
                    while($tin = mysqli_fetch_array($data["tin"])){?>
                    <div class="col-lg-6 col-6 ">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                  <img src="public/img/<?php echo $tin["hinh_anh"]; ?> " alt="...">
                                </div>
                                <h1>hello Nguyen Van Thanh</h1>
                                <a href="">
                                     <div class="col-md-8">
                                  <div class="card-body">
                                    <h5 class="card-title"><?php echo $tin["title"] ;?></h5>
                                    <p class="card-text"> <?php echo $tin["content"] ;?></p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                  </div>
                                </div>
                                </a>
                               
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                 ?>
            </div>
        </div>
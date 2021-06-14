    <!-- Page Header-->
  <!-- Main Content-->

  <div class="container2" style="margin-top: 100px;">
      
  </div>
        <div class="container  px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <?php 
                    while($tin = mysqli_fetch_array($data["content"])){?>
                    <div class="col-lg-6 col-6 ">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                  <img src="public/img/<?php echo $tin["hinh_anh"]; ?> " alt="...">
                                </div>
                                <a href="home/content/<?php echo $tin["id"];?>">
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
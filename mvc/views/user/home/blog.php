


  <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <?php 
                    while($tin = mysqli_fetch_array($data["tin"])){?>

                        <div class="card dataaaa" style="width: 18rem;">
                          <img src="public/img/<?php echo $tin["hinh_anh"]; ?>" class="card-img-top" alt="...">
                          <div class="card-body">
                            <p class="card-text"><?php echo $tin["content"] ;?></p>
                          </div>
                        </div>

                    <?php
                    }
                 ?>
            

            </div>
        </div>
        <style type="text/css">
            .dataaaa{
                margin: 10px;
            }


        </style>
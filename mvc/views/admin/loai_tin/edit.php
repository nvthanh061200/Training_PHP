      
      <?php  $rl= mysqli_fetch_array($data["result"]); ?>
  <form method="POST" action="home_admin/editById/<?php echo $rl["id"]; ?>">

    <div class="form-floating mb-3">
      <label for="floatingInput">Username</label>
      <div class="user">
      <span class="px-2" name="input-email" id="input-email"><?php echo $rl["username"];?></span>
      </div>
    </div>
       <div class="form-floating mb-3">
     <label for="floatingInput">Full name</label>
      <input type="text" class="form-control " id="floatingInput" required name="fullname" placeholder="fullname" value="<?php echo $rl["fullname"];?>">
    </div>
     <div class="form-floating mb-3">
      <label for="floatingInput">Password</label>
      <input type="password" class="form-control" id="floatingInput" name="password"  placeholder="Password" value="">
    </div>
        <div class="form-floating mb-3">
      <label for="floatingInput">Enter a new password</label>
      <input type="password" class="form-control" id="floatingInput" name="password2" placeholder="Password" value="">
    </div>
    <div class="form-floating">
      <label for="floatingPassword">Address</label>
      <input type="text" class="form-control" id="floatingPassword" name="address" required placeholder="address"  value="<?php echo trim($rl["address"]); ?>">
    </div>

    <div class="form-floating">
      <label ></label>
      <input type="submit" class="form-control" id="floatingPassword" name="Submint">
      <label for="floatingPassword" value="EDIT"></label>
    </div>

  </form>
  <?php 

    if(isset($data["message"])){?>
           <p><?php echo $data["message"] ?></p>
      <?php
    }
   ?>

 <style type="text/css">
   

   .user{
        width: 100%;
    background-color: #fff;
    padding: 7px 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
   }
 </style>


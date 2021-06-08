      
      <?php  $rl= mysqli_fetch_array($data["result"]); ?>
  <form method="POST" action="account/editById/<?php echo $rl["id"]; ?>">

    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" name="username" placeholder="admin" value=" <?php echo $rl["username"]; ?>">
      <label for="floatingInput">username</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingPassword" name="address" placeholder="address"  value=" <?php echo $rl["address"]; ?>">
      <label for="floatingPassword">address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" value=" <?php echo $rl["password"]; ?>">
      <label for="floatingPassword">Password</label>
    </div>
 <div class="form-floating">
      <input type="submit" class="form-control" id="floatingPassword" name="Submint" placeholder="Password">
      <label for="floatingPassword" value="EDIT"></label>
    </div>

  </form>
 


<form method="POST" action="home_admin/addAccountBy">
  <div class="form-floating mb-3">
  <label for="floatingInput">username</label>
  <input type="text" class="form-control" id="floatingInput" required name="username" placeholder="admin">
</div>
 <div class="form-floating mb-3">
  <label for="floatingInput">fullname</label>
  <input type="text" class="form-control" id="floatingInput" required name="fullname" placeholder="fullname">
</div>
<div class="form-floating">
  <label for="floatingInput">address</label>
  <input type="text" class="form-control" id="floatingInput" required name="address" placeholder="address">
</div>
<div class="form-floating">
  <label for="floatingPassword">Password</label>
  <input type="password" class="form-control" id="floatingPassword" required name="password" placeholder="Password">
</div>
<div class="form-floating">
  <label for="floatingPassword"></label>
  <input type="submit" class="form-control" id="floatingPassword" name="Submint" placeholder="Password">
</div>
  <p>
      <?php 
        if(isset($data["message"])){
            echo $data["message"];
        }


       ?>


  </p>
</form>

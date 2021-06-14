
         <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Bạn có chắc chắn muốn xóa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="home_admin/delete_Account/<?php echo $tin["id"]; ?>"><button type="button" class="btn btn-primary">DELETE</button></a>
      </div>
    </div>
  </div>
</div>
<style type="text/css">
  a.add_account{
    color: #fff;
    text-decoration: none;
    padding: 8px 4px;
    background-color: #4e73df;
    cursor: pointer;
  }
  a.btn-acc{
    color: #000;
    text-decoration: none;
    padding: 8px 4px;
    border: 1px solid #000;
    cursor: pointer;
    font-size: 15px;
    font-weight: 500;
  }
  a.btn-acc.delete{
    color: #fff;
    background-color: red;
    font-weight: 500;
    font-size: 15px;
    
  }


</style>


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Fullname</th>
      <th scope="col">Address</th>
      <th><a class="add_account" href="home_admin/add_acc">ADD ACCOUNT</a></th>
    </tr>
  </thead>
  <tbody>
      <?php 
        while($tin = mysqli_fetch_array($data["result"])){?>

          <tr>
            <th scope="row"><?php echo $tin["id"]; ?></th>
            <td><?php echo $tin["username"]; ?></td>
            <td><?php echo $tin["fullname"]; ?></td>

            <td> <?php echo $tin["address"]; ?></td>
            <td>
              
              <a class="btn-acc" href="home_admin/getAccountById/<?php echo $tin["id"]; ?>">EDIT</a>
              <a type="button "  class="btn-acc delete" onclick="ConfirmDelete(<?php echo $tin["id"]; ?>)">DELETE</a>
            </td>
          </tr>
        <?php
        }
     ?>
      
  </tbody>
</table>
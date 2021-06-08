<table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Address</th>
      <th scope="col">Function</th>
    </tr>
  </thead>
  <tbody>
      <?php 
        while($tin = mysqli_fetch_array($data["result"])){?>
          <tr>
            <th scope="row"><?php echo $tin["id"]; ?></th>
            <td><?php echo $tin["username"]; ?></td>
            <td><?php echo $tin["password"]; ?></td>
            <td> <?php echo $tin["address"]; ?></td>
            <td>
              <a href="account/add_acc"><button>Them</button></a>
              <a href="account/get_acc_by_id/<?php echo $tin["id"]; ?>"><button>EDIT</button></a>
              <a href="account/delete_Account/<?php echo $tin["id"]; ?>"><button>xoa</button></a>
            </td>
          </tr>
        <?php
        }
     ?>
      
  </tbody>
</table>

<table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
      <th scope="col">Image</th>
      <th scope="col"><a class="btn_addkk" href="home_admin/add_kk">ADD</a></th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  	$i=1;
  		while($tin = mysqli_fetch_array($data["tin"])){  ?> 
			<tr>
				<th scope="col"><?php  echo $i; $i+=1; ?></th>
				<th scope="col"><?php echo $tin["title"] ?></th>
				<th scope="col" style="width: 800px;"><?php echo $tin["content"]; ?></th>
				<th scope="col">
					<img class="img_product" src="public/img/<?php echo $tin["hinh_anh"] ?>">
				</th>
				<td>
			      <a href="home_admin/edit_kk/<?php echo $tin["id"]; ?>"><button>EDIT</button></a>
			      <a type="button" class="btn-acc delete" onclick="ConfirmDelete_kk(<?php echo $tin["id"]; ?>)">DELETE SOFT</a>
				</td>
			</tr>

  		<?php  }
  	 ?>
    
  </tbody>
</table>
<style type="text/css">
	
	.img_product{
		width: 100px;
	}
	.btn_addkk{
		  text-decoration: none;
    border: 1px solid #000;
    padding: 5px 20px;
    background-color: skyblue;
    color: #00445f;
    font-size: 17px;
	}
	a.btn-acc{
    color: #000;
    text-decoration: none;
    padding: 3px 4px;
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


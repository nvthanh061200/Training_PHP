<table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Thông tin sản phẩm</th>
      <th scope="col">Hình ảnh</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  	$i=1;
  		while($tin = mysqli_fetch_array($data["tin"])){  ?> 
			<tr>
				<th scope="col"><?php  echo $i; $i+=1; ?></th>
				<th scope="col"><?php echo $tin["content"]; ?></th>
				<th scope="col">
					<a href="home/content/<?php echo $tin["id"]; ?>">
							<img class="img_product" src="public/img/<?php echo $tin["hinh_anh"] ?>">
					</a>
				</th>
				
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
</style>
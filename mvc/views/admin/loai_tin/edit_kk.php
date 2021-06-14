
<?php 
	if(isset($data["infor"])){
		$row= mysqli_fetch_array($data["infor"]);
	}
 ?>

<form method="POST" action="home_admin/edit_kk/<?php echo $data["id"]; ?>">
	<select name="title"  class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
	  <option  value="MAC">MAC</option>
	  <option value="HP">HP</option>
	  <option  value="...">...</option>
	</select>

	<div class="mb-3">
	  <label for="exampleFormControlTextarea1" class="form-label"></label>
	  <textarea class="form-control"  id="exampleFormControlTextarea1" required rows="3" name="content"><?php echo $row["content"]; ?></textarea>
	</div>
	<img class="img_product" name="img2" src="public/img/<?php echo $row["hinh_anh"]; ?>">

	<div required class="mb-3">
	  <input name="img" class="form-control" type="file" id="formFile">
	</div>

	<button name="edit_khoa_hoc">EDIT</button>
	<?php 
		if(isset($data["result"])){
			if($data["result"]){ ?>
					<p>thanh công</p>
			<?php 
			}else{?>
					<p>Thất bại</p>
				<?php 
			}
		}
	 ?>
</form>


<style type="text/css">
		
		.img_product{
			width: 300px;
			height: auto;
		}


</style>

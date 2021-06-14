<form method="POST" action="home_admin/add_kk">
	<select name="title" required class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
	  <option  value="MAC">MAC</option>
	  <option value="PH">HP</option>
	  <option  value="...">...</option>
	</select>

	<div class="mb-3">
	  <label for="exampleFormControlTextarea1" class="form-label" required  >Nhập nội dung</label>
	  <textarea class="form-control" id="exampleFormControlTextarea1" required rows="3" name="content"></textarea>
	</div>

	<div required class="mb-3">
	  <input name="img" class="form-control" required type="file" id="formFile">
	</div>

	<button name="add_khoa_hoc">Thêm Sản Phẩm</button>
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
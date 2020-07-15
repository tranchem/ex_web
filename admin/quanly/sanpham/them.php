<?php  
	if (isset($_POST['them'])) {
		//Kiểm tra nhập đủ thông tin
		$tensanpham = $_POST['tensanpham'];
		$dongia = $_POST['dongia'];
		$danhmuc= $_POST['danhmuc'];
		$mota = $_POST['mota'];
		$anh = $_FILES['anh']['name'];

		if($tensanpham==""){
			echo "Vui lòng nhập đủ thông tin!";
		}else{
			$sql = "INSERT INTO tbl_san_pham (ten_san_pham, don_gia, id_danh_muc, mo_ta, anh) VALUES ('$tensanpham','$dongia','$danhmuc', '$mota', '$anh')";

			move_uploaded_file($_FILES['anh']['tmp_name'], "uploads/".$anh);

			if ($connection->query($sql)) 
				echo "<div class='alert alert-success' role='alert'>
				<strong>Thêm thành công</strong>
			</div>";
			else
				echo "<div class='alert alert-danger' role='alert'>
				<strong>Thêm thất bại</strong>
			</div>";
		}
	}
?>

<div>
	<div>
	<h1>Thêm sản phẩm</h1>
	<div class="mt--7" style="padding-top:70px;">
		<div class="row">
			<div class="col-xl-12">
				<div class="">
					<div class="card-body">
						<form method="POST" enctype="multipart/form-data" >
							
							<div class="">
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group focused">
											<label class="form-control-label" for="input-username">Tên sản phẩm</label>
											<input name="tensanpham" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Tên sản phẩm">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group focused">
											<label class="form-control-label" for="input-username">Đơn giá</label>
											<input name="dongia" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Đơn giá">
										</div>
									</div>

									<div class="col-lg-12">
										<div class="form-group focused">
											<label class="form-control-label" for="input-username">Mô tả</label>
											<input name="mota" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Mô tả">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group focused">
											<label class="form-control-label" for="input-username">Chọn ảnh</label>
											<input name="anh" type='file' id="imgInp" /><br>
  											<img style="height: 200px" id="blah" src="" />
										</div>
									</div>
									<div class="col-lg-12">
								           <div class="form-group focused">
								               <label class="form-control-label" for="input-username">Danh mục</label>
								               <select class="form-control form-control-alternative" name="danhmuc" id="">
								                 <option value="">---Chọn danh mục---</option>
								                 <?php
								                    $sql_dm = "SELECT * FROM tbl_danh_muc";
								                    $query_dm = $connection->query($sql_dm);
								                    while ($row_dm=$query_dm->fetch_assoc()) {
								                    
								                  ?>
								                  <option value="<?php echo $row_dm['id_danh_muc'] ?>">
								                    <?php echo $row_dm['ten_danh_muc'] ?></option>
								                  <?php } ?>
								               </select>
            								</div>
										</div>
									</div>
								</div>
							</div>

							<div>
								<input class="btn btn-outline-default" type="reset" value="Nhập lại">
								<input class="btn btn-outline-default" name="them" type="submit" value="Thêm mới">
								<a class="btn btn-secondary btn-lg active" href="?ql=sanpham/ds">Danh sách</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>	
	</div>

	<!-- Đoạn script load ảnh sau khi chọn -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script type="text/javascript">
			function readURL(input) {
	  if (input.files && input.files[0]) {
	    var reader = new FileReader();
	    
	    reader.onload = function(e) {
	      $('#blah').attr('src', e.target.result);
	    }
	    
	    reader.readAsDataURL(input.files[0]); // convert to base64 string
	  }
	}

	$("#imgInp").change(function() {
	  readURL(this);
	});
	</script>
</div>
<?php  
	if (isset($_POST['them'])) {
		//Kiểm tra nhập đủ thông tin
		$tendanhmuc = $_POST['tendanhmuc'];
		$mota = $_POST['mota'];
		$anh = $_FILES['anh']['name'];
		if($tendanhmuc==""){
			echo "Vui lòng nhập đủ thông tin!";
		}else{
			$sql = "INSERT INTO tbl_danh_muc (ten_danh_muc, mo_ta, anh) VALUES ('$tendanhmuc','$mota','$anh')";

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
	<h1>Thêm danh mục</h1>
	<div class="mt--7" style="padding-top:70px;">
		<div class="row">
			<div class="col-xl-12">
				<div class="">
					<div class="card-body">
						<form method="POST" enctype="multipart/form-data">
							
							<div class="">
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group focused">
											<label class="form-control-label" for="input-username">Tên danh mục</label>
											<input name="tendanhmuc" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Tên danh mục">
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
								</div>
							</div>
							<div>
								<input class="btn btn-outline-default" type="reset" value="Nhập lại">
								<input class="btn btn-outline-default" name="them" type="submit" value="Thêm mới">
								<a class="btn btn-secondary btn-lg active" href="?ql=danhmuc/ds">Danh sách danh mục</a>
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
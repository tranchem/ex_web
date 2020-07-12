<?php  

	$id = $_GET['idsua'];
	if (isset($_POST['sua'])) {
		//Kiểm tra nhập đủ thông tin
		$anh = $_FILES['anh']['name'];
		if($anh==""){
			echo "<div class='alert alert-success' role='alert'>
				Vui lòng chọn ảnh!
				</div>";
		}else{
			//Cập nhật dữ liệu
			$sql = "UPDATE tbl_slideshow SET Anh = '$anh' WHERE id = $id";

			move_uploaded_file($_FILES['anh']['tmp_name'], "uploads/".$anh);

			if ($connection->query($sql)) 
				echo "<div class='alert alert-success' role='alert'>
				Cập nhật thành công!
				</div>";
			else
				echo "<div class='alert alert-success' role='alert'>
				Cập nhật thất bại!
				</div>";
		}
	}

	//Load ảnh cũ
	$sql = "SELECT Anh FROM tbl_slideshow WHERE id = $id";
	$query = $connection->query($sql);
	$row = $query->fetch_assoc();
?>

<div>
	<div>
	<h1>Cập nhật ảnh</h1>
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
											<label class="form-control-label" for="input-username">Chọn ảnh</label>
											<input name="anh" type='file' id="imgInp" /><br>
  											<img style="height: 200px" id="blah" src="uploads/<?php echo $row['Anh'] ?>" />
										</div>
									</div>
								</div>
							</div>
							<div>
								<input class="btn btn-outline-default" type="reset" value="Nhập lại">
								<input class="btn btn-outline-default" name="sua" type="submit" value="Cập nhật">
								<a class="btn btn-secondary btn-lg active" href="?ql=slideshow/ds">Danh sách</a>
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
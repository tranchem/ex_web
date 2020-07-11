<?php  
	if (isset($_POST['them'])) {
		//Kiểm tra nhập đủ thông tin
		$tendanhmuc = $_POST['tendanhmuc'];
		if($tendanhmuc==""){
			echo "Vui lòng nhập đủ thông tin!";
		}else{
			$sql = "INSERT INTO tbl_danhmuc (ten_danh_muc) VALUES ('$tendanhmuc')";
			if ($connection->query($sql)) 
				echo "Thêm thành công";
			else
				echo "Thêm thất bại";
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
						<form method="POST">
							
							<div class="">
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group focused">
											<label class="form-control-label" for="input-username">Tên danh mục</label>
											<input name="tendanhmuc" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Tên danh mục">
										</div>
									</div>
								</div>
							</div>
							<div>
								<input class="btn btn-outline-default" type="reset" value="Nhập lại">
								<input class="btn btn-outline-default" name="them" type="submit" value="Thêm mới">
								<a class="btn btn-secondary btn-lg active" href="?ql=danhmuc/ds">Danh sách</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>
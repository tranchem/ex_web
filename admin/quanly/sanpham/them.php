<?php  
	if (isset($_POST['them'])) {
		//Kiểm tra nhập đủ thông tin
		$tensanpham = $_POST['tensanpham'];
		$dongia = $_POST['dongia'];
		$danhmuc= $_POST['danhmuc'];
		if($tensanpham==""){
			echo "Vui lòng nhập đủ thông tin!";
		}else{
			$sql = "INSERT INTO tbl_sanpham (ten_san_pham, don_gia, id_danh_muc) VALUES ('$tensanpham','$dongia','$danhmuc')";
			if ($connection->query($sql)) 
				echo "Thêm thành công";
			else
				echo "Thêm thất bại";
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
						<form method="POST">
							
							<div class="">
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group focused">
											<label class="form-control-label" for="input-username">Tên sản phẩm</label>
											<input name="tensanpham" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Tên sản phẩm">
											<label class="form-control-label" for="input-username">Đơn giá</label>
											<input name="dongia" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Đơn giá">
            <div class="form-group focused">
               <label class="form-control-label" for="input-username">Danh mục</label>
               <select class="form-control form-control-alternative" name="danhmuc" id="">
                 <option value="">---Chọn danh mục---</option>
                 <?php
                    $sql_dm = "SELECT * FROM tbl_danhmuc";
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
</div>
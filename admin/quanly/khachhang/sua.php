<?php 
   $id = $_GET['idsua'];
	if (isset($_POST['sua'])) {
		//Kiểm tra nhập đủ thông tin chưa
		$tenkhachhang = $_POST['ten_khach_hang'];
      $diachi = $_POST['dia_chi'];
      $sodt = $_POST['sodt'];
      $email = $_POST['email'];
      $ghichu = $_POST['ghichu'];
      $matkhau = $_POST['matkhau'];
	
			//Cập nhật dữ liệu
			$sql = "UPDATE tbl_khach_hang SET ten_khach_hang = '$tenkhachhang', dia_chi = '$diachi', so_dien_thoai='$sodt', email='$email', ghi_chu='$ghichu', mat_khau='$matkhau' WHERE id_khach_hang = $id";

			if($connection->query($sql))
				echo "<div class='alert alert-success' role='alert'>
    <strong>Cập nhật thành công</strong>
</div>
";
			else
				echo  "<div class='alert alert-danger' role='alert'>
    <strong>Cập nhật thất bại</strong>
</div>";
		
	}

   //Hiển thị thông tin cần sửa
   $sql = "SELECT * FROM tbl_khach_hang WHERE id_khach_hang = $id";
   $query = $connection->query($sql);
   $row = $query->fetch_assoc();
 ?>
<div>
   <h1>Cập nhật khách hàng</h1>
   <div class=" mt--7" style="
      padding-top: 70px;
      ">
      <div class="row">
         <div class="">
         </div>
         <div class="col-xl-12 order-xl-1">
            <div class="shadow">
               <div class="card-body">
                  <form method="POST">
                     <div class="">
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <label class="form-control-label" for="input-username">Tên khách hàng</label>
                                 <input name="ten_khach_hang" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Tên khách hàng" value="<?php echo $row['ten_khach_hang'] ?>">
                              </div>
                              <div class="form-group">
                                 <label class="form-control-label" for="input-username">Địa chỉ</label>
                                 <input name="dia_chi" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Địa chỉ" value="<?php echo $row['dia_chi'] ?>">
                              </div>
                              <div class="form-group">
                                 <label class="form-control-label" for="input-username">Số điện thoại</label>
                                 <input name="sodt" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Số điện thoại" value="<?php echo $row['so_dien_thoai'] ?>">
                              </div>
                              <div class="form-group">
                                 <label class="form-control-label" for="input-username">Email</label>
                                 <input name="email" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Email" value="<?php echo $row['email'] ?>">
                              </div>

                              <div class="form-group">
                                 <label class="form-control-label" for="input-username">Ghi chú</label>
                                 <input name="ghichu" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Ghi chú" value="<?php echo $row['ghi_chu'] ?>">
                              </div>

                              <div class="form-group">
                                 <label class="form-control-label" for="input-username">Mật khẩu</label>
                                 <input name="matkhau" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Mật khẩu" value="<?php echo $row['mat_khau'] ?>">
                              </div>
                           </div>
                        </div>
                     </div>
                     <dir>
                        <input class="btn btn-outline-warning" type="reset" value="Nhập lại" >
                        <input class="btn btn-outline-success" name="sua" type="submit" value="Cập nhật">
                        <a class="btn btn-secondary btn-lg active" href="?ql=khachhang/ds">Danh sách khách hàng</a>
                     </dir>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
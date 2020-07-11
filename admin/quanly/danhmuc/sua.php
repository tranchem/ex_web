<?php 
   $id = $_GET['idsua'];
	if (isset($_POST['sua'])) {
		//Kiểm tra nhập đủ thông tin chưa
		$tendanhmuc = $_POST['ten_danh_muc'];
		if ($tendanhmuc==""){
			echo  "<div class='alert alert-danger' role='alert'>
    <strong>Vui lòng nhập đủ thông tin !!!</strong>
</div>";
		}else{
			//Cập nhật dữ liệu
			$sql = "UPDATE tbl_danh_muc SET ten_danh_muc = '$tendanhmuc' WHERE id_danh_muc = $id";
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
	}

   //Hiển thị dữ liệu cần sửa
   $sql = "SELECT ten_danh_muc FROM tbl_danh_muc WHERE id_danh_muc = $id";
   $query = $connection->query($sql);
   $row = $query->fetch_assoc();
 ?>
<div>
   <h1>Cập nhật danh mục</h1>
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
                                 <label class="form-control-label" for="input-username">Tên danh mục</label>
                                 <input name="ten_danh_muc" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Tên danh mục" value="<?php echo $row['ten_danh_muc'] ?>">
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <label class="form-control-label" for="input-username">Tên danh mục</label>
                                 <input name="ten_danh_muc" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Tên danh mục" value="<?php echo $row['ten_danh_muc'] ?>">
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <label class="form-control-label" for="input-username">Tên danh mục</label>
                                 <input name="ten_danh_muc" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Tên danh mục" value="<?php echo $row['ten_danh_muc'] ?>">
                              </div>
                           </div>
                        </div>
                     </div>
                     <dir>
                        <input class="btn btn-outline-warning" type="reset" value="Nhập lại" >
                        <input class="btn btn-outline-success" name="sua" type="submit" value="Cập nhật">
                        <a href="?ql=danhmuc/ds">Danh sách</a>
                     </dir>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
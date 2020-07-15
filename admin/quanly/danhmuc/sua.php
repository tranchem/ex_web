<?php 
   $id = $_GET['idsua'];
	if (isset($_POST['sua'])) {
		
    //Kiểm tra nhập đủ thông tin chưa
		$tendanhmuc = $_POST['ten_danh_muc'];
      $mota = $_POST['mota'];
      $anh = $_FILES['anh']['name'];
		if ($tendanhmuc==""){
			echo  "<div class='alert alert-danger' role='alert'>
    <strong>Vui lòng nhập đủ thông tin !!!</strong>
</div>";
		}else{
			//Cập nhật dữ liệu
			$sql = "UPDATE tbl_danh_muc SET ten_danh_muc = '$tendanhmuc', anh = '$anh', mo_ta = '$mota' WHERE id_danh_muc = $id";

         move_uploaded_file($_FILES['anh']['tmp_name'], "uploads/".$anh);

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
   $sql = "SELECT ten_danh_muc, mo_ta, anh FROM tbl_danh_muc WHERE id_danh_muc = $id";
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
                  <form method="POST" enctype="multipart/form-data">
                     <div class="">
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <label class="form-control-label" for="input-username">Tên danh mục</label>
                                 <input name="ten_danh_muc" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Tên danh mục" value="<?php echo $row['ten_danh_muc'] ?>">
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
                              <div class="form-group">
                                 <label class="form-control-label" for="input-username">Mô tả</label>
                                 <input name="mota" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Mô tả" value="<?php echo $row['mo_ta'] ?>">
                              </div>
                           </div>
                        </div>
                     </div>
                     <dir>
                        <input class="btn btn-outline-warning" type="reset" value="Nhập lại" >
                        <input class="btn btn-outline-success" name="sua" type="submit" value="Cập nhật">
                        <a class="btn btn-secondary btn-lg active" href="?ql=danhmuc/ds">Danh sách danh mục</a>
                     </dir>
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
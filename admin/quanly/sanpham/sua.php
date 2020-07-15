<?php 
$id=$_GET['idsua'];
if(isset($_POST['sua']))
{
	//kiểm tra thông tin
   $tensanpham=$_POST['tensanpham'];
   $dongia = $_POST['dongia'];
   $danhmuc= $_POST['danhmuc'];
   $mota = $_POST['mota'];
   $anh = $_FILES['anh']['name'];

	if ($tensanpham==""){
      echo  "<div class='alert alert-danger' role='alert'>
    <strong>Vui lòng nhập đủ thông tin !!!</strong>
</div>";
	}else {
     $sql = "UPDATE tbl_san_pham SET ten_san_pham = '$tensanpham', don_gia = '$dongia', anh = '$anh', mo_ta = '$mota', id_danh_muc='$danhmuc' WHERE id_san_pham = $id";

     move_uploaded_file($_FILES['anh']['tmp_name'], "uploads/".$anh);

		if($connection->query($sql))
     {
     	echo "<div class='alert alert-success' role='alert'>
    <strong>Cập nhật thành công</strong>
</div>";
     }else
         {
         	echo "<div class='alert alert-danger' role='alert'>
    <strong>Cập nhật thất bại</strong>
</div>";
         }

	}

}     
        //hiển thị dữ liệu cần sửa 
       $sql="SELECT t1.ten_san_pham, t1.don_gia, t1.mo_ta, t1.anh, t2.ten_danh_muc
      FROM tbl_san_pham t1 JOIN tbl_danh_muc t2 ON t1.id_danh_muc = t2.id_danh_muc WHERE id_san_pham = $id";
       $query=$connection->query($sql);
       $row=$query->fetch_assoc();

   ?>

<div>
<h1>Cập nhật sản phẩm</h1>
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
                                 <label class="form-control-label" for="input-username">Tên sản phẩm</label>
                                 <input name="tensanpham" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Tên sản phẩm" value="<?php echo $row['ten_san_pham'] ?>">
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <label class="form-control-label" for="input-username">Đơn giá</label>
                                 <input name="dongia" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Đơn giá" value="<?php echo $row['don_gia'] ?>">
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
                        <a href="?ql=sanpham/ds">Danh sách sản phẩm</a>
                     </dir>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
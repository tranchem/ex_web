<?php 
$id=$_GET['idsua'];
if(isset($_POST['sua']))
{
	//kiểm tra thông tin
	$tensanpham=$_POST['tensanpham'];
	$hople=true;
	$message = "";
	if($tensanpham=="")
	{
		$hople=false;
		$message .= "<div>Bạn chưa nhập tên sản phẩm</div>";
    }

	$dongia=$_POST['dongia'];
	if($dongia=="")
	{
		$hople = false;
		$message .= "<div>Bạn chưa nhập đơn giá</div>";
	}

	$matkhau=$_POST['madanhmuc'];
	if($matkhau=="")		
	{
		$hople = false;
		$message .= "<div>Bạn chưa chọn mã danh mục</div>";
	}

	if($hople == false) {
		echo "<div class='alert alert-danger' role='alert'>
		             <strong>".$message."</strong>
				</div>";
	}
	else {
	//cập nhật dữ liệu
   	
     //  $sql="UPDATE tbl_nhanvien  
     //  SET ten_nhan_vien = $tennhanvien ,email  = $email,sodt = $sodienthoai,tai_khoan = $taikhoan,mat_khau = $matkhau,dia_chi = $diachi
     // WHERE id_nhan_vien=$id ";
     $sql = "
         UPDATE tbl_sanpham
         SET
            ten_san_pham = '".$tensanpham."',
            don_gia = '".$dongia."',
            id_danh_muc = '".$madanhmuc."'
         WHERE id_san_pham = '".$id."' 
      ";


		if($connection->query($sql))
     {
     	echo "cập nhật thành công";
     }

         else
         {
         	echo "cập nhật thất bại";
         }

	}

}     
        //hiển thị dữ liệu cần sửa 
       $sql="SELECT * from tbl_sanpham where id_san_pham=$id";
       $query=$connection->query($sql);
       $row=$query->fetch_assoc();

   ?>

<div>
<h1> Cập nhật nhân viên </h1>
<div class="card bg-secondary shadow">
<div class="card-body">
   <form method="POST">
   <h6 class="heading-small text-muted mb-4">Thông tin sản phẩm</h6>
   <div class="pl-lg-4">
      <div class="row">
         <div class="col-lg-6">
            <div class="form-group focused">
               <label class="form-control-label" for="input-username">Tên sản phẩm</label>
               <input name="tensanpham" type="text" id="input-username" class="form-control form-control-alternative" value="<?php echo $row['ten_san_pham'] ?>" >
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-6">
            <div class="form-group focused">
               <label class="form-control-label" for="input-first-name">Đơn giá</label>
               <input name="dongia" type="text" id="input-first-name" class="form-control form-control-alternative"value="<?php echo $row['don_gia'] ?>" >
            </div>
         </div>
         <div class="col-lg-6">
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
      <div>
         <input class="btn btn-outline-default" type="reset" value ="Nhập lại">
         <input class="btn btn-outline-default" name="sua" type="submit" value ="Cập nhật">
         <a href="?ql=nhanvien/ds">Danh sách sản phẩm</a>
      </div>
   </div>
</div>
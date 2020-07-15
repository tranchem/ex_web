<?php 
$id=$_GET['idsua'];
if(isset($_POST['sua']))
{
  //kiểm tra thông tin
  $tennhanvien=$_POST['tennhanvien'];
  $hople=true;
  $message = "";
  if($tennhanvien=="")
  {
    $hople=false;
    $message .= "<div>Bạn chưa nhập tên nhân viên</div>";
    }

  $email=$_POST['email'];
  if($email=="")
  {
    $hople = false;
    $message .= "<div>Bạn chưa nhập email</div>";
    
  }

  $sodienthoai=$_POST['sodienthoai'];
  if($sodienthoai=="")
  {   
    $hople = false;
    $message .= "<div>Bạn chưa nhập số điện thoại</div>";
    
  }

  $taikhoan=$_POST['taikhoan'];
  if($taikhoan=="")
  {
    $hople = false;
    $message .= "<div>Bạn chưa nhập tài khoản</div>";
    
  }

  $matkhau=$_POST['matkhau'];
  if($matkhau=="")    
  {
    $hople = false;
    $message .= "<div>Bạn chưa nhập mật khẩu</div>";
    
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
         UPDATE `tbl_nhan_vien`
         SET
            `ten_nhan_vien` = '".$tennhanvien."',
            `email` = '".$email."',
            `so_dien_thoai` = '".$sodienthoai."',
            `tai_khoan` = '".$taikhoan."',
            `mat_khau` = '".$matkhau."'
         WHERE `id_nhan_vien` = '".$id."' 
      ";


    if($connection->query($sql))
     {
      echo "<div class='alert alert-success' role='alert'>
      <strong>Cập nhật thành công</strong>
  </div>";
     }

         else
         {
          echo "<div class='alert alert-danger' role='alert'>
          <strong>Cập nhật thất bại</strong>
      </div>";
         }

  }

}     
        //hiển thị dữ liệu cần sửa 
       $sql="SELECT * from tbl_nhan_vien where id_nhan_vien=$id";
       $query=$connection->query($sql);
       $row=$query->fetch_assoc();

   ?>

<div>
<h1> Cập nhật nhân viên </h1>
<div class="card bg-secondary shadow">
<div class="card-body">
   <form method="POST">
   <h6 class="heading-small text-muted mb-4">Thông tin nhân viên</h6>
   <div class="pl-lg-4">
      <div class="row">
         <div class="col-lg-6">
            <div class="form-group focused">
               <label class="form-control-label" for="input-username">Tên nhân viên</label>
               <input name="tennhanvien" type="text" id="input-username" class="form-control form-control-alternative" value="<?php echo $row['ten_nhan_vien'] ?>" >
            </div>
         </div>
         <div class="col-lg-6">
            <div class="form-group">
               <label class="form-control-label" for="input-email">Email </label>
               <input name="email" type="email" id="input-email" class="form-control form-control-alternative" value="<?php echo $row['email'] ?>">
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-6">
            <div class="form-group focused">
               <label class="form-control-label" for="input-first-name">Số điện thoại</label>
               <input name="sodienthoai" type="text" id="input-first-name" class="form-control form-control-alternative"value="<?php echo $row['so_dien_thoai'] ?>" >
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-6">
            <div class="form-group focused">
               <label class="form-control-label" for="input-first-name">Tài khoản</label>
               <input name="taikhoan" type="text" id="input-first-name" class="form-control form-control-alternative" value="<?php echo $row['tai_khoan'] ?>">
            </div>
         </div>
         <div class="col-lg-6">
            <div class="form-group focused">
               <label class="form-control-label" for="input-last-name">Mật khẩu</label>
               <input name="matkhau" type="text" id="input-last-name" class="form-control form-control-alternative" value="<?php echo $row['mat_khau'] ?>">
            </div>
         </div>
      </div>
      <div>
         <input class="btn btn-outline-warning" type="reset" value ="Nhập lại">
         <input class="btn btn-outline-success" name="sua" type="submit" value ="Cập nhật">
         <a class="btn btn-secondary btn-lg active" href="?ql=nhanvien/ds">Danh sách nhân viên</a>
      </div>
   </div>
</div>
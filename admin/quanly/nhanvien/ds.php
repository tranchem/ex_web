<?php   
        //xóa chuyên mục
if(isset($_GET['idxoa'])){
     $id=$_GET['idxoa'];
     $sql="DELETE FROM tbl_nhanvien where id_nhan_vien=$id";
     
     if($connection->query($sql))
     {
      echo "<div class='alert alert-success' role='alert'>
    <strong>Xóa thành công</strong>
</div>
";
     }
      
     else 
     {
       echo "<div class='alert alert-default' role='alert'>
    <strong>Xóa thất bại</strong>
</div>";
     }
     
 }
     //hiển thị danh sách danh mục

      $sql="SELECT * from tbl_nhanvien";
      $query=$connection->query($sql);
 ?>
<div>
  <h1> Danh sách nhân viên </h1>
  <a class="btn btn-success" href="?ql=nhanvien/them">Thêm</a>
     <div class="table-responsive">
    <table class="table align-items-center table-flush">
      <thead class="thead-light">
        <tr>
          <th scope="col">STT</th>
          <th scope="col">Tên nhân viên</th>
          <th scope="col">email</th>
          <th scope="col">Số điện thoại</th>
          <th scope="col">Tài khoản</th>
          <th scope="col">Mật khẩu</th>
          <th scope="col">Địa Chỉ</th>
          <th scope="col">Tác vụ</th>
          
        </tr>
      </thead>
      <tbody>
        <?php 
        $stt = 1;
        while ($row=$query->fetch_assoc()) {
          
        
         ?>
          <tr>
            <td><?php echo $stt; ?></td>
            <td><?php echo $row['ten_nhan_vien']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['sodt']; ?></td>
            <td><?php echo $row['tai_khoan']; ?></td>
            <td><?php echo $row['mat_khau']; ?></td>
            <td><?php echo $row['dia_chi']; ?></td>

            <td>
              <a class="btn btn-warning" href="?ql=nhanvien/sua&idsua=<?php echo $row['id_nhan_vien']?>">Sửa</a>
              <a class="btn btn-danger" href="?ql=nhanvien/ds&idxoa=<?php echo $row['id_nhan_vien']?>">Xóa</a>
            </td>
          </tr>
      <?php } ?>
      </tbody>
    </table> 
</div>
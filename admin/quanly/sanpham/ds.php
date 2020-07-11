<?php 
	//xóa sản phẩm
if(isset($_GET['idxoa'])){
     $id=$_GET['idxoa'];
     $sql="DELETE FROM tbl_sanpham where id_san_pham=$id";
     
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

	//Hiển thị danh sách sản phẩm
      $sql="SELECT t1.id_san_pham, t1.ten_san_pham, t1.don_gia, t2.ten_danh_muc 
      FROM tbl_sanpham t1 JOIN tbl_danhmuc t2 ON t1.id_danh_muc = t2.id_danh_muc";
      $query=$connection->query($sql);
 ?>
<div>
	<h1> Danh sách sản phẩm </h1>
	<a class="btn btn-success" href="?ql=sanpham/them">Thêm</a>
     <div class="table-responsive">
	  <table class="table align-items-center table-flush">
	    <thead class="thead-light">
	      <tr>
	        <th scope="col">STT</th>
	        <th scope="col">Tên sản phẩm</th>
	        <th scope="col">Đơn giá</th>
	        <th scope="col">Danh mục</th>
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
	        	<td><?php echo $row['ten_san_pham']; ?></td>
	        	<td><?php echo $row['don_gia']; ?></td>
	        	<td><?php echo $row['ten_danh_muc']; ?></td>
	        	<td>
	        		<a class="btn btn-outline-primary" href="?ql=sanpham/sua&idsua=<?php echo $row['id_san_pham']?>">Sửa</a>
	        		<a class="btn btn-outline-warning" href="?ql=sanpham/ds&idxoa=<?php echo $row['id_san_pham']?>">Xóa</a>
	        	</td>
	        </tr>
	    <?php $stt++; } ?>
	    </tbody>
	  </table> 
</div>
<?php 
    $id = $_GET['id'];
	//Hiển thị danh sách đơn hàng
      $sql="SELECT t1.id_don_hang, t3.ten_san_pham, t1.so_luong, t1.don_gia, t1.thanh_tien
				FROM tbl_chi_tiet_don_hang t1
			    JOIN tbl_don_hang t2 ON t1.id_don_hang = t2.id_don_hang
			    JOIN tbl_san_pham t3 ON t1.id_san_pham = t3.id_san_pham
			    WHERE t1.id_don_hang = $id";
      $query=$connection->query($sql);
 ?>
<div>
	<h1> Danh sách đơn hàng </h1>
     <div class="table-responsive">
	  <table class="table align-items-center table-flush">
	    <thead class="thead-light">
	      <tr>
	        <th scope="col">STT</th>
	        <th scope="col">Tên sản phẩm</th>
	        <th scope="col">Số lượng</th>
	        <th scope="col">Đơn giá</th>
	        <th scope="col">Thành tiền</th>
	        
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
	        	<td><?php echo $row['so_luong']; ?></td>
	        	<td><?php echo $row['don_gia']; ?></td>
	        	<td><?php echo $row['thanh_tien']; ?></td>
	        </tr>
	    <?php $stt++; } ?>
	    </tbody>
	  </table> 
	  	<a class="btn btn-secondary btn-lg active" href="?ql=donhang/dsdonhang">Danh sách đơn hàng</a>
	</div>  
</div>
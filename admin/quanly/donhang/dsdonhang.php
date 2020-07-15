<?php 
	//Hiển thị danh sách đơn hàng
      $sql="SELECT t1.id_don_hang, t1.ngay_dat, t1.tong_tien, t2.ten_khach_hang, t3.ten_nhan_vien 
      FROM tbl_don_hang t1 JOIN tbl_khach_hang t2 ON t1.id_khach_hang = t2.id_khach_hang 
      					LEFT JOIN tbl_nhan_vien t3 ON t1.id_nhan_vien = t3.id_nhan_vien";
      $query=$connection->query($sql);
 ?>
<div>
	<h1> Danh sách đơn hàng </h1>
     <div class="table-responsive">
	  <table class="table align-items-center table-flush">
	    <thead class="thead-light">
	      <tr>
	        <th scope="col">STT</th>
	        <th scope="col">Ngày bán</th>
	        <th scope="col">Tổng tiền</th>
	        <th scope="col">Khách hàng</th>
	        <th scope="col">Nhân viên</th>
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
	        	<td><?php echo $row['ngay_dat']; ?></td>
	        	<td><?php echo $row['tong_tien']; ?></td>
	        	<td><?php echo $row['ten_khach_hang']; ?></td>
	        	<td><?php echo $row['ten_nhan_vien']; ?></td>
	        	<td>
	        		<a class="btn btn-outline-primary" href="?ql=donhang/chitietdonhang&id=<?php echo $row['id_don_hang']?>">Xem</a>
	        	</td>
	        </tr>
	    <?php $stt++; } ?>
	    </tbody>
	  </table> 
</div>
<?php 
	//Hiển thị danh sách đơn hàng
      $sql="SELECT t1.id_don_hang, t1.ngay_dat, t1.tong_tien, t2.ten_khach_hang, t3.ten_nhan_vien 
      FROM tbl_don_hang t1 JOIN tbl_khach_hang t2 ON t1.id_khach_hang = t2.id_khach_hang 
      					JOIN tbl_nhan_vien t3 ON t1.id_nhan_vien = t3.id_nhan_vien";
      $query=$connection->query($sql);
 ?>

<div>

	<h1> Danh sách đơn hàng gần đây</h1>
     <div class="table-responsive">
     <div class="col-xl-8 order-xl-1">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Card tables</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Ngày đặt</th>
                    <th scope="col">Tổng tiền</th>
                    <th scope="col">Tên khách hàng</th>
                    <th scope="col">Tên nhân viên</th>
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
                    </tr>
                <?php $stt++; } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</div>
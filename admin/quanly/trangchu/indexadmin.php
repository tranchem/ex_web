<?php 
	//Hiển thị danh sách đơn hàng
      $sql="SELECT t1.id_don_hang, t1.ngay_dat, t1.tong_tien, t2.ten_khach_hang, t3.ten_nhan_vien 
      FROM tbl_don_hang t1 JOIN tbl_khach_hang t2 ON t1.id_khach_hang = t2.id_khach_hang 
      					LEFT JOIN tbl_nhan_vien t3 ON t1.id_nhan_vien = t3.id_nhan_vien";
      $query=$connection->query($sql);
 ?>

<div>
     <div class="table-responsive">
     <div class="col-mt-5">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Đơn hàng</h3>
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


<<div>
<h1>Quản trị viên</h1>
<div class="row">
                                    <div class="col-md-3">
                                        <div class="year-1970">
                                            <div class="col-md-7 " style="margin:auto;">
                                                <div class="image-his right"><img style="width: 200px;height: 250px"
                                                        src=".././assets/media/lienhe/mai.jpg" />
                                                </div>
                                            </div>
                                            <div class="text-his" style="margin-left: 95px;">
                                                <h3>LÊ THỊ THANH MAI</h3>
                                                <LI>Số điện thoại: 0367194451</LI>
                                                <LI>Email: thanhmai@gmail.com</LI>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="year-1970">
                                            <div class="col-md-7 " style="margin:auto;">
                                                <div class="image-his right"><img style="width: 200px;height: 250px"
                                                        src=".././assets/media/lienhe/viet.jpg" />
                                                </div>
                                            </div>
                                            <div class="text-his" style="margin-left: 95px;">
                                                <h3>Mai Đức Việt</h3>
                                                <LI>Số điện thoại: 0367194451</LI>
                                                <LI>Email: ducviet@gmail.com</LI>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="year-1970">
                                            <div class="col-md-7 " style="margin:auto;">
                                                <div class="image-his right"><img style="width: 200px;height: 250px"
                                                        src=".././assets/media/lienhe/tu.jpg" />
                                                </div>
                                            </div>
                                                <div class="text-his" style="margin-left: 95px;">
                                                    <h3>Trần Văn Tú</h3>
                                                    <LI>Số điện thoại: 0367194451</LI>
                                                    <LI>Email: trantu@gmail.com</LI>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="year-1970">
                                            <div class="col-md-7 " style="margin:auto;">
                                                <div class="image-his right"><img style="width: 200px;height: 250px"
                                                        src=".././assets/media/lienhe/quynh.jpg" />
                                                </div>
                                            </div>
                                                <div class="text-his" style="margin-left: 95px;">
                                                    <h3>Nguyễn Ngọc Quỳnh</h3>
                                                    <LI>Số điện thoại: 0941327599</LI>
                                                    <LI>Email: ngocquynh@gmail.com</LI>
                                                </div>
                                          </div>
                                    </div>
                                       
</div>
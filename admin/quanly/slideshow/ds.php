<?php 
	//xóa slideshow
if(isset($_GET['idxoa'])){
     $id=$_GET['idxoa'];
     $sql="DELETE FROM tbl_slideshow where id=$id";
     
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

	//Hiển thị danh sách slideshow
      $sql="SELECT * from tbl_slideshow";
      $query=$connection->query($sql);
 ?>
<div>
	<h1> Danh sách hình ảnh slideshow </h1>
	<a class="btn btn-success" href="?ql=slideshow/them">Thêm</a>
     <div class="table-responsive">
	  <table class="table align-items-center table-flush">
	    <thead class="thead-light">
	      <tr>
	        <th scope="col">STT</th>
	        <th scope="col">Ảnh</th>
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
	        	<td>
	        		<img style="height: 100px " src="uploads/<?php echo $row['Anh'] ?>" alt="">
	        	</td>
	        	<td>
	        		<a class="btn btn-outline-primary" href="?ql=slideshow/sua&idsua=<?php echo $row['id']?>">Sửa</a>
	        		<a class="btn btn-outline-warning" href="?ql=slideshow/ds&idxoa=<?php echo $row['id']?>">Xóa</a>
	        	</td>
	        </tr>
	    <?php $stt++; } ?>
	    </tbody>
	  </table> 
</div>
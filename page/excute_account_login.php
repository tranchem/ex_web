<?php 

    include_once(".././ketnoi.php");

    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $sql = "
		SELECT *
		FROM tbl_khach_hang
		WHERE email = '".$email."' AND mat_khau = '".$password."'
	";

    // 4. Thực hiện truy vấn để thêm mới dữ liệu
	$kiem_tra_dang_nhap = mysqli_query($connection, $sql);
	$so_ban_ghi = mysqli_num_rows($kiem_tra_dang_nhap);

	// 5. Thông báo việc thêm mới tin tức thành công & quay trở lại trang quản lý tin tức
	if ($so_ban_ghi == 0) {
		echo 
		"
			<script type='text/javascript'>
				window.alert('Đăng nhập thất bại.');
			</script>
		";

		// Chuyển người dùng vào trang quản trị tin tức
		echo 
		"
			<script type='text/javascript'>
				window.location.href = './?tp=account'
			</script>
		";
	} else {
		session_start();

		$_SESSION['email'] = $email;

		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn đã đăng nhập thành công.');
			</script>
		";

		// Chuyển người dùng vào trang quản trị tin tức
		echo 
		"
			<script type='text/javascript'>
				window.location.href = './'
			</script>
		";
	}

    
?>
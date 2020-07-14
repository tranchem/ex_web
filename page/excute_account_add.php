<?php 

    include_once(".././ketnoi.php");

    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $address = $_POST["address"];
    $password = $_POST["password"];
    $confirmation = $_POST["confirmation"];
    
    $sql = "
		INSERT INTO `tbl_khach_hang` (`ten_khach_hang`, `email`, `so_dien_thoai`, `dia_chi`, `mat_khau`, `ghi_chu`) 
		VALUES ('".$full_name."', '".$email."', '".$phone_number."', '".$address."', '".$password."', NULL); 
	";

    if($connection->query($sql) == true) {
        echo 
		"
			<script type='text/javascript'>
                window.alert('Bạn đã đăng ký thành công.');
				window.location.href = './?tp=account';
                
			</script>
        ";
    }

    
?>
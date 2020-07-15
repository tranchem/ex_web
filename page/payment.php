<?php

    include_once(".././ketnoi.php");
    session_start();

    if(isset( $_SESSION['email'])) {
        $san_phams = $_SESSION['san_phams'];

        // var_dump ($san_phams);
    
        $id_khach_hang = $_SESSION['id_khach_hang'];
        $tong_tien = $_POST['tong_tien'];
        $timezone = date_default_timezone_get();
    
        $sql = "
            INSERT INTO `tbl_don_hang` (`id_khach_hang`, `tong_tien`, `trang_thai`, `ngay_dat`) 
            VALUES ('".$id_khach_hang."', '".$tong_tien."', '0', '".$timezone."'); 
        ";
    
        $connection->query($sql);
        
        $id_don_hang = $connection->insert_id;
    
        // var_dump($id_don_hang);
    
        foreach( $san_phams as $key => $row ) {
            // echo "row san pham".$row['id_san_pham'];
            $thanh_tien = $row['don_gia'] * $row['so_luong'];
            $sql = "
            INSERT INTO `tbl_chi_tiet_don_hang` (`id_don_hang`, `id_san_pham`, `don_gia`, `so_luong`, `thanh_tien`)
            VALUES ('".$id_don_hang."', '".$row['id_san_pham']."', '".$row['don_gia']."', '".$row['so_luong']."', '".$thanh_tien."'); 
            ";
    
            $connection->query($sql);
        }
    
        session_destroy();
    
        echo "
            <script>
                window.alert('Đặt hàng thành công!');
                window.location.href = './?tp=cart';
            </script>
        ";
    } else {
        echo "
            <script>
                window.alert('Bạn phải đăng nhập trước khi đặt hàng');
                window.location.href = './?tp=account';
            </script>
        ";
    }

    

?>
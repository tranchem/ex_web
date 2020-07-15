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


        //Gui email cho khach hang
        $to_email = "tuvantranhttta@gmail.com";
        $subject = "Simple Email Test via PHP";
        $body = "Hi,nn This is test email send by PHP Script";
        $headers = "From: sender\'s email";
        
        if (mail($to_email, $subject, $body, $headers)) {
            echo "Email successfully sent to $to_email...";
        } else {
            echo "Email sending failed...";
        }
    
        unset($_SESSION['san_phams']);


        //Gui email cho khach hang
        $to_email = $_SESSION['email'];
        $subject = "Gà rán Popeyes";
        // $body = "<b style=color:red;>Hello ban nho</b>";
        // $body .= "<a href=http://localhost/Popeyes/page/>Xác nhận đơn hàng</a>";

        $body = "
            <html>
            <head>
            <title>HTML email</title>
                <style>
                    table, th, td {
                    border: 1px solid black;
                    }
                    .button {
                        background-color: #4CAF50; /* Green */
                        border: none;
                        color: white;
                        padding: 15px 32px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        margin: 4px 2px;
                        cursor: pointer;
                    }
                    
                    .button1 {font-size: 10px;}
                </style>
            </head>
            <body>
            <center>
        ";
        $body .= "<p>Yêu cầu xác nhận đơn hàng</p>";
        $body .= "<table>";
        $body .= "
            <tr>
                <th>Tên sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
            </tr>
        ";
        $tong_tien = 0;
        foreach($san_phams as $row) {
            $tong_tien += $row['so_luong'] * $row['don_gia'];
            $body .= "
                <tr>
                    <td>".$row['ten_san_pham']."</td>
                    <td>".$row['don_gia']."</td>
                    <td>".$row['so_luong']."</td>
                </tr>
            ";
        }
        $body .= "</table>";
        $body .= "<b>Tổng tiền: ".$tong_tien." </b>";
        $body .= "
            <center><a style=color:white; href=http://localhost/Popeyes/page/?tp=verify_order&order_id=".$id_don_hang." class=button button1>Xác nhận</a></center>
        ";
        $body .= "
            </center>
            </body>
            </html>
        ";

        $headers = "From: Gà rán Popeyes";
        $headers .= 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        
        if (mail($to_email, $subject, $body, $headers)) {
            echo "Email successfully sent to $to_email...";
        } else {
            echo "Email sending failed...";
        }
    
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

        // $san_phams = isset($_SESSION['san_phams']) ? $_SESSION['san_phams'] : [];

    

?>
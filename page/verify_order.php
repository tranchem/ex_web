<?php
    $id_don_hang = $_GET['order_id'];

    $sql = "
        UPDATE `tbl_don_hang`
        SET
            `trang_thai` = 1
        WHERE `id_don_hang` = '".$id_don_hang."' 
    ";

    mysqli_query($connection, $sql);

    //Gui email cho khach hang
    $to_email = "tuvantran.it@gmail.com";
    $subject = "Gà rán Popeyes";
    // $body = "<b style=color:red;>Hello ban nho</b>";
    // $body .= "<a href=http://localhost/Popeyes/page/>Xác nhận đơn hàng</a>";

    $body = "
        <html>
        <head>
        <title>HTML email</title>
        </head>
        <body>
        <center>
    ";
    $body .= "
        <b>Bạn có đơn hàng mới</b>
    ";
    $body .= "<a href=http://localhost/Popeyes/admin/index.php?ql=donhang/chitietdonhang&id=".$id_don_hang.">Xem chi tiết tại đây</a>";
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
            window.alert('Xác nhận đơn hàng thành công!');
            window.location.href = './?tp=cart';
        </script>
    ";
?>
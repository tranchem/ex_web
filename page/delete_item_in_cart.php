<?php
    $id_san_pham = $_GET['product_id'];

    $san_phams = $_SESSION['san_phams'];

    foreach($san_phams as $key => $value) {
        if($value['id_san_pham'] == $id_san_pham) {
            unset($san_phams[$key]);
        }
    }

    $_SESSION['san_phams'] = $san_phams;


    echo "
        <script>
            window.location.href = '?tp=cart';
        </script>
    ";
?>
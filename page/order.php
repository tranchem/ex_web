<?php
    // session_start();

    $san_phams = isset($_SESSION['san_phams']) ? $_SESSION['san_phams'] : [];

    var_dump($san_phams);

    $id_san_pham = $_GET['product_id'];

    $sql = "
        SELECT *
        FROM tbl_san_pham
        WHERE id_san_pham = '".$id_san_pham."'
    ";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();
    // var_dump($result);
    // $row = mysqli_fetch_array($result)

    array_push($san_phams, $row);

    $_SESSION['san_phams'] = $san_phams;


    // var_dump($san_phams);

    // echo $_SESSION['san_phams'][1]['ten_san_pham'];

    var_dump($_SESSION['san_phams']);


    echo "
        <script>
            window.location.href = './?tp=cart'
        </script>
    ";

?>
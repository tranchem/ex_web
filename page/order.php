<?php
    // session_start();

    $san_phams = isset($_SESSION['san_phams']) ? $_SESSION['san_phams'] : [];

    // var_dump($san_phams);

    $id_san_pham = $_GET['product_id'];

    if(count($san_phams) > 0) {
        $idx = 0;
        foreach($san_phams as $key => $value) {
            if($value['id_san_pham'] == $id_san_pham) {
                $idx++;
                if(isset($_GET['ac']) && $_GET['ac'] == 'dec') {
                    $san_phams[$key]['so_luong'] = $value['so_luong'] - 1 > 0 ? $value['so_luong'] - 1 : 1;
                } else {
                    $san_phams[$key]['so_luong'] = $value['so_luong'] + 1;
                }
                break;
            }
        }

        if($idx == 0) {
            // echo "khog trung";
            $sql = "
                SELECT *
                FROM tbl_san_pham
                WHERE id_san_pham = '".$id_san_pham."'
            ";
            $result = $connection->query($sql);
            $row = $result->fetch_assoc();
            // var_dump($result);
            // $row = mysqli_fetch_array($result)
        
            $row['so_luong'] = 1;
            array_push($san_phams, $row);
        }
    } else {
        $sql = "
        SELECT *
        FROM tbl_san_pham
        WHERE id_san_pham = '".$id_san_pham."'
        ";
        $result = $connection->query($sql);
        $row = $result->fetch_assoc();
        // var_dump($result);
        // $row = mysqli_fetch_array($result)

        $row['so_luong'] = 2;
        array_push($san_phams, $row);
    }

    

    $_SESSION['san_phams'] = $san_phams;


    // var_dump($san_phams);

    // echo $_SESSION['san_phams'][1]['ten_san_pham'];

    // var_dump($_SESSION['san_phams']);


    echo "
        <script>
            window.location.href = './?tp=cart'
        </script>
    ";

?>
<div class="main-container col1-layout">
                <div class="main">
                    <div class="breadcrumbs">
                        <ul>
                            <li class="home">
                                <a href="index.html" title="Trở về trang chủ">Trang chủ</a>
                                <span>/ </span>
                            </li>
                            <li class="category3">
                                <strong>Thực Đơn</strong>
                            </li>
                        </ul>
                    </div>
                    <div class="col-main">
                        <div class="header_bn header_pro">
                            <div class="container">
                                <div class="col-md-7"><img alt="welcome" src="../assets/media/wysiwyg/popeyes/welcome-vn.png" />
                                    <p class="header_bn_txt">Hơn 300 năm trước, 7 truyền thống ẩm thực kh&aacute;c biệt
                                        ho&agrave;n to&agrave;n đ&atilde; c&ugrave;ng hội tụ v&agrave; đ&uacute;c kết
                                        n&ecirc;n một b&iacute; quyết ẩm thực đậm chất Mỹ mang t&ecirc;n Louisiana
                                        Cooking. Kế thừa di sản tinh tu&yacute; đ&oacute;, giờ đ&acirc;y ch&uacute;ng
                                        t&ocirc;i tự h&agrave;o mang đến cho người ti&ecirc;u d&ugrave;ng những
                                        m&oacute;n ăn tuyệt vời nhất theo c&aacute;ch ri&ecirc;ng của m&igrave;nh.
                                        C&aacute;c th&agrave;nh phần gia vị được ho&agrave; trộn ho&agrave;n hảo với
                                        từng lớp bột phủ l&ecirc;n miếng g&agrave; r&aacute;n được nh&agrave;o nặn
                                        c&ocirc;ng phu bằng tay, cho ra đời những m&oacute;n ăn ngon miệng v&agrave; đậm
                                        đ&agrave; kh&oacute; qu&ecirc;n... Với tất cả mọi nỗ lực v&agrave; t&acirc;m
                                        huyết n&agrave;y, ch&uacute;ng t&ocirc;i hy vọng sẽ mang đến bạn một trải nghiệm
                                        ẩm thực thật phong ph&uacute; v&agrave; sự h&agrave;i l&ograve;ng tuyệt đối.</p>
                                </div>
                                <div class="col-md-5"><a href="products/mon-moi.html" target="_blank"> <img
                                            src="../assets/media/wysiwyg/menu_image_690x518_gskp.jpg" /></a></div>
                            </div>
                        </div>
                        <div class="page-title category-title container banner_category">
                            <h1>Thực Đơn</h1>
                        </div>
                        <p>
                        <div class="col-md-12 product-body">
                            <div class="container">
                                <div class="row">
                                    <?php
                                        $sql = "
                                            SELECT *
                                            FROM tbl_danh_muc
                                        ";
                                        $result = $connection->query($sql);
                                        while ($row = mysqli_fetch_array($result)) { ?>
                                            <div class="col-md-4">
                                                <a class="wrap-sub-category" href="./?tp=product&cate=<?php echo $row['id_dan_muc'] ?>">
                                                    <div class="sub-category">
                                                        <div class="img-sub-category">
                                                            <img width="230" height="230" alt="Ala carte" src=".././admin/uploads/<?php echo $row['anh'] ?>"
                                                                class="img-sub-category">
                                                        </div>
                                                        <div class="btn-sub-category">
                                                            <div class="btn-submit-form text-sub-category"><?php echo $row['ten_danh_muc'] ?></div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php }
                                    ?>
                                </div>
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
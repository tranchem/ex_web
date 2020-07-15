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
                                    <p class="header_bn_txt">Hơn 300 năm trước, 7 truyền thống ẩm thực khác biệt hoàn toàn đã cùng hội tụ và đúc kết nên một bí quyết ẩm thực đậm chất Mỹ mang tên Louisiana Cooking. Kế thừa di sản tinh tuý đó, giờ đây chúng tôi tự hào mang đến cho người tiêu dùng những món ăn tuyệt vời nhất theo cách riêng của mình. Các thành phần gia vị được hoà trộn hoàn hảo với từng lớp bột phủ lên miếng gà rán được nhào nặn công phu bằng tay, cho ra đời những món ăn ngon miệng và đậm đà khó quên... Với tất cả mọi nỗ lực và tâm huyết này, chúng tôi hy vọng sẽ mang đến bạn một trải nghiệm ẩm thực thật phong phú và sự hài lòng tuyệt đối.</p>
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
                                                <a class="wrap-sub-category" href="./?tp=product&cate=<?php echo $row['id_danh_muc'] ?>">
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
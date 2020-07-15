<div class="main-container col3-layout">
	<div class="main">
		<div class="breadcrumbs">
			<ul>
				<li class="home">
					<a href="../../index.html" title="Trở về trang chủ">Trang chủ</a>
					<span>/ </span>
				</li>
				<li class="category3">
					<a href="../../products.html" title="">Thực Đơn</a>
					<span>/ </span>
				</li>
				<li class="category17">
					<strong>Món Mới</strong>
				</li>
			</ul>
		</div>
		<div class="col-main">
			<!-- <p class="category-image"><img src="../assets/media/catalog/category/menu_lto_gskp_cb92_2.jpg" alt="Món Mới"
					title="Món Mới" /></p> -->
			<?php
				$id_danh_muc = $_GET["cate"];
				$sql = "
					SELECT *
					FROM tbl_danh_muc
					WHERE id_danh_muc = '".$id_danh_muc."'
				";
				$result = $connection->query($sql);
				$danh_muc = mysqli_fetch_array($result);
			?>
			<div class="container banner_category">
				<div class="bg_banner_category clearfix">
					<div class="banner-head"><img alt="" src=".././admin/uploads/<?php echo $danh_muc['anh'] ?>" /></div>
				</div>
			</div>
			<div class="page-title category-title container banner_category text-center">
				<h1><?php echo $danh_muc['ten_danh_muc'] ?></h1>
			</div>
			<div class="container banner_category">
				<div class="col-md-12">
					<div class="category-products page-new-dishes">
						<ul class="products-grid products-grid--max-3-col">
						<?php
							$id_danh_muc = $_GET["cate"];
							$sql = "
								SELECT *
								FROM tbl_san_pham
								WHERE id_danh_muc = '".$id_danh_muc."'
							";
							$result = $connection->query($sql);
							while ($row = mysqli_fetch_array($result)) {
						?>
							<li class="item last">
								<div class="product-head">
									<img id="product-collection-image-211"
										src=".././admin/uploads/<?php echo $row["anh"] ?>"
										alt="<?php echo $row["ten_san_pham"] ?>" />

									<div class="description">
										<?php echo $row["mo_ta"] ?>
									</div>
								</div>
								<div class="product-info">
									<h2 class="product-name">
										<?php echo $row['ten_san_pham'] ?>
									</h2>
									<div>
										<span class="price">&nbsp;</span>

										<div class="price-box">
											<p class="price-from">
												<span class="price"><?php echo number_format($row['don_gia']) ?> ₫</span> </p>

										</div>
									</div>
									<div class="actions">
										<a id="GCT_CB94" type="button" title="Đặt mua"
											class="button btn-cart btn-bundle"
											href="./?tp=order&product_id=<?php echo $row['id_san_pham'] ?>"
											>
											Đặt mua
							</a>
									</div>
								</div>
							</li>
						<?php } ?>
						</ul>
						<script
							type="text/javascript">decorateGeneric($$('ul.products-grid'), ['odd', 'even', 'first', 'last'])</script>

						<!--    <div class="toolbar-bottom">
			</div>-->
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
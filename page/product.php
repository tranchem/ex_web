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
					<div class="banner-head"><img alt="" src="<?php echo $danh_muc['anh'] ?>" /></div>
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
										src="<?php echo $row["anh"] ?>"
										alt="<?php echo $row["ten_san_pham"] ?>" />

									<div class="description">
										<?php echo $row["mo_ta"] ?>
									</div>
								</div>
								<div class="product-info">
									<h2 class="product-name">
										Combo Gà Cháy Tỏi - 1 người </h2>
									<div>
										<span class="price">&nbsp;</span>

										<div class="price-box">
											<p class="price-from">
												<span class="price">94.000 ₫</span> </p>

										</div>
									</div>
									<div class="actions">
										<button id="GCT_CB94" type="button" title="Đặt mua"
											class="button btn-cart btn-bundle"
											onclick="setLocation('../mon-moi/gct-cb944df8.html?options=cart')"
											>
											Đặt mua
										</button>
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
			<div class="container banner_category category_footer">
				<div class="box-collateral box-up-sell">
					<h2>Sản phẩm đang khuyến mãi</h2>
					<ul class="products-grid products-grid--max-4-col" id="protion-product-table">
						<li>
							<a href="indexf646.html?name=GCT_CB189" title="Combo Gà Cháy Tỏi – 3 người"
								class="product-image">
								<img src="../assets/media/catalog/product/cache/1/small_image/280x/9df78eab33525d08d6e5fb8d27136e95/c/o/combo189k_optimized.jpg"
									alt="Combo Gà Cháy Tỏi – 3 người" />
							</a>
							<h3 class="product-name">
								<a href="indexf646.html?name=GCT_CB189" title="Combo Gà Cháy Tỏi – 3 người">
									Combo Gà Cháy Tỏi – 3 người... </a>
							</h3>

							<div class="price-box">
								<p class="price-from">
									<span class="price">189.000 ₫</span> </p>

							</div>
						</li>
						<li>
							<a href="../ga-gion-cay.html/index53a2.html?name=GTNM-CB139"
								title="Combo Gà Tắm Nước Mắm - 2 người" class="product-image">
								<img src="../assets/media/catalog/product/cache/1/small_image/280x/9df78eab33525d08d6e5fb8d27136e95/m/e/menu_spicy_redboat139.png"
									alt="Combo Gà Tắm Nước Mắm - 2 người" />
							</a>
							<h3 class="product-name">
								<a href="../ga-gion-cay.html/index53a2.html?name=GTNM-CB139"
									title="Combo Gà Tắm Nước Mắm - 2 người">
									Combo Gà Tắm Nước Mắm - 2 ngườ... </a>
							</h3>

							<div class="price-box">
								<p class="price-from">
									<span class="price">159.000 ₫</span> </p>

							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
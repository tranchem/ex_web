<?php
	include_once(".././ketnoi.php");

	session_start();
	if($_SESSION['email']) {
		// echo "session".$_SESSION['email'];
		// die();
	}
?>

<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="vi" id="top" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="vi" id="top" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="vi" id="top" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="vi" id="top" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="vi" id="top" class="no-js">
<!--<![endif]-->


<!-- Mirrored from popeyes.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jun 2020 02:55:11 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>


	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Popeyes Viet Nam</title>

	<meta name="description"
		content="Popeyes là thương hiệu duy nhất ở Việt Nam phục vụ món Gà Rán đặc trưng Louisiana, Mỹ. Từ nguyên liệu tươi ngon nhất, món Gà Giòn vị đậm đà hấp dẫn!" />
	<meta name="keywords" content="popeyes, chicken, fried, gà rán" />
	<meta name="robots" content="INDEX,FOLLOW" />
	<!--<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">-->
	<link rel="icon" href="../assets/media/favicon/default/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="../assets/media/favicon/default/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<!-- Google Tag Manager -->

	<script>(function (w, d, s, l, i) {
			w[l] = w[l] || []; w[l].push({
				'gtm.start':

					new Date().getTime(), event: 'gtm.js'
			}); var f = d.getElementsByTagName(s)[0],

				j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =

					'../www.googletagmanager.com/gtm5445.html?id=' + i + dl; f.parentNode.insertBefore(j, f);

		})(window, document, 'script', 'dataLayer', 'GTM-W4GVXSK');</script>

	<!-- End Google Tag Manager -->

	<!--[if lt IE 7]>
<script type="text/javascript">
//<![CDATA[
	var BLANK_URL = 'https://popeyes.vn/js/blank.html';
	var BLANK_IMG = 'https://popeyes.vn/js/spacer.gif';
//]]>
</script>
<![endif]-->
	<link rel="stylesheet" type="text/css" href="../assets/media/css_secure/e6e4151db170212c721b127019f56dbf.css" />
	<link rel="stylesheet" type="text/css" href="../assets/media/css_secure/b0d870d61b23058c8faff3d85012bf2f.css"
		media="all" />
	<script type="text/javascript" src="../assets/media/js/ff98acb68a2f5ee0ffa6f735a2bc5bf1.js"></script>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:300,400,500,700,600" />
	<!--[if  (lte IE 8) & (!IEMobile)]>
<link rel="stylesheet" type="text/css" href="https://popeyes.vn/../assets/media/css_secure/d4630e1f24cdd8f484eb0c3e179e8017.css" media="all" />
<![endif]-->
	<!--[if (gte IE 9) | (IEMobile)]><!-->
	<link rel="stylesheet" type="text/css" href="../assets/media/css_secure/a22e1f688685d5f9bce258ffdec9ed55.css"
		media="all" />
	<!--<![endif]-->

	<script type="text/javascript">
		//<![CDATA[
		Mage.Cookies.path = 'index.html';
		Mage.Cookies.domain = '.popeyes.vn';
//]]>
	</script>
	<meta name="viewport" content="initial-scale=1.0, width=device-width" />

	<script type="text/javascript">
		//<![CDATA[
		optionalZipCountries = ["VN"];
//]]>
	</script>
	<!-- BEGIN GOOGLE UNIVERSAL ANALYTICS CODE -->
	<script type="text/javascript">
		//<![CDATA[
		(function (i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date(); a = s.createElement(o),
				m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');


		ga('create', 'UA-106834068-1', 'auto');

		ga('send', 'pageview');

		//]]>
	</script>
	<!-- END GOOGLE UNIVERSAL ANALYTICS CODE -->
	<script type="text/javascript">
		var awAfptcPopupObj = new awAfptcPopup({
			el: 'aw-afptc-popup',
			overlay: 'aw-afptc-overlay',
			decline: 'aw-afptc-decline',
			declineCheck: 'aw-afptc-decline-rule',
			cookie: 'decline_cookie_name',
			requestUrl: "https:\/\/popeyes.vn\/awafptc\/cart\/getPopupHtml\/",
			cookie_lifetime: 86400
		});
		Event.observe(document, 'dom:loaded', function () {
			awAfptcPopupObj.init();
		});
		Event.observe(document, 'aw_ajaxcartpro_cart_update', function () {
			awAfptcPopupObj.init();
		});
	</script>
	<script type="text/javascript">//<![CDATA[
		var Translator = new Translate({ "This is a required field.": "Tr\u01b0\u1eddng b\u1eaft bu\u1ed9c nh\u1eadp.", "Please enter a valid number in this field.": "Vui l\u00f2ng nh\u1eadp m\u1ed9t s\u1ed1 h\u1ee3p l\u1ec7 trong tr\u01b0\u1eddng n\u00e0y.", "Please use numbers only in this field. Please avoid spaces or other characters such as dots or commas.": "Vui l\u00f2ng ch\u1ec9 s\u1eed d\u1ee5ng s\u1ed1 trong tr\u01b0\u1eddng n\u00e0y. H\u00e3y tr\u00e1nh kh\u00f4ng gian ho\u1eb7c c\u00e1c k\u00fd t\u1ef1 kh\u00e1c nh\u01b0 d\u1ea5u ch\u1ea5m ho\u1eb7c d\u1ea5u ph\u1ea9y.", "Please enter a valid email address. For example johndoe@domain.com.": "H\u00e3y nh\u1eadp \u0111\u1ecba ch\u1ec9 email, v\u00ed d\u1ee5: abc@domain.com", "Please enter 6 or more characters without leading or trailing spaces.": "Vui l\u00f2ng nh\u1eadp 6 k\u00fd t\u1ef1 tr\u1edf l\u00ean m\u00e0 kh\u00f4ng c\u00f3 d\u1ea5u c\u00e1ch d\u1eabn ho\u1eb7c d\u1ea5u c\u00e1ch.", "Please make sure your passwords match.": "H\u00e3y ch\u1eafc ch\u1eafn r\u1eb1ng m\u1eadt kh\u1ea9u c\u1ee7a b\u1ea1n ph\u00f9 h\u1ee3p.", "Text length does not satisfy specified text range.": "Chi\u1ec1u d\u00e0i v\u0103n b\u1ea3n kh\u00f4ng th\u1ecfa m\u00e3n quy \u0111\u1ecbnh.", "Complete": "Ho\u00e0n th\u00e0nh", "Your order cannot be completed at this time as there is no shipping methods available for it. Please make necessary changes in your shipping address.": "\u0110\u01a1n \u0111\u1eb7t h\u00e0ng c\u1ee7a b\u1ea1n kh\u00f4ng th\u1ec3 ho\u00e0n th\u00e0nh v\u00e0o l\u00fac n\u00e0y v\u00ec kh\u00f4ng c\u00f3 ph\u01b0\u01a1ng th\u1ee9c v\u1eadn chuy\u1ec3n n\u00e0o c\u00f3 s\u1eb5n cho n\u00f3. Vui l\u00f2ng th\u1ef1c hi\u1ec7n nh\u1eefng thay \u0111\u1ed5i c\u1ea7n thi\u1ebft trong \u0111\u1ecba ch\u1ec9 giao h\u00e0ng c\u1ee7a b\u1ea1n.", "Please specify shipping method.": "B\u1ea1n ph\u1ea3i ch\u1ecdn ph\u01b0\u01a1ng th\u1ee9c thanh to\u00e1n.", "Please specify payment method.": "B\u1ea1n ph\u1ea3i ch\u1ecdn ph\u01b0\u01a1ng th\u1ee9c thanh to\u00e1n.", "Add to Cart": "\u0110\u1eb7t h\u00e0ng", "In Stock": "C\u00f2n h\u00e0ng", "Out of Stock": "H\u1ebft h\u00e0ng" });
		//]]></script>
</head>

<body class=" cms-index-index cms-home catalog-category-view customer-account-login">
	<!-- Google Tag Manager (noscript) -->

	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W4GVXSK" height="0" width="0"
			style="display:none;visibility:hidden"></iframe></noscript>

	<!-- End Google Tag Manager (noscript) -->
	<div class="wrapper">
		<noscript>
			<div class="global-site-notice noscript">
				<div class="notice-inner">
					<p>
						<strong>JavaScript seems to be disabled in your browser.</strong><br />
						You must have JavaScript enabled in your browser to utilize the functionality of this website.
					</p>
				</div>
			</div>
		</noscript>
		<div class="page">
			<div class="overlay">
				<img src="../assets/skin/frontend/rwd/popeyes/images/Pacman.gif"
					alt="Đang xử lý dữ liệu để qua bước sau..." title="Đang xử lý dữ liệu để qua bước sau..."
					class="v-middle" /> Đang xử lý dữ liệu để qua bước sau...</div>
			<div id="popup-wrapper" style="display: none;">
				<div class="career-popup-overlay" id="popup-overlay" style="display: none;"></div>

				<a id="open-minicart-mobile" href="checkout/cart/index.html" data-target-element="#header-cart"
					class="skip-link skip-cart  no-count ">
					<span class="icon "></span>
					<span class="label">Cart</span>
					<span class="minicart-subtotal">0 ₫</span>
				</a>

				<a id="open-popup" class="skip-link skip-cart  no-count">
					<span class="icon "></span>
					<span class="label">Cart</span>
					<span class="minicart-subtotal">0 ₫</span>
				</a>

				<div id="header-cart" class="block block-cart skip-content">

					<div class="loading-popup">
						<img src="../assets/skin/frontend/rwd/popeyes/images/Pacman.gif"
							alt="Đang xử lý dữ liệu để qua bước sau..." title="Đang xử lý dữ liệu để qua bước sau..."
							class="v-middle" />
					</div>
					<div class="block-subtitle clearfix">
						<h3>Phần ăn bạn đã chọn</h3>
						<a id="popup-cart-close" onclick="openPopup()" href="#" title="Đóng">&times;</a>
					</div>
					<div class="minicart-wrapper">
						<div id="minicart-error-message" class="minicart-message"></div>
						<div id="minicart-success-message" class="minicart-message"></div>
						<p class="empty">Không có sản phẩm nào</p>
					</div>
					<script>
						current_price_promo = 0;
						function qtyValidate(qty, obj, $btn_update) {
							var btnChange = jQuery(obj).parent('.product-qty-table').parent('tr').find('#change-food');
							jQuery($btn_update).trigger("click");
							screen = jQuery(window).width();
							if (screen > 992) {
								jQuery('.loading-popup').css('display', 'block');
							}
						}
						function validateSubotal() {
							var subtotal = 0;
							if (subtotal < 100000) {
								jQuery('.minicart-actions .checkout-button').css({
									'pointer-events': 'none',
									'opacity': '0.3'
								});
							} else {
								jQuery('.minicart-actions .checkout-button').css({
									'pointer-events': 'intitial',
									'opacity': 'intitial'
								});
							}
						}
						function showMessage(event) {
							event.preventDefault();
							alert('Đơn hàng của quý khách chưa đủ 100.000₫ ,quý khách vui lòng đặt hàng thêm để có thể thanh toán.');
						}
						function checkDeliveryTime() {
							var dt = new Date();
							var minutes = dt.getMinutes();
							var minutes = minutes < 10 ? '0' + minutes : minutes;
							var curr_time = dt.getHours() + ":" + minutes;

							var curt = new Date("November 13, 2013 " + curr_time);
							curt = curt.getTime();
							//start time
							var start_time = "10:00";
							//convert both time into timestamp
							var stt = new Date("November 13, 2013 " + start_time);
							stt = stt.getTime();

							//end time
							var end_time = "21:00";

							var endt = new Date("November 13, 2013 " + end_time);
							endt = endt.getTime();

							if (!(stt <= curt && curt < endt)) {
								event.preventDefault();
								alert('Popeyes nhận giao hàng từ 10:00 - 21:00. Quý khách vui lòng đặt hàng trong khung giờ từ 10:00 - 21:00 hằng ngày');
							}

							var GrandTotal = parseInt(0);
							if (GrandTotal >= 500000) {
								if (current_price_promo) {
									event.preventDefault();
									alert(Translator.translate('The total value of promotional products must be less than VND 500.000.'));
								}
							}
						}
						jQuery(document).ready(function () {
							//validateSubotal();
							//        jQuery('.product-qty-table input.cart-item-quantity').on('keyup', function (ev) {
							//            var qty = jQuery(this).val();
							//            var div = jQuery(this).parent('.col-md-12').parent('.product-qty-table').find(".notifi");
							//            var $btn_update = jQuery(this).parent().find(".quantity-button");
							//            qtyValidate(qty, div, $btn_update);
							//        });
							jQuery('#popup-cart-close').click(function () {
								jQuery('#popup-wrapper').fadeOut();
								jQuery('#header-cart').fadeOut();
								jQuery('#popup-overlay').fadeOut();
							});

							var price_promo = current_price_promo;
							var price_product_current_popup = 0;
							jQuery(".product-qty-table .button").unbind().click(function () {
								var product_price = jQuery(this).parent().find('#product_price_in_cart').val();
								var $button = jQuery(this);
								var oldValue = $button.parent().find(".cart-item-quantity").val();
								var $btn_update = $button.parent().find(".quantity-button");
								if ($button.text() == "+") {
									var newVal = parseFloat(oldValue) + 1;
									price_product_current_popup = 1 * product_price;
								} else {
									// Don't allow decrementing below zero
									if (oldValue > 1) {
										var newVal = parseFloat(oldValue) - 1;
										price_product_current_popup = -1 * product_price;
									}
								}
								if (newVal > 0) {
									price_promo = current_price_promo + price_product_current_popup;
									var product_sku = jQuery(this).parent().find('#product_sku_in_cart').val();

									if (price_promo >= 500000 && jQuery.inArray(product_sku, arr_sku_promo_product) !== -1) {
										alert(Translator.translate('The total value of promotional products must be less than VND 500.000.'));
									} else {
										$button.parent().find(".cart-item-quantity").val(newVal, this);
										var div = jQuery(this).parent('.col-md-12').parent('.product-qty-table').find(".notifi");
										qtyValidate(newVal, div, $btn_update);
									}
								}
							});
							jQuery('.btn-edit').unbind().click(function () {
								var get_content = jQuery(this).parent('.col-md-8').parent('.col-md-12').parent('td').find('#shortdesciption');
								if (jQuery('.btn-arrow-down').hasClass('active')) {
									jQuery('.btn-arrow-up').addClass('active');
									jQuery('.btn-arrow-down').removeClass('active');
								} else {
									jQuery('.btn-arrow-down').addClass('active');
									jQuery('.btn-arrow-up').removeClass('active');
								}


								if (get_content.length > 0) {
									jQuery(get_content).slideToggle(500);
								}
							});
						});
					</script>
				</div>
			</div>
			<div class="notification-browser-ie" id="notification-browser-ie">
				<div class="notification-browser-ie-content">
					<p>Website kh&ocirc;ng hỗ trợ chạy tr&ecirc;n phi&ecirc;n bản tr&igrave;nh duyệt bạn đang sử dụng.
						Vui l&ograve;ng cập nhật phi&ecirc;n bản mới nhất hoặc sử dụng tr&igrave;nh duyệt chrome để đặt
						h&agrave;ng. Bạn c&oacute; thể t&agrave;i về theo li&ecirc;n kết&nbsp;<span><a class="col0f5491"
								href="https://www.google.com/chrome/browser/desktop/index.html" rel="noreferrer"
								title="Tải tr&igrave;nh duyệt chrome" target="_blank">Download Chrome</a></span>.</p>
				</div>
			</div>
			<div class="persist-header">
				<header id="header" class="page-header">
					<div class="store-language-container">
						<div class="form-language">
							<label for="select-language">Ngôn ngữ:</label>
							<select id="select-language" title="Ngôn ngữ" onchange="window.location.href=this.value">
								<option id="eng" value="index3cda.html?___store=eng&amp;___from_store=vn">English
								</option>
								<option id="vn" value="https://popeyes.vn/?___store=vn&amp;___from_store=vn"
									selected="selected">Việt Nam</option>
							</select>
						</div>

						<script type="text/javascript">
							jQuery(document).ready(function () {
								jQuery("#multiple-language .language .vi a").click(function () {
									jQuery("#select-language #vn").attr("selected", "selected");
									jQuery("#select-language #eng").removeAttr("selected");
									window.location.href = jQuery("#select-language #vn").val();
								});
								jQuery("#multiple-language .language .en a").click(function () {
									jQuery("#select-language #eng").attr("selected", "selected");
									jQuery("#select-language #vn").removeAttr("selected");
									window.location.href = jQuery("#select-language #eng").val();
								});
							});
						</script>
					</div>
					<div class="line-top"></div>
					<div class="page-header-container container">
						<a class="logo" href="?tp=welcome">
							<img src="../assets/skin/frontend/rwd/popeyes/images/Popeyes-New-Logo.png"
								alt="Popeyes Viet Nam" class="large" />
							<img src="../assets/skin/frontend/rwd/popeyes/images/Popeyes-New-Logo.png"
								alt="Popeyes Viet Nam" class="small" />
						</a>
						<div id="header-nav" class="skip-content">
							<nav id="nav">
								<ol class="nav-primary">
									<li class="level0 nav-1 first parent"><a href="?tp=product"
											class="level0 has-children">Thực Đơn</a>
										<ul class="level0">

										<?php
											$sql = "SELECT * FROM tbl_danh_muc";
											$result = $connection->query($sql);
											while($row = mysqli_fetch_array($result))  {
											?>
												<li class="level1 nav-1-1 first">
													<a href="?tp=product&cate=<?php echo $row['id_danh_muc'] ?>" class="level1 "><?php echo $row['ten_danh_muc'] ?></a>
												</li>
											<?php
											}
										?>
										</ul>
									</li>
									<li class="hidden-xs"><img class="menu-separator"
											src="../assets/skin/frontend/rwd/popeyes/images/topbar-separator.png"
											alt=""></li>
									<li class="level0 nav-2"><a href="?tp=brand" class="level0 ">Thương hiệu</a></li>
									<li class="hidden-xs"><img class="menu-separator"
											src="../assets/skin/frontend/rwd/popeyes/images/topbar-separator.png"
											alt=""></li>
									<li class="level0 nav-3 active"><a href="promotions/index.html"
											class="level0 ">Khuyến mãi</a></li>
									<li class="hidden-xs"><img class="menu-separator"
											src="../assets/skin/frontend/rwd/popeyes/images/topbar-separator.png"
											alt=""></li>
									<li class="level0 nav-4 active"><a href="store.html/index.html" class="level0 ">Cửa
											hàng</a></li>
									<li class="hidden-xs"><img class="menu-separator"
											src="../assets/skin/frontend/rwd/popeyes/images/topbar-separator.png"
											alt=""></li>
									<li class="level0 nav-5 active"><a href="career/index.html" class="level0 ">Tuyển
											dụng</a></li>
									<li class="hidden-xs"><img class="menu-separator"
											src="../assets/skin/frontend/rwd/popeyes/images/topbar-separator.png"
											alt=""></li>
									<li class="level0 nav-6 active last"><a
											href="?tp=contact"
											class="level0 ">Liên hệ</a></li>
									<li class="hidden-xs"><img class="menu-separator"
											src="../assets/skin/frontend/rwd/popeyes/images/topbar-separator.png"
											alt=""></li>
								</ol>
							</nav>

						</div>
						<!-- <a class="giaohang_mobile" href="https://popeyes.vn/giaohang/">
				<img alt="giaohang-mobile" src="https://popeyes.vn/../assets/skin/frontend/rwd/popeyes/images/giaohang-mobile.png" width="92" height="35">
			</a>

			<a class="phone_mobile" href="https://popeyes.vn/giaohang/">
				<img alt="phone-mobile" src="https://popeyes.vn/../assets/skin/frontend/rwd/popeyes/images/phone-mobile.png" width="92" height="14">
			</a> -->
						<h1 style="margin:0;"></h1>
						<!--<div class="store-language-container">-->

						<!--</div>-->
						<!--<div class="store-language-container"></div>-->
						<!-- Skip Links -->
						<div class="skip-links">
							<a href="#header-nav" class="skip-link skip-nav">
								<span class="icon"></span>
								<span class="label">Menu</span>
							</a>
							<a href="#header-search" class="skip-link skip-search ">
								<span class="icon"></span>
								<span class="label">Tìm</span>
							</a>

							<div class="account-cart-wrapper">

							<?php
							if(isset($_SESSION['email'])) { ?>
								<a href="customer/account/index.html" data-target-element="#header-account" class="skip-link skip-account login">
									<span class="icon login"></span>
									<span class="full-name-customer"><?php echo $_SESSION['email'] ?></span>
								</a>
								<!-- Account -->

								<div id="header-account" class="skip-content">
									<div class="links">
										<ul>
											<li class="first"><a href="?tp=logout" title="Tài khoản">Đăng xuất</a></li>
											<!-- <li class=" last"><a href="customer/account/login/index.html" title="Đăng nhập">Đăng
													nhập</a></li> -->
										</ul>
									</div>
								</div>
							<?php } else { ?>
								<a href="customer/account/index.html" data-target-element="#header-account" class="skip-link skip-account">
									<span class="icon"></span>
								</a>
								<div id="header-account" class="skip-content">
									<div class="links">
										<ul>
											<li class="first"><a href="?tp=account" title="Tài khoản">Tài khoản</a></li>
											<!-- <li class=" last"><a href="customer/account/login/index.html" title="Đăng nhập">Đăng
													nhập</a></li> -->
										</ul>
									</div>
								</div>
							<?php } ?>
								<!-- Cart -->
								<div class="header-minicart">

									<a id="open-minicart-mobile" href="checkout/cart/index.html"
										data-target-element="#header-cart" class="skip-link skip-cart  no-count ">
										<span class="icon "></span>
										<span class="label">Cart</span>
										<span class="minicart-subtotal">0 ₫</span>
									</a>

									<a id="open-popup" class="skip-link skip-cart  no-count">
										<span class="icon "></span>
										<span class="label">Cart</span>
										<span class="minicart-subtotal">0 ₫</span>
									</a>

									<div id="header-cart" class="block block-cart skip-content">

										<div class="loading-popup">
											<img src="../assets/skin/frontend/rwd/popeyes/images/Pacman.gif"
												alt="Đang xử lý dữ liệu để qua bước sau..."
												title="Đang xử lý dữ liệu để qua bước sau..." class="v-middle" />
										</div>
										<div class="block-subtitle clearfix">
											<h3>Phần ăn bạn đã chọn</h3>
											<a id="popup-cart-close" onclick="openPopup()" href="#"
												title="Đóng">&times;</a>
										</div>
										<div class="minicart-wrapper">
											<div id="minicart-error-message" class="minicart-message"></div>
											<div id="minicart-success-message" class="minicart-message"></div>
											<p class="empty">Không có sản phẩm nào</p>
										</div>
										<script>
											current_price_promo = 0;
											function qtyValidate(qty, obj, $btn_update) {
												var btnChange = jQuery(obj).parent('.product-qty-table').parent('tr').find('#change-food');
												jQuery($btn_update).trigger("click");
												screen = jQuery(window).width();
												if (screen > 992) {
													jQuery('.loading-popup').css('display', 'block');
												}
											}
											function validateSubotal() {
												var subtotal = 0;
												if (subtotal < 100000) {
													jQuery('.minicart-actions .checkout-button').css({
														'pointer-events': 'none',
														'opacity': '0.3'
													});
												} else {
													jQuery('.minicart-actions .checkout-button').css({
														'pointer-events': 'intitial',
														'opacity': 'intitial'
													});
												}
											}
											function showMessage(event) {
												event.preventDefault();
												alert('Đơn hàng của quý khách chưa đủ 100.000₫ ,quý khách vui lòng đặt hàng thêm để có thể thanh toán.');
											}
											function checkDeliveryTime() {
												var dt = new Date();
												var minutes = dt.getMinutes();
												var minutes = minutes < 10 ? '0' + minutes : minutes;
												var curr_time = dt.getHours() + ":" + minutes;

												var curt = new Date("November 13, 2013 " + curr_time);
												curt = curt.getTime();
												//start time
												var start_time = "10:00";
												//convert both time into timestamp
												var stt = new Date("November 13, 2013 " + start_time);
												stt = stt.getTime();

												//end time
												var end_time = "21:00";

												var endt = new Date("November 13, 2013 " + end_time);
												endt = endt.getTime();

												if (!(stt <= curt && curt < endt)) {
													event.preventDefault();
													alert('Popeyes nhận giao hàng từ 10:00 - 21:00. Quý khách vui lòng đặt hàng trong khung giờ từ 10:00 - 21:00 hằng ngày');
												}

												var GrandTotal = parseInt(0);
												if (GrandTotal >= 500000) {
													if (current_price_promo) {
														event.preventDefault();
														alert(Translator.translate('The total value of promotional products must be less than VND 500.000.'));
													}
												}
											}
											jQuery(document).ready(function () {
												//validateSubotal();
												//        jQuery('.product-qty-table input.cart-item-quantity').on('keyup', function (ev) {
												//            var qty = jQuery(this).val();
												//            var div = jQuery(this).parent('.col-md-12').parent('.product-qty-table').find(".notifi");
												//            var $btn_update = jQuery(this).parent().find(".quantity-button");
												//            qtyValidate(qty, div, $btn_update);
												//        });
												jQuery('#popup-cart-close').click(function () {
													jQuery('#popup-wrapper').fadeOut();
													jQuery('#header-cart').fadeOut();
													jQuery('#popup-overlay').fadeOut();
												});

												var price_promo = current_price_promo;
												var price_product_current_popup = 0;
												jQuery(".product-qty-table .button").unbind().click(function () {
													var product_price = jQuery(this).parent().find('#product_price_in_cart').val();
													var $button = jQuery(this);
													var oldValue = $button.parent().find(".cart-item-quantity").val();
													var $btn_update = $button.parent().find(".quantity-button");
													if ($button.text() == "+") {
														var newVal = parseFloat(oldValue) + 1;
														price_product_current_popup = 1 * product_price;
													} else {
														// Don't allow decrementing below zero
														if (oldValue > 1) {
															var newVal = parseFloat(oldValue) - 1;
															price_product_current_popup = -1 * product_price;
														}
													}
													if (newVal > 0) {
														price_promo = current_price_promo + price_product_current_popup;
														var product_sku = jQuery(this).parent().find('#product_sku_in_cart').val();

														if (price_promo >= 500000 && jQuery.inArray(product_sku, arr_sku_promo_product) !== -1) {
															alert(Translator.translate('The total value of promotional products must be less than VND 500.000.'));
														} else {
															$button.parent().find(".cart-item-quantity").val(newVal, this);
															var div = jQuery(this).parent('.col-md-12').parent('.product-qty-table').find(".notifi");
															qtyValidate(newVal, div, $btn_update);
														}
													}
												});
												jQuery('.btn-edit').unbind().click(function () {
													var get_content = jQuery(this).parent('.col-md-8').parent('.col-md-12').parent('td').find('#shortdesciption');
													if (jQuery('.btn-arrow-down').hasClass('active')) {
														jQuery('.btn-arrow-up').addClass('active');
														jQuery('.btn-arrow-down').removeClass('active');
													} else {
														jQuery('.btn-arrow-down').addClass('active');
														jQuery('.btn-arrow-up').removeClass('active');
													}


													if (get_content.length > 0) {
														jQuery(get_content).slideToggle(500);
													}
												});
											});
										</script>
									</div>
								</div>

							</div>
						</div>

						
					</div>
					<ul id="multiple-language"
						class="nav navbar-nav navbar-right navbar-inverse hidden-xs language_block">
						<li>
							<div class="language">
								<div class="vi">
									<a href="javascript:void(0);" data-lang="vi" class="language_switch"><img
											src="../assets/skin/frontend/rwd/popeyes/images/vi.png" alt="vi"> VI</a>
								</div>
								<div class="en">
									<a href="javascript:void(0);" data-lang="en" class="language_switch"><img
											src="../assets/skin/frontend/rwd/popeyes/images/en.png" alt="en"> EN</a>
								</div>
							</div>
						</li>
					</ul>
				</header>
			</div>
			<a href="#" class="scrollToTop">Scroll To Top</a>
			<a href="giaohang/index.html" class="logo_giaohang"><img alt="delivery"
					src="../assets/skin/frontend/rwd/popeyes/images/giahang-vie.png" class="img-responsive" /></a>
			<input id="store-view-id" type="hidden" value="1" />
			<script type="text/javascript">
				Translator.add('Change the food detail', 'Thay đổi chi tiết phần ăn');
				Translator.add('Please call to order!', 'Vui lòng gọi điện để đặt hàng!');
				Translator.add('The amount of spicy must be less than the number of purchases!', 'Số lượng cay phải nhỏ hơn số lượng hàng mua!');
				Translator.add('Thank you for your request, we will feedback to you soon.', 'Cảm ơn yêu cầu của bạn, chúng tôi sẽ phản hồi cho bạn sớm.');
				Translator.add('Unable to submit your request. Please, try again later.', 'Không thể gửi yêu cầu của bạn. Vui lòng thử lại sau.');
				Translator.add('The total value of promotional products must be less than VND 500.000.', 'Tổng giá trị sản phẩm khuyến mãi phải dưới 500.000đ.');
				Translator.add('Conditions for canceling an order: \n 1. within 5 minutes (from the time order). \n 2. Call center has not confirmed.', 'Điều kiện để hủy đơn hàng: \n 1. Trong 5 phút (thời gian bắt đầu tính từ lúc order). \n 2. Call center chưa xác nhận.');
				Translator.add('This order has been canceled.', 'Đơn đặt hàng này đã hủy.');
				Translator.add('* Please enter the quantity.', '* Vui lòng nhập số lượng vào.');
				Translator.add('The system is overloaded!', 'Hệ thống đang bị quá tải!');
				var arr_sku_promo_product = ["HAPPY-HOUR", "WED-1-GET-1-2PC-MILD", "WED-1-GET-1-2PC-SPICY", "COMBO-BIC-PC-3", "COMBO-BIC-PC-3-MILD"];
			</script>
			<script async src="../popeyesvn.api.useinsider.com/insa98d.js?id=10004144"></script>
			<div class="main-container col1-layout">
				<div class="main">
					<div class="col-main">


						<!-- If jquery alredy loaded/conflicts then below jQuery file not required -->
						<script type="text/javascript">
							var $ds = jQuery.noConflict();
							var screen = jQuery(window).width();

							$ds(function () {
								if (screen > 544) {
									jQuery(".swiper-container").css("display", "none");

									$ds('#camera_wrap_1').camera({
										thumbnails: true,
										fx: 'random',
										time: 4000,
										transPeriod: 2000,
										loader: 'bar',
										navigation: 1,
										opacityOnGrid: true,
										pauseOnClick: false,
										//playPause: 1,			
										pagination: true,
										autoAdvance: true,
										loaderColor: '#DBD5D0',
										loaderBgColor: '#000000',
										loaderOpacity: 0.8
									});
								} else {
									var width = 0;
									jQuery(".fluid_container").css("display", "none");
									jQuery(".swiper-slide").css("width", screen);
									jQuery(".swiper-slide").each(function () {
										width += jQuery(".swiper-slide").width();
									});
									jQuery(".swiper").css("width", width);

									var diff = 0,
										numOfSlides = jQuery(".swiper-slide").length - 1,
										curSlide = 0;

									function navigateLeft() {
										if (curSlide > 0) curSlide--;
										changeSlides();
									}

									function navigateRight() {
										if (curSlide < numOfSlides) curSlide++;
										changeSlides();
									}

									function changeSlides() {
										jQuery(".swiper").css("transform", "translate3d(" + -curSlide * 100 / (numOfSlides + 1) + "%,0,0)");
										diff = 0;
									}

									jQuery(document).on("mousedown touchstart", ".swiper-slide", function (e) {
										var startX = e.pageX || e.originalEvent.touches[0].pageX,
											winW = jQuery(window).width();
										diff = 0;
										jQuery(document).on("mousemove touchmove", function (e) {
											var x = e.pageX || e.originalEvent.touches[0].pageX;
											diff = (startX - x) / winW * 70;
											if ((!curSlide && diff < 0) || (curSlide === numOfSlides && diff > 0)) diff /= 2;
											jQuery(".swiper").css("transform", "translate3d(" + (-curSlide * 100 / (numOfSlides + 1) - diff) + "%,0,0)");
										});
									});

									jQuery(document).on("mouseup touchend", function (e) {
										jQuery(document).off("mousemove touchmove");
										if (!diff) {
											changeSlides();
											return;
										}
										if (diff > -8 && diff < 8) {
											changeSlides();
											return;
										}
										if (diff <= -8) {
											navigateLeft();
										}
										if (diff >= 8) {
											navigateRight();
										}
									});
								}
							});
							$ds(document).ready(function () {
								$ds("#back_to_camera").css({
									'clear': 'both',
									'display': 'block',
									'height': '80px',
									'line-height': '40px',
									'padding': '20px'
								});
								$ds('.fluid_container').css({
									'margin': '0 auto',
									'width': '100%'
								});
								$ds('.camera_prev').css({
									'background': '#DBD5D0'
								});
								$ds('.camera_next').css({
									'background': '#DBD5D0'
								});
								$ds('.camera_commands').css({
									'background': '#DBD5D0'
								});
								$ds('.camera_thumbs_cont').css({
									'background': '#999999'
								});
								$ds('.camera_wrap .camera_pag .camera_pag_ul li').css({
									'background': '#999999'
								});
								$ds('.camera_wrap .camera_pag .camera_pag_ul li.cameracurrent > span').css({
									'background': '#333333'
								});
								$ds('.camera_caption > div').css({
									'background': '#333333',
									'opacity': '0.69',
									'font-size': '14px'
								});
								$ds('.camera_caption').css({
									'color': '#FFFFFF'
								});
							});
						</script>










						<!-- Main content -->
						<?php
							$tp = isset($_GET['tp']) ? $_GET['tp'] : 'welcome';
							$tp = $tp . '.php';
							include_once($tp);
						?>




					</div>
				</div>
			</div>
			<div class="footer-container">
				<div class="footer">
					<div class="container">
						<div class="row">
							<div class="col-md-7 clearfix">
								<div class="row clearfix">
									<p><a href="contact-us/index.html">Li&ecirc;n Hệ</a></p>
									<p><a href="https://www.mypopeyesfeedback.com/vnm?AspxAutoDetectCookieSupport=1">&Yacute;
											kiến phản hồi</a></p>
									<p><a href="popeyes-policy/index.html">Điều khoản &amp; Ch&iacute;nh s&aacute;ch</a>
									</p>
								</div>
								<div class="row clearfix">
									<div class="col-sm-3 padding5 clearfix wrap-social">
										<div class="social clearfix"><a
												href="https://www.youtube.com/channel/UC_VWZYATS86xc8EFif-BiyQ"
												target="_blank"><img alt=""
													src="../assets/skin/frontend/rwd/popeyes/images/youtube_icon.png" /></a>
											<a href="https://www.facebook.com/PopeyesVN" target="_blank"><img alt=""
													src="../assets/skin/frontend/rwd/popeyes/images/ic-facebook.png" /></a>
											<a href="https://instagram.com/popeyesvn" target="_blank"><img alt=""
													src="../assets/skin/frontend/rwd/popeyes/images/ic-instagram.png" /></a>
										</div>
									</div>
									<div id="shareBtn" class="fb-like" data-href="https://www.facebook.com/PopeyesVN/"
										data-layout="button_count" data-action="like" data-size="small"
										data-show-faces="true" data-share="false"></div>
									<button id="messBtn" class="btn btn-small">
										<span class="pluginButtonIcon">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
												class="pluginButtonIconSVG">
												<path fill="white" d="
									M5.4743532,13.6041412 C6.2578121,13.8601407 7.10947545,14 8,14
									C11.8662465,14 15,11.3637984 15,8.03240966 C15,4.70069681
									11.8662465,2 8,2 C4.1337535,2 1,4.70069681 1,8.03240966
									C1,9.70838442 1.79313872,11.2084105 3.07366666,12.2853409
									L3.07366666,15.048 L5.4743532,13.6041412 Z M8.65733333,9.78033333
									L6.934,8.005 L3.61466667,9.825 L7.254,5.99633333
									L8.97733333,7.77133333 L12.2963333,5.95166667
									L8.65733333,9.78033333 Z">
												</path>
											</svg>
											<img class="pluginButtonIconPNG img"
												src="../assets/skin/frontend/rwd/popeyes/images/icon_messager.png"
												alt="" width="14" height="14">
										</span>
										Send
									</button>
									<img class="logo_bct"
										src="../assets/skin/frontend/rwd/popeyes/images/20150827110756-dathongbao.png"
										alt="" width="100">
								</div>
							</div>
							<div class="col-md-5 clearfix">
								<div class="block block-subscribe">
									<div class="block-title">
										<strong><span>Nhận tin từ POPEYES</span></strong>
									</div>
									<form action="https://popeyes.vn/newsletter/subscriber/new/" method="post"
										id="newsletter-validate-detail">
										<div class="block-content">
											<div class="form-subscribe-header">
												<label for="newsletter">Đăng ký nhận bản tin điện tử:</label>
											</div>
											<div class="input-box">
												<input type="email" placeholder="Nhập email của bạn.."
													spellcheck="false" name="email" id="newsletter"
													title="Đăng ký nhận bản tin điện tử"
													class="input-text required-entry validate-email" />
											</div>
											<div class="actions">
												<button type="submit" title="Đăng kí" class="button"><span><span>Đăng
															kí</span></span></button>
											</div>
										</div>
									</form>
									<script type="text/javascript">
										//<![CDATA[
										var newsletterSubscriberFormDetail = new VarienForm('newsletter-validate-detail');
	//]]>
									</script>
								</div>
							</div>

						</div>
					</div>
				</div>
				<address class="copyright">HỌC VIỆN NGÂN HÀNG <br> SỐ 12 CHÙA BỘC - HÀ NỘI <br> Hotline: 1900 6008 | Email:
					contact@popeyes.vn | MST: 0310 362 754 <div class="levinci-introduce"><a class="levinci-link"
							href="https://levincigroup.com/">Designed by 20 Group</a></div>
				</address>

			</div>
			<script type="text/javascript">
				document.getElementById('messBtn').onclick = function () {
					FB.ui({
						method: 'send',
						display: 'popup',
						link: 'https://www.facebook.com/PopeyesVN/',
					}, function (response) { });
				}

				jQuery(document).ready(function () {
					jQuery('#popupYesNoCallback').click(function () {
						Lobibox.confirm({
							title: "Popeyes Trân Trọng Phản Hồi Của Bạn",
							msg: "Bạn Còn Giữ Hóa Đơn Không?",
							callback: function ($this, type, ev) {
								if (type === 'yes') {
									window.open("https://www.mypopeyesfeedback.com/vnm");
								} else if (type === 'no') {
									window.open("feedback/index.html");
								}
							},
							buttons: {
								yes: {
									text: "Có",
								},
								no: {
									text: "Không",
								}

							}
						});
					});
				});
			</script>
			<div class="alProgressBar alPopup" style="display: none;">
				<div class="Shadow"></div>
				<div class="loading-mask">
					<p class="loader" id="loading_mask_loader"><img
							src="../assets/skin/frontend/base/default/ajaxlogin/ajax-loader-tr.gif"
							alt="Loading..." /><br />Please wait...</p>
				</div>
			</div>

			<div class="al-authorization-container-overlap" id="node-uid-ajaxlogin-2" style="display: none;">
				<div class="Shadow"></div>
				<div class="Canvas">
					<div class="Shadowed">
						<div class="Wrapper">
							<div class="al-authorization" id="node-uid-ajaxlogin-3">
								<div class="Window">
									<div class="Frame" style="display: none;">
										<div class="al-authorizationform-register">
											<form action="https://popeyes.vn/ajaxlogin/index/registerPost/"
												method="post" id="register-form">
												<input type="hidden" name="success_url" value="" />
												<input type="hidden" name="error_url" value="" />
												<ul class="form-list">
													<li>
														<div class="Title">
															<h2>Tạo tài khoản</h2>
														</div>
													</li>
													<li>
														<div class="customer-name">
															<div class="field name-firstname">
																<label for="firstname"
																	class="required"><em>*</em>Tên</label>
																<div class="input-box">
																	<input type="text" id="firstname" placeholder=""
																		name="firstname" value="" title="Tên"
																		maxlength="255"
																		class="input-text required-entry" />
																</div>
															</div>
															<div class="field name-lastname">
																<label for="lastname"
																	class="required"><em>*</em>Họ</label>
																<div class="input-box">
																	<input type="text" id="lastname" placeholder=""
																		name="lastname" value="" title="Họ"
																		maxlength="255"
																		class="input-text required-entry" />
																</div>
															</div>
														</div>
													</li>
													<li>
														<label for="email" class="required"><em>*</em>Địa chỉ
															email</label>
														<div class="input-box">
															<input type="text" name="email" value=""
																id="al_auth_reg_email"
																class="input-text required-entry validate-email"
																title="Địa chỉ email" />
														</div>
													</li>
													<li>
														<label for="pass" class="required"><em>*</em>Mật khẩu</label>
														<div class="input-box">
															<input type="password" name="password"
																class="input-text required-entry validate-password"
																title="Mật khẩu" id="al_auth_reg_password" />
														</div>
													</li>
													<li>
														<label for="confirmation" class="required"><em>*</em>Nhập lại
															mật khẩu</label>
														<div class="input-box">
															<input type="password" name="confirmation"
																class="input-text required-entry validate-cpassword"
																title="Nhập lại mật khẩu"
																id="al_auth_reg_passwordconfirm" />
														</div>
													</li>
													<li>
														<ul class="messages Shaddy" style="display: none;"></ul>

														<div class="buttons-set">
															<p class="required">* Thông tin bắt buộc</p>
															<p class="back-link"><a
																	href="customer/account/login/index.html"
																	id="node-uid-ajaxlogin-4"><small>&laquo;
																	</small>Quay lại trang đăng nhập</a></p>
															<button type="submit" class="button"
																title="Gửi đi"><span><span>Gửi đi</span></span></button>
														</div>

														<script type="text/javascript">
															Event.observe(
																window,
																'load',
																function () {
																	$('node-uid-ajaxlogin-4').observe(
																		'click',
																		function (event) {
																			AjaxLogin.Authorization.__getInstanceByChildnode(this).switchToFrame('login');
																			if (window.event) window.event.cancelBubble = true;
																			if (window.event) window.event.returnValue = false;
																			event.preventDefault();
																			event.stopPropagation();
																			return false;
																		}
																	);
																}
															);
														</script>
													</li>
												</ul>
											</form>
										</div>
									</div>
									<div class="Frame" style="display: none;">
										<div class="al-authorizationform-recovery">
											<form action="https://popeyes.vn/ajaxlogin/index/recoveryPost/"
												method="post" id="password-recovery-form">
												<ul class="form-list">
													<li>
														<div class="Title">
															<h2>Bạn muốn tìm lại mật khẩu?</h2>
														</div>
													</li>
													<li>
														<p class="TextMessage">Bạn nhập lại email đã đăng ký, hệ thống
															của chúng tôi sẽ tự động tạo mật khẩu và gửi qua email cho
															bạn.</p>
													</li>
													<li>
														<label for="email" class="required"><em>*</em>Địa chỉ
															email</label>
														<div class="input-box">
															<input type="text" name="email" value=""
																id="al_auth_rec_email"
																class="input-text required-entry validate-email"
																title="Địa chỉ email" />
														</div>
													</li>
													<li>
													</li>
													<li>
														<ul class="messages Shaddy" style="display: none;"></ul>

														<div class="buttons-set">
															<p class="required">* Thông tin bắt buộc</p>
															<p class="back-link"><a
																	href="customer/account/login/index.html"
																	id="node-uid-ajaxlogin-5"><small>&laquo;
																	</small>Quay lại trang đăng nhập</a></p>
															<button type="submit" title="Gửi đi"
																class="button"><span><span>Gửi đi</span></span></button>
														</div>

														<script type="text/javascript">
															Event.observe(
																window,
																'load',
																function () {
																	$('node-uid-ajaxlogin-5').observe(
																		'click',
																		function (event) {
																			AjaxLogin.Authorization.__getInstanceByChildnode(this).switchToFrame('login');
																			if (window.event) window.event.cancelBubble = true;
																			if (window.event) window.event.returnValue = false;
																			event.preventDefault();
																			event.stopPropagation();
																			return false;
																		}
																	);
																}
															);
														</script>
													</li>
												</ul>
											</form>
										</div>
									</div>
									<div class="Frame" style="display: none;">
										<div class="al-authorizationform-extra">
											<form action="https://popeyes.vn/ajaxlogin/index/loginWithNetwork/"
												method="post" id="network-login-form"></form>
											<form action="https://popeyes.vn/ajaxlogin/index/registerWithNetwork/"
												method="post" id="network-register-form">
												<ul class="form-list">
													<li>
														<div class="Title">
															<h2>Thông tin kỹ thuật</h2>
														</div>
													</li>
													<li>
														<ul class="messages Shaddy" style="display: none;"></ul>

														<div class="buttons-set">
															<p class="required">* Thông tin bắt buộc</p>
															<p class="back-link"><a
																	href="customer/account/login/index.html"
																	id="node-uid-ajaxlogin-6"><small>&laquo;
																	</small>Hủy</a></p>
															<button type="submit" class="button"
																title="Gửi đi"><span><span>Gửi đi</span></span></button>
														</div>

														<script type="text/javascript">
															Event.observe(
																window,
																'load',
																function () {
																	$('node-uid-ajaxlogin-6').observe(
																		'click',
																		function (event) {
																			AjaxLogin.Authorization.__getInstanceByChildnode(this).switchToFrame('login');

																			if (window.event) window.event.cancelBubble = true;
																			if (window.event) window.event.returnValue = false;
																			event.preventDefault();
																			event.stopPropagation();
																			return false;
																		}
																	);
																}
															);
														</script>
													</li>
												</ul>
											</form>
										</div>
									</div>
								</div>
								<div class="alProgressBar alPopup" style="display: none;">
									<div class="Shadow"></div>
									<div class="loading-mask">
										<p class="loader" id="loading_mask_loader"><img
												src="../assets/skin/frontend/base/default/ajaxlogin/ajax-loader-tr.gif"
												alt="Loading..." /><br />Please wait...</p>
									</div>
								</div>
							</div>

							<script type="text/javascript">
								var __authorization = new AjaxLogin.Authorization($('node-uid-ajaxlogin-3'));
								__authorization.addHandler(
									AjaxLogin.Authorization.EVENTTYPE_SERVERFAILURE,
									function (eventData) {
										this.setMessage('There is something wrong with the server. Please, try to login again a bit later.');
									}
								);
								__authorization.addHandler(
									AjaxLogin.Authorization.EVENTTYPE_JSONFAILURE,
									function (eventData) {
										this.setMessage('Bad response from server. Please, try to refresh the page.');
									}
								);
								__authorization.addHandler(
									[
										AjaxLogin.Authorization.EVENTTYPE_LOGINFAILURE,
										AjaxLogin.Authorization.EVENTTYPE_REGISTERFAILURE
									],
									function (eventData) {
										if (typeof eventData.errorMessage != 'undefined') {
											this.setMessage(eventData.errorMessage);
										}
									}
								);
								__authorization.addHandler(
									AjaxLogin.Authorization.EVENTTYPE_REGISTERSUCCESS,
									function (eventData) {
										if (typeof eventData.successMessage != 'undefined') {
											this.switchToFrame('login');
											//this.setMessage(eventData.successMessage, 1, 60);
										}
									}
								);
								__authorization.__resizeFrameObserver();
							</script>
						</div>
						<div class="Close"><a href="#" title="Close window">Đóng&nbsp;[X]</a></div>
					</div>
				</div>
			</div>

			<script type="text/javascript">
				Event.observe(
					window,
					'load',
					function () {
						var __overlapRootNode = $('node-uid-ajaxlogin-2');
						var __closeLinkNode = __overlapRootNode.select('.Close a')[0];
						var __shadowAreaNode = __overlapRootNode.select('.Shadow')[0];
						var __canvasAreaNode = __overlapRootNode.select('.Canvas')[0];

						/* Patching authorization instance */
						var __authorizationInstance = AjaxLogin.Authorization.__getInstanceByChildnode($('node-uid-ajaxlogin-3'));
						__authorizationInstance.__setProgressBar($$('.alProgressBar')[0]);
						__authorizationInstance.__showFrame = function (canvasNode) {
							return function (frame) {
								var __frameIndex = this.__getFrameIndex(frame);

								if (typeof __frameIndex == 'number') {
									var __frameRootNode = this.__frames[__frameIndex].rootNode;
									__frameRootNode.style.display = '';

									if (canvasNode) {
										var __frameHeight = __frameRootNode.getDimensions().height;
									}
								}

								return this;
							};
						}
							(__canvasAreaNode);
						__authorizationInstance.getFrame('register').registrationFormNode.observe(
							'submit',
							function (frame, canvasNode) {
								return function (event) {
									if ((frame) && (canvasNode)) {
										var __frameRootNode = frame.rootNode;
										var __frameHeight = __frameRootNode.getDimensions().height;
									}
								};
							}
								(__authorizationInstance.getFrame('register'), __canvasAreaNode)
						);

						__closeLinkNode.observe(
							'click',
							function (overlapRootNode, authorizationInstance) {
								return function (event) {
									overlapRootNode.style.display = 'none';
									authorizationInstance.switchToFrame(0);

									if (window.event) window.event.cancelBubble = true;
									if (window.event) window.event.returnValue = false;
									event.preventDefault();
									event.stopPropagation();
									return false;
								};
							}
								(__overlapRootNode, __authorizationInstance)
						);

						__shadowAreaNode.observe(
							'click',
							function (overlapRootNode) {
								return function (event) {
									overlapRootNode.style.display = 'none';
								};
							}
								(__overlapRootNode)
						);

						__canvasAreaNode.observe(
							'click',
							function (overlapRootNode) {
								return function (event) {
									if (event.target == this) {
										overlapRootNode.style.display = 'none';
									}
								};
							}
								(__overlapRootNode)
						);

						__authorizationInstance.addHandler(
							AjaxLogin.Authorization.EVENTTYPE_LOGINSUCCESS,
							function (eventData) {
								var __overlapNode = $('node-uid-ajaxlogin-2');
								__overlapNode.style.display = 'none';
							}
						);

						__authorizationInstance.addHandler(
							AjaxLogin.Authorization.EVENTTYPE_REGISTERSUCCESS,
							function (eventData) {
								if ((typeof eventData.loggedIn == 'undefined') || (eventData.loggedIn != 0)) {
									var __overlapNode = $('node-uid-ajaxlogin-2');
									__overlapNode.style.display = 'none';
								}
							}
						);

						__authorizationInstance.addHandler(
							AjaxLogin.Authorization.EVENTTYPE_REQUIREDENTRIES,
							function (eventData) {
								var __overlapNode = $('node-uid-ajaxlogin-2');
								__overlapNode.style.display = '';
							}
						);
					}
				);
			</script>
			<div id="fb-root"></div>
			<script>
				window.fbAsyncInit = function () {
					FB.init(
						{
							appId: '1720038794972151',
							version: 'v2.0',
							status: true,
							cookie: true,
							xfbml: true
						}
					);
				};

				(
					function (d) {
						var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
						if (d.getElementById(id)) {
							return;
						}
						js = d.createElement('script'); js.id = id; js.async = true;
						js.src = "../connect.facebook.net/en_US/sdk.js";
						ref.parentNode.insertBefore(js, ref);
					}
						(document)
				);


				__facebookDoAuth = function (accessToken, imageNode) {
					FB.api(
						'/me?fields=first_name,last_name,email',
						function (accessToken, imageNode) {
							return function (__facebookResponse) {
								var __overlapAuthorizationNode = $('node-uid-ajaxlogin-3');
								var __overlapAuthorizationInstance = AjaxLogin.Authorization.__getInstanceByChildnode(__overlapAuthorizationNode);

								__overlapAuthorizationInstance.getFrame('extra').login(
									{ network: 'facebook', accessToken: accessToken },
									function (facebookResponse) {
										return function (response) {
											if (typeof response == 'object') {
												if ((typeof response.notRegistered != 'undefined') && (response.notRegistered == 1)) {
													//var phone_nmber = prompt("Please enter your phone number", "0123456789");
													this.register(
														{
															network: 'facebook',
															accessToken: accessToken,
															email: facebookResponse.email,
															firstname: facebookResponse.first_name,
															lastname: facebookResponse.last_name,
															//phone_number: phone_nmber
														}
													);
												}
												if ((typeof response.errorMessage == 'string') && (response.errorMessage.length)) {
													__authorizationInstance = AjaxLogin.Authorization.__getInstanceByChildnode(imageNode);
													__authorizationInstance.setMessage(response.errorMessage);
												}
											}
										};
									}
										(__facebookResponse)
								);
							};
						}
							(accessToken, imageNode)
					);
				};
			</script>
			<script type="text/javascript">
				if (typeof AjaxLogin == 'undefined') {
					AjaxLogin = {};
				}

				AjaxLogin.OAUTH_ACTION_GETAUTHORIZATIONSTATUS = 'ajaxlogin/oauth/getAuthorizationStatus/index.html';
				AjaxLogin.OAUTH_ACTION_CHECKAUTHORIZATIONSTATUS = 'ajaxlogin/oauth/checkAuthorizationStatus/index.html';

				if (typeof AjaxLogin.Google == 'undefined') {
					AjaxLogin.Google = {};
				}

				AjaxLogin.Google.auth = function (authorizationInstance) {
					window.__authWindow = open(
						AjaxLogin.OAUTH_ACTION_CHECKAUTHORIZATIONSTATUS + '?network=google',
						'googleAuth',
						'width=500,height=420,toolbar=no,scrollbars=yes'
					);

					window.__authWindowInterval = setInterval(
						function () {
							if ((typeof window.__authWindow != 'undefined') && (window.__authWindow.closed)) {
								clearInterval(window.__authWindowInterval);
								AjaxLogin.Google.getStatus();
							}
						},
						50
					);
				};

				AjaxLogin.Google.getStatus = function (noTokenCallback, authorizationInstance) {
					if (typeof authorizationInstance != 'undefined') {
						authorizationInstance.__scheduleProgressBar();
					}

					new Ajax.Request(
						AjaxLogin.OAUTH_ACTION_GETAUTHORIZATIONSTATUS,
						{
							method: 'get',
							parameters: { network: 'google' },
							onSuccess: function (transport) {
								try { eval('var __response = ' + transport.responseText + ';'); }
								catch (__E) { __response = {}; }

								if (typeof __response.access_token_accepted != 'undefined') {
									if (typeof __response.account_data != 'undefined') {
										AjaxLogin.Google.login(__response.account_data);
									}
								}
								else {
									if (typeof noTokenCallback == 'function') {
										noTokenCallback(__response);
									}
								}

								if (typeof authorizationInstance != 'undefined') {
									authorizationInstance.__hideProgressBar();
								}
							},
							onFailure: function () {
								if (typeof authorizationInstance != 'undefined') {
									authorizationInstance.__hideProgressBar();
								}
							}
						}
					);
				};

				AjaxLogin.Google.login = function (googleResponse) {
					var __overlapAuthorizationNode = $('node-uid-ajaxlogin-3');
					var __overlapAuthorizationInstance = AjaxLogin.Authorization.__getInstanceByChildnode(__overlapAuthorizationNode);

					__overlapAuthorizationInstance.getFrame('extra').login(
						{ network: 'google' },
						function (googleResponse) {
							return function (response) {
								if (typeof response == 'object') {
									if ((typeof response.notRegistered != 'undefined') && (response.notRegistered == 1)) {
										this.register(
											{
												network: 'google',
												id: typeof googleResponse.id != 'undefined' ? googleResponse.id : '',
												email: typeof googleResponse.email != 'undefined' ? googleResponse.email : '',
												firstname: typeof googleResponse.given_name != 'undefined' ? googleResponse.given_name : '',
												lastname: typeof googleResponse.family_name != 'undefined' ? googleResponse.family_name : ''
											}
										);
									}
									if ((typeof response.errorMessage == 'string') && (response.errorMessage.length)) {
										__authorizationInstance = AjaxLogin.Authorization.__getInstanceByChildnode(imageNode);
										__authorizationInstance.setMessage(response.errorMessage);
									}
								}
							};
						}
							(googleResponse)
					);
				};
			</script>


			<div class="alAgreementPopup alPopup" style="display: none;">
				<div class="Shadow"></div>
				<div class="Canvas">
					<div class="Title">
						<h2></h2>
					</div>
					<div class="Content"></div>
					<div class="Toolbar">
						<div class="buttons-set">
							<a class="alCloseButton" href="#">Đóng</a>
							<button title="Create an Account" class="alAcceptButton button"
								type="button"><span><span>Accept</span></span></button>
						</div>
					</div>
				</div>
			</div>

			<script type="text/javascript">
				$$('.alAgreementPopup .Shadow')[0].observe(
					'click',
					function (event) {
						var __agreementPopupNode = this.parentNode;
						__agreementPopupNode.style.display = 'none';

						return AjaxLogin.cancelPrototypeEvent(event);
					}
				);

				$$('.alAgreementPopup .alCloseButton')[0].observe(
					'click',
					function (event) {
						var __agreementPopupNode = this.parentNode.parentNode.parentNode.parentNode;
						__agreementPopupNode.style.display = 'none';

						return AjaxLogin.cancelPrototypeEvent(event);
					}
				);

				$$('.alAgreementPopup .alAcceptButton')[0].observe(
					'click',
					function (event) {
						var __agreementPopupNode = this.parentNode.parentNode.parentNode.parentNode;
						__agreementPopupNode.style.display = 'none';

						if (this.__agreementCheckbox) {
							this.__agreementCheckbox.checked = 'checked';
						}

						return AjaxLogin.cancelPrototypeEvent(event);
					}
				);
			</script>

			<div id="aw-afptc-popup" class="block aw-afptc-popup" style='display:none'></div>
			<div id="aw-afptc-overlay" style="display:none"></div>
			<script type="text/javascript">
				var freeProductsCheckFlag = false;
				var selectAllfreeProducts = function (txt) {
					if (freeProductsCheckFlag == false) {
						$$('.free-product-checkbox').each(function (elem) {
							elem.checked = true;
						});
						freeProductsCheckFlag = true;
						txt.innerHTML = "b\u1ecf ch\u1ecdn t\u1ea5t c\u1ea3";
					} else {
						$$('.free-product-checkbox').each(function (elem) {
							elem.checked = false;
						});
						freeProductsCheckFlag = false;
						txt.innerHTML = "ch\u1ecdn t\u1ea5t c\u1ea3";
					}
				}

				var initForm = function () {
					var freeProductToCartForm = new VarienForm('free-product-form');
					freeProductToCartForm.submit = function () {
						if (this.validator.validate()) {
							this.form.submit();
						}
					}.bind(freeProductToCartForm);
					return freeProductToCartForm;
				}
			</script>
			<script type="text/javascript">
				if (typeof AjaxLogin == 'undefined') {
					AjaxLogin = {};
				}

				AjaxLogin.BASE_URL_UNSECURE = 'index.html';
				AjaxLogin.BASE_URL_SECURE = 'index.html';

				AjaxLogin.BASE_URL = AjaxLogin.BASE_URL_UNSECURE;
				AjaxLogin.TOPLINKS_SELECTION = '#header-account .links a';

				/**
				 * 
				 */
				AjaxLogin.sameRoutines = function (urlA, urlB) {
					if (typeof urlA != 'string') urlA = urlA.toString();
					if (typeof urlB != 'string') urlB = urlB.toString();

					if (urlA.indexOf(AjaxLogin.BASE_URL_UNSECURE) > -1) {
						__routineA_Parts = urlA.split(AjaxLogin.BASE_URL_UNSECURE).join('').split('index.html').splice(0, 3);
					}
					else if (urlA.indexOf(AjaxLogin.BASE_URL_SECURE) > -1) {
						__routineA_Parts = urlA.split(AjaxLogin.BASE_URL_SECURE).join('').split('index.html').splice(0, 3);
					}
					else {
						return false;
					}

					if (urlB.indexOf(AjaxLogin.BASE_URL_UNSECURE) > -1) {
						__routineB_Parts = urlB.split(AjaxLogin.BASE_URL_UNSECURE).join('').split('index.html').splice(0, 3);
					}
					else if (urlB.indexOf(AjaxLogin.BASE_URL_SECURE) > -1) {
						__routineB_Parts = urlB.split(AjaxLogin.BASE_URL_SECURE).join('').split('index.html').splice(0, 3);
					}
					else {
						return false;
					}

					for (var __index = 0; __index < 3; __index++) {
						if ((typeof __routineA_Parts[__index] == 'undefined') || (!__routineA_Parts[__index])) {
							__routineA_Parts[__index] = 'index';
						}
						if ((typeof __routineB_Parts[__index] == 'undefined') || (!__routineB_Parts[__index])) {
							__routineB_Parts[__index] = 'index';
						}
					}

					__routineA = __routineA_Parts.join('index.html');
					__routineB = __routineB_Parts.join('index.html');

					return __routineA == __routineB ? true : false;
				};

				AjaxLogin.prepareTopLinks = function () {
					$$(AjaxLogin.TOPLINKS_SELECTION).each(
						function (node) {
							if (AjaxLogin.sameRoutines(node.href, 'customer/account/login/index.html')) {
								Event.observe(
									node,
									'click',
									function (event) {
										var __overlapRootNode = $$('.al-authorization-container-overlap')[0];
										__overlapRootNode.style.display = '';
										var __overlapAuthorizationNode = $$('.al-authorization-container-overlap .al-authorization')[0];
										var __overlapAuthorizationInstance = AjaxLogin.Authorization.__getInstanceByChildnode(__overlapAuthorizationNode);
										__overlapAuthorizationInstance.switchToFrame('login');

										if (window.event) window.event.cancelBubble = true;
										if (window.event) window.event.returnValue = false;
										event.preventDefault();
										event.stopPropagation();

										return false;
									}
								);
							}
							if (AjaxLogin.sameRoutines(node.href, 'customer/account/logout/index.html')) {
								Event.observe(
									node,
									'click',
									function (event) {
										var __overlapAuthorizationNode = $$('.al-authorization-container-overlap .al-authorization')[0];
										var __overlapAuthorizationInstance = AjaxLogin.Authorization.__getInstanceByChildnode(__overlapAuthorizationNode);
										__overlapAuthorizationInstance.getFrame('login').logout();

										if (window.event) window.event.cancelBubble = true;
										if (window.event) window.event.returnValue = false;
										event.preventDefault();
										event.stopPropagation();
										return false;
									}
								);
							}
							if (AjaxLogin.sameRoutines(node.href, 'customer/account/create/index.html')) {
								Event.observe(
									node,
									'click',
									function (event) {
										var __overlapRootNode = $$('.al-authorization-container-overlap')[0];
										__overlapRootNode.style.display = '';
										var __overlapAuthorizationNode = $$('.al-authorization-container-overlap .al-authorization')[0];
										var __overlapAuthorizationInstance = AjaxLogin.Authorization.__getInstanceByChildnode(__overlapAuthorizationNode);
										__overlapAuthorizationInstance.switchToFrame('register');

										if (window.event) window.event.cancelBubble = true;
										if (window.event) window.event.returnValue = false;
										event.preventDefault();
										event.stopPropagation();
										return false;
									}
								);
							}
						}
					);
				}

				//AjaxLogin.prepareTopLinks();

				/**
				 * 
				 */
				if (typeof window.mainNav == 'function') {
					mainNav("nav", { "show_delay": "100", "hide_delay": "100" });
				}


				/**
				 * 
				 */
				Event.observe(
					window,
					'load',
					function () {
						if (typeof window.customer_dob != 'undefined') {
							delete window.customer_dob;

							var __rootNode = $$('.customer-dob')[0];
							new Varien.DateElement(
								'container',
								{
									month: Element.select(__rootNode, '.dob-month input')[0],
									day: Element.select(__rootNode, '.dob-day input')[0],
									year: Element.select(__rootNode, '.dob-year input')[0],
									full: Element.select(__rootNode, '.dob-full input')[0],
									advice: Element.select(__rootNode, '.validation-advice')[0]
								},
								true,
								AjaxLogin.DATE_FORMAT
							);
						}
					}
				);
			</script>
		</div>
	</div>
</body>

<!-- Mirrored from popeyes.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jun 2020 02:55:54 GMT -->

</html>
<div class="main-container col1-layout">
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
                    <a href="../mon-moi.html" title="">Món Mới</a>
                    <span>/ </span>
                </li>
                <li class="product">
                    <strong>Combo Gà Cháy Tỏi - 1 người</strong>
                </li>
            </ul>
        </div>
        <div class="col-main">



            <div style="clear: both;"></div>
            <div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <script type="text/javascript">
                            var optionsPrice = new Product.OptionsPrice({ "priceFormat": { "pattern": "%s\u00a0\u20ab", "precision": 2, "requiredPrecision": 2, "decimalSymbol": ",", "groupSymbol": ".", "groupLength": 3, "integerRequired": 1 }, "includeTax": "false", "showIncludeTax": false, "showBothPrices": false, "idSuffix": "_clone", "oldPlusDisposition": 0, "plusDisposition": 0, "plusDispositionTax": 0, "oldMinusDisposition": 0, "minusDisposition": 0, "productId": "211", "productPrice": 94000, "productOldPrice": 94000, "priceInclTax": 94000, "priceExclTax": 94000, "skipCalculate": 1, "defaultTax": 0, "currentTax": 0, "tierPrices": [], "tierPricesInclTax": [], "swatchPrices": null });
                        </script>
                        <div class="product-view">
                            <div class="product-essential">


                                <div id="header-cart" class="block block-cart skip-content" style="display: block;">
                                    <div class="loading-popup">
                                        <img src="https://popeyes.vn/skin/frontend/rwd/popeyes/images/Pacman.gif"
                                            alt="Đang xử lý dữ liệu để qua bước sau..."
                                            title="Đang xử lý dữ liệu để qua bước sau..." class="v-middle">
                                    </div>
                                    <div class="block-subtitle clearfix">
                                        <h3>Phần ăn bạn đã chọn</h3>
                                        <a id="popup-cart-close" onclick="openPopup()" href="#" title="Đóng">×</a>
                                    </div>
                                    <div class="minicart-wrapper">
                                        <div id="minicart-error-message" class="minicart-message"></div>
                                        <div id="minicart-success-message" class="minicart-message">Sản phẩm đã được cập
                                            nhật thành công.</div>
                                        <div>
                                            <ul id="cart-sidebar" class="mini-products-list">
                                                <li class="item last odd" xmlns="http://www.w3.org/1999/html">
                                                    <table>
                                                        <tbody>
                                                            <tr class="product-table-head-0">
                                                                <th class="col-md-4">Tên sản phẩm</th>
                                                                <th class="col-md-4">Giá</th>
                                                                <th class="col-md-2">Số lượng</th>
                                                                <th class="col-md-2">Thay đổi</th>
                                                            </tr>
                                                            <?php

                                                                var_dump ($_SESSION['san_phams']);
                                                                $san_phams = $_SESSION['san_phams'];
                                                                $idx = 1;
                                                                foreach ($san_phams as $row) { $idx++; ?>

                                                            <tr>
                                                                <td>
                                                                    <div class="col-md-12">
                                                                        <a class="product-image col-md-4">
                                                                            <img src="<?php echo $row['anh'] ?>"
                                                                                alt="<?php echo $row['ten_san_pham'] ?>">
                                                                            </a>
                                                                        <div class="col-md-8 clearfix">
                                                                            <p class="product-name"><a><?php echo $row['ten_san_pham'] ?></a></p>
                                                                            <a id="view-des" href="#"
                                                                                data-collapse="#shortdesciption"
                                                                                title="Sửa thông tin" class="btn-edit">
                                                                                Xem chi tiết <i
                                                                                    class="btn-arrow-down active">
                                                                                    ↓</i><i class="btn-arrow-up"> ↑</i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div id="shortdesciption" style="display: none"
                                                                        class="product-des">
                                                                        <dl class="item-options">
                                                                            <?php echo $row['mo_ta'] ?>
                                                                        </dl>
                                                                    </div>
                                                                </td>
                                                                <td class="product-price-table">
                                                                    <span class="price"><?php echo number_format($row['don_gia']) ?>₫</span>

                                                                </td>
                                                                <td class="product-qty-table">
                                                                    <div class="col-md-12 clearfix">
                                                                        <input type="number" min="1"
                                                                            class="cart-item-quantity input-text text-center" style="margin-left: 30px;"
                                                                            name="" value="2" onkeypress="return false">
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="features-product-table features-product-table-remove">
                                                                    <div class="col-md-5">
                                                                        <a href="?tp=delete_item_in_cart" title="Xoá sản phẩm này">
                                                                            <p class="icon-trash">#</p>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                               <?php }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </li>
                                            </ul>
                                        </div>
                                        <script type="text/javascript">
                                            truncateOptions();
                                            decorateList('cart-sidebar', 'none-recursive');
                                            $j('document').ready(function () {
                                                var minicartOptions = {
                                                    formKey: "13eLOWHBmHU1HrzK"
                                                }
                                                var Mini = new Minicart(minicartOptions);
                                                Mini.init();
                                            });
                                        </script>

                                        <div id="minicart-widgets">
                                        </div>


                                        <div class="block-content wrapper-display-total">
                                            <div class="col-md-12">
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-6">
                                                    <p class="grand-total text-align-right">
                                                        <span class="label">Tổng cộng:</span>
                                                    </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="grand-total text-align-left">
                                                        <span class="price">188.000&nbsp;₫</span> </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="minicart-note-wrap">
                                            <h4 class="minicart-note">Chú ý:</h4>
                                            <p class="minicart-note minicart-note-content">- Áp dụng nước chai khi giao
                                                hàng tận nơi</p>
                                            <p class="minicart-note minicart-note-content">- Chỉ giao hàng cho phần ăn
                                                trên 100.000₫</p>
                                        </div>
                                        <div class="minicart-actions">
                                            <ul class="checkout-types minicart">
                                                <li>
                                                    <a title="Tiếp tục mua" class="button btn-continue-shopping "
                                                        href="https://popeyes.vn/products/">
                                                        Tiếp tục mua </a>
                                                    <a title="Thanh toán" onclick="checkDeliveryTime(event)"
                                                        class="button checkout-button"
                                                        href="https://popeyes.vn/onestepcheckout/">
                                                        Thanh toán </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="minicart-related-product">
                                        </div>
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
                                            var subtotal = 188000;
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

                                            var GrandTotal = parseInt(188000);
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


                                <script type="text/javascript">
                                    //<![CDATA[
                                    var productAddToCartForm = new VarienForm('product_addtocart_form');
                                    productAddToCartForm.submit = function (button, url) {
                                        if (this.validator.validate()) {
                                            var form = this.form;
                                            var oldUrl = form.action;

                                            if (url) {
                                                form.action = url;
                                            }
                                            var e = null;
                                            try {
                                                this.form.submit();
                                            } catch (e) {
                                            }
                                            this.form.action = oldUrl;
                                            if (e) {
                                                throw e;
                                            }

                                            if (button && button != 'undefined') {
                                                button.disabled = true;
                                            }
                                        }
                                    }.bind(productAddToCartForm);

                                    productAddToCartForm.submitLight = function (button, url) {
                                        if (this.validator) {
                                            var nv = Validation.methods;
                                            delete Validation.methods['required-entry'];
                                            delete Validation.methods['validate-one-required'];
                                            delete Validation.methods['validate-one-required-by-name'];
                                            // Remove custom datetime validators
                                            for (var methodName in Validation.methods) {
                                                if (methodName.match(/^validate-datetime-.*/i)) {
                                                    delete Validation.methods[methodName];
                                                }
                                            }

                                            if (this.validator.validate()) {
                                                if (url) {
                                                    this.form.action = url;
                                                }
                                                this.form.submit();
                                            }
                                            Object.extend(Validation.methods, nv);
                                        }
                                    }.bind(productAddToCartForm);
                        //]]>
                                </script>
                            </div>

                            <div class="product-collateral toggle-content tabs">
                                <dl id="collateral-tabs" class="collateral-tabs">
                                    <dt class="tab">
                                        <span>Mô tả</span>
                                    </dt>
                                    <dd class="tab-container">
                                        <div class="tab-content">
                                            <h2>Chi tiết</h2>
                                            <div class="std">
                                                2 Gà Cháy Tỏi
                                                1 Món ăn kèm (vừa)
                                                1 Bánh Nướng Mật Ong
                                                1 Coca 390ml </div>
                                        </div>
                                    </dd>
                                </dl>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <script>
                jQuery(document).ready(function () {
                    jQuery('.simple-product-title .arrow').on('click', function () {
                        var get_content = jQuery(this).attr('data-collapse');
                        if (get_content.length > 0) {
                            jQuery(get_content).slideToggle(500);
                        }
                    });
                });
            </script>
            <script type="text/javascript">
                var lifetime = 3600;
                var expireAt = Mage.Cookies.expires;
                if (lifetime > 0) {
                    expireAt = new Date();
                    expireAt.setTime(expireAt.getTime() + lifetime * 1000);
                }
                Mage.Cookies.set('external_no_cache', 1, expireAt);
            </script>
        </div>
    </div>
</div>
<?php 
        $id = $_GET['id'];
        $select_product = "select * from product where id = '$id'";
        $productDetail = executeResult($select_product,1);
    ?>
    
    <section class="bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="list-inline">
                        <ul>
                            <li>
                                <i class="fa-solid fa-house"></i>
                                <a href="index.php">
                                    <span>Trang chủ</span>
                                </a>
                            </li>
                            <li>
                                <i class="fa-solid fa-angle-right"></i>
                            </li>
                            <li>
                                <span>Sản phẩm</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-angle-right"></i>
                            </li>
                            <li>
                                <span><?php echo $productDetail['product_name']?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="detail_Product">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="detail_image">
                        <img src="img/product/<?php echo $productDetail['thumbnail']?>" width="100%" alt="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="detail_info">
                        <h1 class="title_detail_info"><?php echo $productDetail['product_name']?></h1>
                        <div class="brand_detail_info">
                            <span><b>Danh muc: </b></span>
                            PRIMITIVE
                        </div>
                        <div class="price_detail_info">
                            <div class="special-price">
                                <span><?php echo $productDetail['price']?></span>
                            </div>
                        </div>
                        <div class="custom custom-btn-number f-left">																			
                            <span class="qtyminus" data-field="quantity"><i class="fa fa-caret-left"></i></span>
                            <input type="text" class="qty" data-field="quantity" title="Só lượng" value="1" maxlength="12" id="qty" name="quantity">									
                            <span class="qtyplus" data-field="quantity">
                                <i class="fa fa-caret-right"></i>
                            </span>										
                        </div>
                        <button type="submit" class="btn" title="Cho vào giỏ hàng">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mo-ta">
                        <ul class="text-mo-ta">
                            <li>
                                <h3>
                                    <span>Mô tả</span>
                                </h3>
                            </li>
                        </ul>
                        <div class="box-mo-ta">
                            <div class="chi-tiet-mo-ta">
                                <?php echo $productDetail['description']?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
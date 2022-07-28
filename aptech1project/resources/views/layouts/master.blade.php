<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKATESHOP Project</title>

    <!-- Styles  -->
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">
    @yield('css')

    <!-- Fonts  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

</head>
<!-- Header  -->
<!-- style="position: fixed; top:0px;left:0px;right:0px;z-index:1px; background: #fff !important;" -->
<header >
    <div class="container">
        <div class="header-main">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="" class="logo-wrapper">
                            <img src="{{ asset('image/header/logo.webp') }}" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="in-col-md-9">
                        <div class="pull-left">
                            <div class="header-search">
                                <div class="icon-search">

                                </div>
                                <form class="input-group search-bar" method="get" role="search">
                                    <input type="search" name="query" value="" placeholder="Tìm kiếm... " class="input-group-field st-default-search-input search-text" autocomplete="off">
                                    <span class="input-group-btn">
                                            <button class="btn icon-fallback-text">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </button>
                                        </span>
                                </form>
                            </div>
                        </div>
                        <div class="header-block-item">
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="info">
                                <strong>Địa chỉ</strong>
                                <p>
                                    <a href="">Xem bản đồ</a>
                                </p>
                            </div>
                        </div>
                        <div class="header-block-item">
                            <div class="icon">
                                <i class="fa-solid fa-headset"></i>
                            </div>
                            <div class="info">
                                <strong>Hỗ trợ</strong>
                                <p>
                                    <a href="">0972848828</a>
                                </p>
                            </div>
                        </div>
                        <div class="header-block-item">
                            <div class="icon">
                                <i class="fa-solid fa-user-astronaut"></i>
                            </div>
                            <div class="info fix-width-text">
                                <strong>Tài khoản</strong>
                                <p>
                                    <a href="">Đăng nhập</a>/<a href="">Đăng ký</a>
                                </p>
                            </div>
                        </div>
                        <div class="header-block-item mini-cart">
                            <a href="" class="cart-label header-icon">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <div class="cart-info">
                                    <span style="line-height: 1;color: #555;display: block;font-weight: 600;font-size: 16px;">Giỏ hàng</span> (
                                    <span class="cartCount count_item_pr">0</span>) Sản phẩm
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="static">
        <nav>
            <div class="container">
                <ul class="nav flex-jus-center">
                    <li class="nav-item nav-text-before">
                        <a href="nav-link">HOME</a>
                    </li>
                    <li class="nav-item nav-text-before has-mega">
                        <a href="nav-link">SKATEBOARDS
                                <i class="fa-solid fa-angle-down"></i>
                            </a>
                        <div class="mega-content">
                            <div class="l0-w2">
                                <div class="nav-block nav-block-center">
                                    <ul class="l0">
                                        <li class="l1 parent item">
                                            <h2 class="h4">
                                                <a href="">
                                                    <span>SKATE</span>
                                                </a>
                                            </h2>
                                            <ul class="l1">
                                                <li class="l2">
                                                    <a href="">
                                                        <span>Deck</span>
                                                    </a>
                                                </li>
                                                <li class="l2">
                                                    <a href="">
                                                        <span>Trucks</span>
                                                    </a>
                                                </li>
                                                <li class="l2">
                                                    <a href="">
                                                        <span>Wheels</span>
                                                    </a>
                                                </li>
                                                <li class="l2">
                                                    <a href="">
                                                        <span>Bearings</span>
                                                    </a>
                                                </li>
                                                <li class="l2">
                                                    <a href="">
                                                        <span>Grip Tape</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="l1 parent item">
                                            <h2 class="h4">
                                                <a href="">
                                                    <span>SKATE PARTS</span>
                                                </a>
                                            </h2>
                                            <ul class="l1">
                                                <li class="l2">
                                                    <a href="">
                                                        <span>Hardware & Trucks Accessories</span>
                                                    </a>
                                                </li>
                                                <li class="l2">
                                                    <a href="">
                                                        <span>Tools</span>
                                                    </a>
                                                </li>
                                                <li class="l2">
                                                    <a href="">
                                                        <span>Bushings & Pivots & Riser Pads</span>
                                                    </a>
                                                </li>
                                                <li class="l2">
                                                    <a href="">
                                                        <span>Wax</span>
                                                    </a>
                                                </li>
                                                <li class="l2">
                                                    <a href="">
                                                        <span>Fingerboards & Toys</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="l1 parent item">
                                            <h2 class="h4">
                                                <a href="">
                                                    <span>PROTECTIVE GEAR</span>
                                                </a>
                                            </h2>
                                            <ul class="l1">
                                                <li class="l2">
                                                    <a href="">
                                                        <span>Helmets</span>
                                                    </a>
                                                </li>
                                                <li class="l2">
                                                    <a href="">
                                                        <span>Pads</span>
                                                    </a>
                                                </li>
                                                <li class="l2">
                                                    <a href="">
                                                        <span>Gloves</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="l1 parent item">
                                            <h2 class="h4">
                                                <a href="">
                                                    <span>COMPLETES</span>
                                                </a>
                                            </h2>
                                            <ul class="l1">
                                                <li class="l2">
                                                    <a href="">
                                                        <span>Skateboard Completes</span>
                                                    </a>
                                                </li>
                                                <li class="l2">
                                                    <a href="">
                                                        <span>Cruiser Completes</span>
                                                    </a>
                                                </li>
                                                <li class="l2">
                                                    <a href="">
                                                        <span>Longboard Completes</span>
                                                    </a>
                                                </li>
                                                <li class="l2">
                                                    <a href="">
                                                        <span>Bearings</span>
                                                    </a>
                                                </li>
                                                <li class="l2">
                                                    <a href="">
                                                        <span>Penny Skateboards</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item nav-text-before has-mega">
                        <a href="nav-link">CLOTHING
                                <i class="fa-solid fa-angle-down"></i>
                            </a>

                    </li>
                    <li class="nav-item nav-text-before has-mega">
                        <a href="nav-link">ACCESSORIES
                                <i class="fa-solid fa-angle-down"></i>
                            </a>
                    </li>
                    <li class="nav-item nav-text-before has-mega">
                        <a href="nav-link">BLOG
                                <i class="fa-solid fa-angle-down"></i>
                            </a>
                    </li>
                    <li class="nav-item nav-text-before has-mega">
                        <a href="nav-link">CUSTOMER SERVICES
                                <i class="fa-solid fa-angle-down"></i>
                            </a>
                    </li>
                    <li class="nav-item">
                        <a href="nav-link">SALE</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- Main content  -->
<main style="z-index: 0.5;">
    @yield('content')
</main>
<!-- Footer  -->
<footer>
    <div class="site-footer">
        <div class="container">
            <div class="footer-inner">
                <div class="row">
                    <div class="col-4">
                        <div class="footer-widget">
                            <a href="" class="logo-wrapper">
                                <img src="css/img/footer/logo-footer.webp" alt="">
                            </a>
                            <div class="text-donate-footer" style="margin-top: 15px">
                                <p>
                                    <span>
                                                Nhờ sự ủng hộ mạnh mẽ từ những
                                                người có cùng đam mê khắp nơi trên
                                                cả nước, chúng tôi tự hào là một
                                                trong những Skateshops chuyên
                                                nghiệp nhất Việt Nam ở thời điểm hiện tại.
                                            </span>
                                </p>
                            </div>
                            <h3>
                                <span>Theo dõi</span>
                            </h3>
                            <ul class="inline-list social-icons">
                                <li>
                                    <a href="" class="icon-fallback-text">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="icon-fallback-text">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="icon-fallback-text">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="icon-fallback-text">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="footer-widget">
                            <h3>
                                <span>Fanpage</span>
                            </h3>
                            <div class="fanpage-fb">
                                <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/saigonskateshop" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=252271411871880&amp;container_width=370&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fsaigonskateshop&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false">
                                    <span style="vertical-align: bottom; width: 340px; height: 130px;">
                                                <iframe name="f168e452b5525f8" width="1000px" height="1000px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v3.2/plugins/page.php?adapt_container_width=true&amp;app_id=252271411871880&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df2283f58af29868%26domain%3Dsaigonskateshop.net%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fsaigonskateshop.net%252Ff21a723c6632bdc%26relation%3Dparent.parent&amp;container_width=370&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fsaigonskateshop&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false" style="border: none; visibility: visible; width: 340px; height: 130px;" class="">
                                                </iframe>
                                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="footer-widget">
                            <h3>
                                <span>Địa chỉ cửa hàng</span>
                            </h3>
                            <h4 style="margin-top:22px;">Địa chỉ</h4>
                            <p>221 Đề Thám, Phường Phạm Ngũ Lão, Quận 1, TP. HCM</p>
                            <h4 style="margin-top:22px;">Hỗ trợ & tư vấn</h4>
                            <p><a href="">0909063600</a></p>
                            <h4>Email</h4>
                            <p><a href="">saigonskateshop@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-6" style="text-align:left;">
                        <span>© Bản quyền thuộc về <b>SAIGON SKATESHOP</b> <span class="fot-line">|</span> Cung cấp bởi <a href="" title="Sapo" rel="nofollow" target="_blank">Sapo</a></span>
                    </div>
                    <div class="col-6" style="text-align:right;">
                        <div class="back-to-header show end">Lên đầu trang
                            <i class="fa-solid fa-circle-arrow-up"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts  -->
</body>

</html>

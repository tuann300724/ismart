<!DOCTYPE html>
<html>
    <head>
        <title>ISMART STORE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href={{asset("css/bootstrap/bootstrap-theme.min.css")}} rel="stylesheet" type="text/css"/>
        <link href={{asset("css/bootstrap/bootstrap.min.css")}} rel="stylesheet" type="text/css"/>
        <link href={{asset("reset.css")}} rel="stylesheet" type="text/css"/>
        <link href={{asset("css/carousel/owl.carousel.css")}} rel="stylesheet" type="text/css"/>
        <link href={{asset("css/carousel/owl.theme.css")}} rel="stylesheet" type="text/css"/>
        <link href={{asset("css/font-awesome/css/font-awesome.min.css")}} rel="stylesheet" type="text/css"/>
        <link href={{asset("style.css")}} rel="stylesheet" type="text/css"/>
        <link href={{asset("responsive.css")}} rel="stylesheet" type="text/css"/>
        <script src={{asset("js/jquery-2.2.4.min.js")}} type="text/javascript"></script>
        <script src={{asset("js/elevatezoom-master/jquery.elevatezoom.js")}} type="text/javascript"></script>
        <script src={{asset("js/bootstrap/bootstrap.min.js")}} type="text/javascript"></script>
        <script src={{asset("js/carousel/owl.carousel.js")}} type="text/javascript"></script>
        <script src={{asset("js/main.js")}} type="text/javascript"></script>
        <title>@yield('title', 'ISMART STORE')</title>
    </head>
    <body>
        <div id="site">
            <div id="container">
                <div id="header-wp">
                    <div id="head-top" class="clearfix">
                        <div class="wp-inner">
                            <a href="" title="" id="payment-link" class="fl-left">Hình thức thanh toán</a>
                            <div id="main-menu-wp" class="fl-right">
                                <ul id="main-menu" class="clearfix">
                                    <li>
                                        <a href={{route('home.home')}} title="">Trang chủ</a>
                                    </li>
                                    <li>
                                        <a href={{route('home.cp')}} title="">Sản phẩm</a>
                                    </li>
                                    <li>
                                        <a href={{route('home.blog')}} title="">Blog</a>
                                    </li>
                                    <li>
                                        <a href={{route('home.db')}} title="">Giới thiệu</a>
                                    </li>
                                    <li>
                                        <a href={{route('home.contract')}} title="">Liên hệ</a>
                                    </li>
                                    <li>
                                        <a href={{route('Login.lg')}} title="">Đăng nhập</a>
                                    </li>
                                    <li>
                                        @if (session("userInfo"))
                                        <span class="text-success" > Welcome: {{session("userInfo")["name"]}}</span>
                                        <a class = "btn btn-warning" href="{{route("logout")}}">logout</a>
                                        @endif
                                    </li>
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="head-body" class="clearfix">
                        <div class="wp-inner">
                            <a href={{route('home.home')}}  title="" id="logosmartgear" class="fl-left"><img src={{asset("images/logosmartgear.png")}} ></a>
                            <div id="search-wp" class="fl-left">
                                <form method="POST" action="">
                                    <input type="text" name="s" id="s" placeholder="Nhập từ khóa tìm kiếm tại đây!">
                                    <button type="submit" id="sm-s">Tìm kiếm</button>
                                </form>
                            </div>
                            <div id="action-wp" class="fl-right">
                                <div id="advisory-wp" class="fl-left">
                                    <span class="title">Tư vấn</span>
                                    <span class="phone">0987.654.321</span>
                                </div>
                                <div id="btn-respon" class="fl-right"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                <a href={{route('home.cart')}} title="giỏ hàng" id="cart-respon-wp" class="fl-right">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span id="num">2</span>
                                </a>
                                <div id="cart-wp" class="fl-right">
                                    <div id="btn-cart">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        <span id="num">2</span>
                                    </div>
                                    <div id="dropdown">
                                        <p class="desc">Có <span>2 sản phẩm</span> trong giỏ hàng</p>
                                        <ul class="list-cart">
                                            <li class="clearfix">
                                                <a href="" title="" class="thumb fl-left">
                                                    <img src={{asset("/images/img-pro-11.png")}} alt="">
                                                </a>
                                                <div class="info fl-right">
                                                    <a href="" title="" class="product-name">Sony Express X6</a>
                                                    <p class="price">6.250.000đ</p>
                                                    <p class="qty">Số lượng: <span>1</span></p>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <a href="" title="" class="thumb fl-left">
                                                    <img src={{asset("/images/img-pro-23.png")}} alt="">
                                                </a>
                                                <div class="info fl-right">
                                                    <a href="" title="" class="product-name">Laptop Lenovo 10</a>
                                                    <p class="price">16.250.000đ</p>
                                                    <p class="qty">Số lượng: <span>1</span></p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="total-price clearfix">
                                            <p class="title fl-left">Tổng:</p>
                                            <p class="price fl-right">18.500.000đ</p>
                                        </div>
                                        <div class="action-cart clearfix">
                                            <a href={{route('home.cart')}} title="Giỏ hàng" class="view-cart fl-left">Giỏ hàng</a>
                                            <a href={{route('home.checkout')}} title="Thanh toán" class="checkout fl-right">Thanh toán</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container">
                    @yield('content')
                </div>


                <div id="footer-wp">
                    <div id="foot-body">
                        <div class="wp-inner clearfix">
                            <div class="block" id="info-company">
                                <h3 class="title">ISMART</h3>
                                <p class="desc">ISMART luôn cung cấp luôn là sản phẩm chính hãng có thông tin rõ ràng, chính sách ưu đãi cực lớn cho khách hàng có thẻ thành viên.</p>
                                <div id="payment">
                                    <div class="thumb">
                                        <img src={{asset("images/img-foot.png")}} alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="block menu-ft" id="info-shop">
                                <h3 class="title">Thông tin cửa hàng</h3>
                                <ul class="list-item">
                                    <li>
                                        <p>106 - Trần Bình - Cầu Giấy - Hà Nội</p>
                                    </li>
                                    <li>
                                        <p>0987.654.321 - 0989.989.989</p>
                                    </li>
                                    <li>
                                        <p>ismart@gmail.com</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="block menu-ft policy" id="info-shop">
                                <h3 class="title">Chính sách mua hàng</h3>
                                <ul class="list-item">
                                    <li>
                                        <a href="" title="">Quy định - chính sách</a>
                                    </li>
                                    <li>
                                        <a href="" title="">Chính sách bảo hành - đổi trả</a>
                                    </li>
                                    <li>
                                        <a href="" title="">Chính sách hội viện</a>
                                    </li>
                                    <li>
                                        <a href="" title="">Giao hàng - lắp đặt</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="block" id="newfeed">
                                <h3 class="title">Bảng tin</h3>
                                <p class="desc">Đăng ký với chung tôi để nhận được thông tin ưu đãi sớm nhất</p>
                                <div id="form-reg">
                                    <form method="POST" action="">
                                        <input type="email" name="email" id="email" placeholder="Nhập email tại đây">
                                        <button type="submit" id="sm-reg">Đăng ký</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="foot-bot">
                        <div class="wp-inner">
                            <p id="copyright">© Bản quyền thuộc về unitop.vn | Php Master</p>
                        </div>
                    </div>
                </div>
                </div>
                <div id="menu-respon">
                    <a href={{route('home.home')}} title="" class="logo">ismart</a>
                    <div id="menu-respon-wp">
                        <ul class="" id="main-menu-respon">
                            <li>
                                <a href={{route('home.home')}} title>Trang chủ</a>
                            </li>
                            <li>
                                <a href={{route('home.cp')}} title>Điện thoại</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href={{route('home.cp')}} title="">Iphone</a>
                                    </li>
                                    <li>
                                        <a href={{route('home.cp')}}  title="">Samsung</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href={{route('home.cp')}}  title="">Iphone X</a>
                                            </li>
                                            <li>
                                                <a href={{route('home.cp')}}  title="">Iphone 8</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href={{route('home.cp')}} " title="">Nokia</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href={{route('home.cp')}}  title>Máy tính bảng</a>
                            </li>
                            <li>
                                <a href={{route('home.cp')}}  title>Laptop</a>
                            </li>
                            <li>
                                <a href={{route('home.cp')}}  title>Đồ dùng sinh hoạt</a>
                            </li>
                            <li>
                                <a href={{route('home.blog')}}  title>Blog</a>
                            </li>
                            <li>
                                <a href="{{route('home.contract')}}" title>Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="btn-top"><img src={{asset("images/icon-to-top.png")}} alt=""></div>
                <div id="fb-root"></div>
                <script>(function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id))
                            return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=849340975164592";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>
                </body>
                </html>
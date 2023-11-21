<!DOCTYPE html>
<html>
    <head>
        <title>Quản lý ISMART</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href={{asset("admin/css/bootstrap/bootstrap.min.css")}} rel="stylesheet" type="text/css"/>
        <link href={{asset("admin/css/bootstrap/bootstrap-theme.min.css")}} rel="stylesheet" type="text/css"/>
        <link href={{asset("admin/reset.css")}} rel="stylesheet" type="text/css"/>
        <link href={{asset("admin/css/font-awesome/css/font-awesome.min.css")}} rel="stylesheet" type="text/css"/>
        <link href={{asset("admin/style.css")}} rel="stylesheet" type="text/css"/>
        <link href={{asset("admin/responsive.css")}} rel="stylesheet" type="text/css"/>

        <script src={{asset("admin/js/jquery-2.2.4.min.js")}} type="text/javascript"></script>
        <script src={{asset("admin/js/bootstrap/bootstrap.min.js")}} type="text/javascript"></script>
        <script src={{asset("admin/js/plugins/ckeditor/ckeditor.js")}} type="text/javascript"></script>
        <script src={{asset("admin/js/main.js")}}type="text/javascript"></script>
        <script src={{asset("admin/js/js.js")}}type="text/javascript"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <title>@yield('title', 'Quản lý ISMART')</title>
    </head>
 <body>
        <div id="site"> 
            <div id="container">
                <div id="header-wp">
                    <div class="wp-inner clearfix">
                        <a href="#" title="" id="logo" class="fl-left">ADMIN</a>
                        <ul id="main-menu" class="fl-left">
                            <li>
                                <a href={{route('admin.pages.lp')}} title="">Trang</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href={{route('admin.pages.apost')}} title="">Thêm mới</a> 
                                    </li>
                                    <li>
                                        <a href={{route('admin.pages.lpage')}} title="">Danh sách trang</a> 
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href={{route('admin.pages.lp')}} title="">Bài viết</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href={{route('admin.pages.apost')}} title="">Thêm mới</a> 
                                    </li>
                                    <li>
                                        <a href={{route('admin.pages.lp')}} title="">Danh sách bài viết</a> 
                                    </li>
                                    <li>
                                        <a href={{route('admin.pages.lcat')}} title="">Danh mục bài viết</a> 
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href={{route('admin.pages.lproduct')}} title="">Sản phẩm</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href={{route('admin.pages.aproduct')}} title="">Thêm mới</a> 
                                    </li>
                                    <li>
                                        <a href={{route('admin.pages.lproduct')}} title="">Danh sách sản phẩm</a> 
                                    </li>
                                    <li>
                                        <a href={{route('admin.pages.lcat')}} title="">Danh mục sản phẩm</a> 
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="" title="">Bán hàng</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href={{route('admin.pages.lo')}} title="">Danh sách đơn hàng</a> 
                                    </li>
                                    <li>
                                        <a href={{route('admin.pages.lo')}} title="">Danh sách khách hàng</a> 
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href={{route('admin.pages.menu')}} title="">Menu</a>
                            </li>
                        </ul>
                        <div id="dropdown-user" class="dropdown dropdown-extended fl-right">
                            <button class="dropdown-toggle clearfix" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <div id="thumb-circle" class="fl-left">
                                    <img src={{asset("admin/images/img-admin.png")}}>
                                </div>
                                <h3 id="account" class="fl-right">Admin</h3>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href={{route('admin.pages.ia')}} title="Thông tin cá nhân">Thông tin tài khoản</a></li>
                                <li><a href="#" title="Thoát">Thoát</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="main-content-wp" class="list-post-page">
                    
                    @yield('content')
                </div>
                <div id="footer-wp">
                    <div class="wp-inner">
                        <p id="copyright">2018 © Admin Theme by Php Master</p>
                    </div>
                </div>
                </div>
                </div>
                </body>
                </html>
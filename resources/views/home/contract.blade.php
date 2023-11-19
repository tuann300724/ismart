@extends('inc/header')
@section('title',"detail_blog")
    
@section('content')
<div id="main-content-wp" class="clearfix detail-blog-page">
    <div class="wp-inner">
        <div class="secion" id="breadcrumb-wp">
            <div class="secion-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="" title="">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-content fl-right">
            <div class="section" id="detail-blog-wp">
                <h3 class="section-title">Tôi thích nghe sự đóng góp từ bạn tới chúng tôi</h3>
                <div class="buttoninput">
                    <div class="buttoninput1">
                      <div class="buttoninput1b">
                        <div class="box1_item-form">
                          <input type="text" placeholder="YourName" />
                          <input type="text" placeholder="Email" />
                          <input type="text" placeholder="Phone" />
                          <input placeholder="Subject" />
              
                          <button class="btn">Send Request</button>
                        </div>
                      </div>
                    </div>
                    {{-- <div class="bando">
                      <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4079740757047!2d106.67716187460415!3d10.856542357711723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528359b9e27e3%3A0x8bcba72c28148fc4!2zMTQyIEjDoCBIdXkgR2nDoXAsIFRo4bqhbmggTOG7mWMsIFF14bqtbiAxMiwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1690853536993!5m2!1svi!2s"
                        width="700"
                        height="450"
                        style="border: 0"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                      ></iframe>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="sidebar fl-left">
            <div class="section" id="selling-wp">
                <div class="section-head">
                    <h3 class="section-title">Sản phẩm bán chạy</h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item">
                        <li class="clearfix">
                            <a href="?page=detail_product" title="" class="thumb fl-left">
                                <img src="public/images/img-pro-13.png" alt="">
                            </a>
                            <div class="info fl-right">
                                <a href="?page=detail_product" title="" class="product-name">Laptop Asus A540UP I5</a>
                                <div class="price">
                                    <span class="new">5.190.000đ</span>
                                    <span class="old">7.190.000đ</span>
                                </div>
                                <a href="" title="" class="buy-now">Mua ngay</a>
                            </div>
                        </li>
                        <li class="clearfix">
                            <a href="?page=detail_product" title="" class="thumb fl-left">
                                <img src="public/images/img-pro-11.png" alt="">
                            </a>
                            <div class="info fl-right">
                                <a href="?page=detail_product" title="" class="product-name">Iphone X Plus</a>
                                <div class="price">
                                    <span class="new">15.190.000đ</span>
                                    <span class="old">17.190.000đ</span>
                                </div>
                                <a href="" title="" class="buy-now">Mua ngay</a>
                            </div>
                        </li>
                        <li class="clearfix">
                            <a href="?page=detail_product" title="" class="thumb fl-left">
                                <img src="public/images/img-pro-12.png" alt="">
                            </a>
                            <div class="info fl-right">
                                <a href="?page=detail_product" title="" class="product-name">Iphone X Plus</a>
                                <div class="price">
                                    <span class="new">15.190.000đ</span>
                                    <span class="old">17.190.000đ</span>
                                </div>
                                <a href="" title="" class="buy-now">Mua ngay</a>
                            </div>
                        </li>
                        <li class="clearfix">
                            <a href="?page=detail_product" title="" class="thumb fl-left">
                                <img src="public/images/img-pro-05.png" alt="">
                            </a>
                            <div class="info fl-right">
                                <a href="?page=detail_product" title="" class="product-name">Iphone X Plus</a>
                                <div class="price">
                                    <span class="new">15.190.000đ</span>
                                    <span class="old">17.190.000đ</span>
                                </div>
                                <a href="" title="" class="buy-now">Mua ngay</a>
                            </div>
                        </li>
                        <li class="clearfix">
                            <a href="?page=detail_product" title="" class="thumb fl-left">
                                <img src="public/images/img-pro-22.png" alt="">
                            </a>
                            <div class="info fl-right">
                                <a href="?page=detail_product" title="" class="product-name">Iphone X Plus</a>
                                <div class="price">
                                    <span class="new">15.190.000đ</span>
                                    <span class="old">17.190.000đ</span>
                                </div>
                                <a href="" title="" class="buy-now">Mua ngay</a>
                            </div>
                        </li>
                        <li class="clearfix">
                            <a href="?page=detail_product" title="" class="thumb fl-left">
                                <img src="public/images/img-pro-23.png" alt="">
                            </a>
                            <div class="info fl-right">
                                <a href="?page=detail_product" title="" class="product-name">Iphone X Plus</a>
                                <div class="price">
                                    <span class="new">15.190.000đ</span>
                                    <span class="old">17.190.000đ</span>
                                </div>
                                <a href="" title="" class="buy-now">Mua ngay</a>
                            </div>
                        </li>
                        <li class="clearfix">
                            <a href="?page=detail_product" title="" class="thumb fl-left">
                                <img src="public/images/img-pro-18.png" alt="">
                            </a>
                            <div class="info fl-right">
                                <a href="?page=detail_product" title="" class="product-name">Iphone X Plus</a>
                                <div class="price">
                                    <span class="new">15.190.000đ</span>
                                    <span class="old">17.190.000đ</span>
                                </div>
                                <a href="" title="" class="buy-now">Mua ngay</a>
                            </div>
                        </li>
                        <li class="clearfix">
                            <a href="?page=detail_product" title="" class="thumb fl-left">
                                <img src="public/images/img-pro-15.png" alt="">
                            </a>
                            <div class="info fl-right">
                                <a href="?page=detail_product" title="" class="product-name">Iphone X Plus</a>
                                <div class="price">
                                    <span class="new">15.190.000đ</span>
                                    <span class="old">17.190.000đ</span>
                                </div>
                                <a href="" title="" class="buy-now">Mua ngay</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="section" id="banner-wp">
                <div class="section-detail">
                    <a href="?page=detail_product" title="" class="thumb">
                        <img src="public/images/banner.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
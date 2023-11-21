@extends('admin/inc/header')
@section('title',"add_post")
    
@section('content')
<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <div id="sidebar" class="fl-left">
            <ul id="sidebar-menu">
                <li class="nav-item">
                    <a href={{route("admin.pages.lpage")}} title="" class="nav-link nav-toggle">
                        <span class="fa fa-map icon"></span>
                        <span class="title">Trang</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route("admin.pages.lp")}}" title="" class="nav-link nav-toggle">
                        <span class="fa fa-pencil-square-o icon"></span>
                        <span class="title">Bài viết</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route("admin.pages.lproduct")}}" title="" class="nav-link nav-toggle">
                        <span class="fa fa-product-hunt icon"></span>
                        <span class="title">Sản phẩm</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route("admin.pages.lo")}}" title="" class="nav-link nav-toggle">
                        <span class="fa fa-database icon"></span>
                        <span class="title">Bán hàng</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route("admin.pages.do")}}" title="" class="nav-link nav-toggle">
                        <span class="fa fa-database icon"></span>
                        <span class="title">Danh sách đơn hàng</span>
                    </a>
                </li>
                </li>
                <li class="nav-item">
                    <a href="{{route("admin.pages.user")}}" title="" class="nav-link nav-toggle">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span class="title">User</span>
                    </a>
                </li>
            </ul>
        </div>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Thêm mới bài viết</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST">
                        <label for="title">Tiêu đề</label>
                        <input type="text" name="title" id="title">
                        <label for="title">Slug ( Friendly_url )</label>
                        <input type="text" name="slug" id="slug">
                        <label for="desc">Mô tả</label>
                        <textarea name="desc" id="desc" class="ckeditor"></textarea>
                        <label>Hình ảnh</label>
                        <div id="uploadFile">
                            <input type="file" name="file" id="upload-thumb">
                            <input type="submit" name="btn-upload-thumb" value="Upload" id="btn-upload-thumb">
                            <img src="public/images/img-thumb.png">
                        </div>
                        <label>Danh mục cha</label>
                        <select name="parent-Cat">
                            <option value="">-- Chọn danh mục --</option>
                            <option value="1">Thể thao</option>
                            <option value="2">Xã hội</option>
                            <option value="3">Tài chính</option>
                        </select>
                        <button type="submit" name="btn-submit" id="btn-submit">Thêm mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
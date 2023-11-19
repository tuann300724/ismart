@extends('admin/inc/header')
@section('title',"User acount")
    
@section('content')
<div class="wrap clearfix">

    <div id="sidebar" class="fl-left">
        <ul id="sidebar-menu">
            <li class="nav-item">
                <a href="" title="" class="nav-link nav-toggle">
                    <span class="fa fa-map icon"></span>
                    <span class="title">Trang</span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href={{route("admin.pages.apage")}} title="" class="nav-link">Thêm mới</a>
                    </li>
                    <li class="nav-item">
                        <a href={{route("admin.pages.lpage")}} title="" class="nav-link">Danh sách các trang</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="" title="" class="nav-link nav-toggle">
                    <span class="fa fa-pencil-square-o icon"></span>
                    <span class="title">Bài viết</span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="?page=add_post" title="" class="nav-link">Thêm mới</a>
                    </li>
                    <li class="nav-item">
                        <a href="?page=list_post" title="" class="nav-link">Danh sách bài viết</a>
                    </li>
                    <li class="nav-item">
                        <a href="?page=list_cat" title="" class="nav-link">Danh mục bài viết</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="" title="" class="nav-link nav-toggle">
                    <span class="fa fa-product-hunt icon"></span>
                    <span class="title">Sản phẩm</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="" title="" class="nav-link nav-toggle">
                    <span class="fa fa-database icon"></span>
                    <span class="title">Bán hàng</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="" title="" class="nav-link nav-toggle">
                    <span class="fa fa-database icon"></span>
                    <span class="title">Danh sách đơn hàng</span>
                </a>
            </li>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="?page=list_order" title="" class="nav-link">Danh sách đơn hàng</a>
                    </li>
                    <li class="nav-item">
                        <a href="?page=list_customer" title="" class="nav-link">Danh sách khách hàng</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" title="" class="nav-link nav-toggle">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span class="title">User</span>
                </a>
            </li>
        </ul>
    </div>
        
</div>
   
        <div id="content">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Danh sách người dùng</h3>
                    <a href="?page=add_cat" title="" id="add-new" class="fl-left">Thêm mới</a>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="filter-wp clearfix">
                        <form method="GET" class="form-s fl-right">
                            <input type="text" name="s" id="s">
                            <input type="submit" name="sm_s" value="Tìm kiếm">
                        </form>
                    </div>

                    <div class="table-responsive">
                        <table class="table list-table-wp">
                            <thead>
                                <tr>
                                    <td><input type="checkbox" name="checkAll" id="checkAll"></td>
                                    <td><span class="thead-text">STT</span></td>
                                    <td><span class="thead-text">Tên</span></td>
                                    <td><span class="thead-text">Email</span></td>
                                    <td><span class="thead-text">Trạng thái</span></td>
                                    <td><span class="thead-text">Hoạt Động</span></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                                    <td><span class="tbody-text">1</h3></span>
                                    <td class="clearfix">
                                        <div class="tb-title fl-left">
                                            <a href="" title="">Bacon ipsum dolor amet hamburger frankfurter cow biltong pork loin capicola</a>
                                        </div>
                                        <ul class="list-operation fl-right">
                                            <li><a href="" title="Sửa" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                            <li><a href="" title="Xóa" class="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </td>
                                    <td><span class="tbody-text">Danh mục 1</span></td>
                                    <td><span class="tbody-text">Hoạt động</span></td>
                                    <td><span class="tbody-text">Admin</span></td>
                                    <td><span class="tbody-text">12-07-2016</span></td>
                                </tr>
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td><input type="checkbox" name="checkAll" id="checkAll"></td>
                                    <td><span class="thead-text">STT</span></td>
                                    <td><span class="thead-text">Tên</span></td>
                                    <td><span class="thead-text">Email</span></td>
                                    <td><span class="thead-text">Trạng thái</span></td>
                                    <td><span class="thead-text">Hoạt Động</span></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
            <div class="section" id="paging-wp">
                <div class="section-detail clearfix">
                    <ul id="list-paging" class="fl-right">
                        <li>
                            <a href="" title=""><</a>
                        </li>
                        <li>
                            <a href="" title="">1</a>
                        </li>
                        <li>
                            <a href="" title="">2</a>
                        </li>
                        <li>
                            <a href="" title="">3</a>
                        </li>
                        <li>
                            <a href="" title="">></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>   
    </div>
 
  








@endsection
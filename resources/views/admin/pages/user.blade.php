@extends('admin/inc/header')
@section('title',"User acount")
    
@section('content')
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
        
</div>
   
        <div id="content">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">User list</h3>
                    <a href="{{route("admin.pages.user_create")}}" title="" id="add-new" class="fl-left">Thêm mới</a>
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
                                    <td><span class="thead-text">Name</span></td>
                                    <td><span class="thead-text">Email</span></td>
                                    <td><span class="thead-text">Status</span></td>
                                    <td><span class="thead-text">Role</span></td>
                                    <td><span class="thead-text">Delete</span></td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                                   
                                 
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <form action="{{ route('update-status', ['id' => $user->id]) }}" method="post">
                                          @csrf
                                          @method('PUT')
                                          <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="status" value="1" {{ $user->status == 1 ? 'checked' : '' }}>
                                          </div>                              
                                      </form>
                                    </td>
                                    <td>{{$user->role}}</td>
                                    <td>
                                        <form action="{{ route('delete-user', ['id' => $user->id]) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button style="background-color: transparent; border: none; color:red" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                    @endforeach
                                
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td><input type="checkbox" name="checkAll" id="checkAll"></td>
                                    <td><span class="thead-text">STT</span></td>
                                    <td><span class="thead-text">Name</span></td>
                                    <td><span class="thead-text">Email</span></td>
                                    <td><span class="thead-text">Status</span></td>
                                    <td><span class="thead-text">Role</span></td>
                                    <td><span class="thead-text">Delete</span></td>
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

    
    <script>
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function () {
                this.closest('form').submit();
            });
        });
      </script>





@endsection
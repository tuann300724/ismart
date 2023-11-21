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
          
            <h2>User create </h2>
        <form method="post" action="{{ route('admin.pages.user_store') }}">
            @csrf
            <div class="mb-3 mt-3">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" value="{{ old('name') }}"
                    placeholder="Enter name" name="name">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" value="{{ old('email') }}"
                    placeholder="Enter email" name="email">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password">Password:</label>
                <input type="text" class="form-control" id="password" value="{{ old('password') }}"
                    placeholder="Enter password" name="password">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="role">Role:</label>
                <select class="form-select" id="role" name="role">
                    <option value="Admin" @selected(old('role') == 'Admin')>Admin</option>
                    <option value="User" @selected(old('role') == 'User')>User</option>
                </select>
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio1" @checked(old('status') === '1')
                        name="status" value="1" checked>
                    <label class="form-check-label" for="radio1">Active</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio2" @checked(old('status') === '0')
                        name="status" value="0">
                    <label class="form-check-label" for="radio2">DeActive</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Done</button>
        </form>

        </div>
        


@endsection
<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class viewController extends Controller
{
    public function index(){      
        return view("home.home");
    }
    public function contract(){      
        return view("home.contract");
    }
    public function dp(){      
        return view("home.detail_product");
    }
    public function db(){      
        return view("home.detail_blog");
    }
    public function checkout(){      
        return view("home.checkout");
    }
    public function cp(){      
        return view("home.category_product");
    }
    public function cart(){      
        return view("home.cart");
    }
    public function blog(){      
        return view("home.blog");
    }
    // admin
    public function lp()
    {
        return view('admin.pages.list_post');
    }

    public function ac()
    {
        return view('admin.pages.add_cat');
    }

    public function apage()
    {
        return view('admin.pages.add_page');
    }

    public function apost()
    {
        return view('admin.pages.add_post');
    }

    public function aproduct()
    {
        return view('admin.pages.add_product');
    }

    public function as()
    {
        return view('admin.pages.add_slider');
    }

    public function aw()
    {
        return view('admin.pages.add_widget');
    }

    public function cpass()
    {
        return view('admin.pages.change_pass');
    }

    public function do()
    {
        return view('admin.pages.detail_order');
    }

    public function ia()
    {
        return view('admin.pages.info_account');
    }

    public function lcat()
    {
        return view('admin.pages.list_cat');
    }

    public function lcus()
    {
        return view('admin.pages.list_customer');
    }

    public function lm()
    {
        return view('admin.pages.list_media');
    }

    public function lo()
    {
        return view('admin.pages.list_order');
    }

    public function lpage()
    {
        return view('admin.pages.list_page');
    }

    public function lproduct()
    {
        return view('admin.pages.list_product');
    }

    public function ls()
    {
        return view('admin.pages.list_slider');
    }

    public function lw()
    {
        return view('admin.pages.list_widget');
    }

    public function menu()
    {
        return view('admin.pages.menu');
    }
    
    public function login(){      
        return view("Login.login");
       
    }
    public function register()
    {
        return view("Login.register");
    }
    public function create(Request $request)
    {
        $request->validate([
            "name"=> "required",
            "email"=> "bail|required|email",
            "password"=> "bail|required|min:5|max:20",
        ],[
            "required"=>":attribute cannot be blank.",
            "min"=>":attribute must be more than 4 characters.",
            "max"=>":attribute must be less than 20 characters.",
            "email"=>":attribute must be email validation form.",
        ]);
        //băm pw ra khi user nhập vào để k bị ra chuỗi kí tự & số
        // $password = $request->password;
        // $hasPassword = Hash::make($password);
        $hasPassword = Hash::make($request->password);
        $user = new User(); //tao doi tuong
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $hasPassword;
        $user->role = "User";
        $user->status = 1;
        $user->save();
        return redirect()->route("Login.lg")->with("success","created successfully.");

    }
    public function sendmail()
    {
        return view('Login.send_mail_resetpass');
    }
    public function pass()
    {
        return view('Login.resetpass');
    }
   
}

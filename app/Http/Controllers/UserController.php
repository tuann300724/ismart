<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view("admin.pages.user", compact("users"));
    }
    public function loglog(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);
        $email = $request->email;
        $password = $request->password;
        $user = User::where("email", $email)->first();
        $status = $request->status;
        if ($user) {

            if (Hash::check($password, $user->password)) {
                session()->put('userInfo', $user->toArray());

                if ($user->status == 1) {
                    if ($user->role == 'Admin') {
                        return redirect()->route('admin.pages.user');
                    } else if ($user->role == 'User') {
                        return redirect()->route('home.home');
                    }
                } else {
                    return redirect()->back()->with('error', 'Your account is not active.')->withInput();
                }
            } else {
                return redirect()->back()->with('error', 'Invalid credentials')->withInput();
            }
        } else {
            return redirect()->back()->with('error', 'Invalid credentials');
        }
    }


    public function create()
    {
        return view("Login.create");
    }
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "bail|required|email",
            "password" => "bail|required|min:5|max:20",
            "role" => "required",
            "status" => "required",
        ], [
            "required" => ":attribute cannot be blank.",
            "min" => ":attribute must be more than 4 characters.",
            "max" => ":attribute must be less than 20 characters.",
            "email" => ":attribute must be email validation form.",
        ]);
        //băm pw ra khi user nhập vào để k bị ra chuỗi kí tự & số
        // $password = $request->password;
        // $hasPassword = Hash::make($password);
        $hasPassword = Hash::make($request->password);
        $user = new User(); //tao doi tuong
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $hasPassword;
        $user->role = $request->role;
        $user->status = $request->status;
        $user->save();
        return redirect()->route("Login.lg")->with("success", "User created successfully.");

    }
    public function logout()
    {
        session()->forget('userInfo');
        return redirect('/');
    }
    public function resetpass(Request $request)
    {
        $data = $request->all();

        $pass = new User;
        if ($pass->id) {
            $pass->password = $data['password'];
            
            $pass->save();
        }

    }
}

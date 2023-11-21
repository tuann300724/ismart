<?php

namespace App\Http\Controllers;

use App\Mail\resetpassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
class EmailController extends Controller
{
    public function send_mail(Request $request)
    {
        $data = $request->all();
        $email = $data['email'] ?? '';
    
        // Store the email in the session
        session(['reset_email' => $email]);
    
        // Check if the email exists in the database
        $user = User::where('email', $email)->first();
    
        if ($user) {
            // Email exists, proceed with sending OTP
    
            $rnd = rand(0000, 9999);
            Cache::put('otp', $rnd, now()->addMinutes(2));
    
            Mail::to($email)->send(new resetpassword($email, $rnd));
    
            Session::flash('flash_message', 'Send thành công');
            return redirect()->route('Login.viewotp')->with('success', 'Send otp success ');
        } else {
            // Email does not exist in the database
            Session::flash('flash_message', 'Email not found in the database');
            return redirect()->back()->with('error', 'Email not found');
        }
    }
    
    
    public function viewotp(){
        return view('Login.otp');
    }
    public function sendotp(Request $request){ 
        $data = $request->all();
        $otp = Cache::get('otp');
        if($data['otp'] == $otp){
            return redirect()->route('Login.pass')->with("success","ma otp dung");
        }else{
            return redirect()->back()->with("error","OTP not invalid or time out");
        }
    }

    public function update(Request $request)
    {
        $email = $request->input('email');
        // Validate the form data
        $request->validate([
            'password' => 'required|min:6|confirmed', // 'confirmed' checks if the password_confirmation field matches the password field
        ], [
            'password.confirmed' => 'The password confirmation does not match.',
        ]);
     

       


        // Update the user's password in the database (assuming you have a User model)
        $user = User::where('email', $email)->first();
        
        if ($user) {
            // Update the password
            $user->password = bcrypt($request->input("password"));
            $user->save();

            // You can add additional logic or redirect the user as needed

            return redirect()->route('Login.lg')->with("success", "Password updated successfully. Please log in with your new password.");
        } else {
            // Email not found in the database
            return redirect()->back()->with("error", "Email not found");
        }
    }
}

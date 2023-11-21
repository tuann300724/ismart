<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/",[viewController::class,"index"])->name("home.home");


Route::prefix("/home")->group(function(){
    // Route::get("/",[ViewController::class,"index"])->name("home.home");
    Route::get("/logout", [UserController::class, "logout"])
    ->name("logout");
    Route::get("/detail_product",[ViewController::class,"dp"])->name("home.dp");
    Route::get("/detail_blog",[ViewController::class,"db"])->name("home.db");
    Route::get("/checkout",[ViewController::class,"checkout"])->name("home.checkout");
    Route::get("/catefory_product",[ViewController::class,"cp"])->name("home.cp");
    Route::get("/cart",[ViewController::class,"cart"])->name("home.cart");
    Route::get("/blog",[ViewController::class,"blog"])->name("home.blog");
    Route::get("/contract",[ViewController::class,"contract"])->name("home.contract");
});

Route::group(["middleware"=>"admin_auth"],function(){
Route::prefix("/admin/pages")->group(function(){
    Route::get("/",[ViewController::class,"lp"])->name("admin.pages.lp");
    Route::get("/add_cat",[ViewController::class,"ac"])->name("admin.pages.ac");
    Route::get("/add_page",[ViewController::class,"apage"])->name("admin.pages.apage");
    Route::get("/add_post",[ViewController::class,"apost"])->name("admin.pages.apost");
    Route::get("/add_product",[ViewController::class,"aproduct"])->name("admin.pages.aproduct");
    Route::get("/add_silder",[ViewController::class,"as"])->name("admin.pages.as");
    Route::get("/add_widget",[ViewController::class,"aw"])->name("admin.pages.aw");
    Route::get("/change_pass",[ViewController::class,"cpass"])->name("admin.pages.cpass");
    Route::get("/detail_order",[ViewController::class,"do"])->name("admin.pages.do");
    Route::get("/info_account",[ViewController::class,"ia"])->name("admin.pages.ia");
    Route::get("/list_cat",[ViewController::class,"lcat"])->name("admin.pages.lcat");
    Route::get("/list_customer",[ViewController::class,"lcus"])->name("admin.pages.lcus");
    Route::get("/list_media",[ViewController::class,"lm"])->name("admin.pages.lm");
    Route::get("/list_order",[ViewController::class,"lo"])->name("admin.pages.lo");
    Route::get("/list_page",[ViewController::class,"lpage"])->name("admin.pages.lpage");
    Route::get("/list_product",[ViewController::class,"lproduct"])->name("admin.pages.lproduct");
    Route::get("/list_slider",[ViewController::class,"ls"])->name("admin.pages.ls");
    Route::get("/list_widget",[ViewController::class,"lw"])->name("admin.pages.lw");
    Route::get("/menu",[ViewController::class,"menu"])->name("admin.pages.menu");
    Route::get("/user",[UserController::class,"index"])->name("admin.pages.user");
    Route::get("/add_user",[UserController::class,"create"])->name("admin.pages.user_create");
    Route::post("/add_user",[UserController::class,"store"])->name("admin.pages.user_store");
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('delete-user');
    Route::put('/update-status/{id}',[UserController::class,"updateStatus"])
            ->name('update-status');
});
});

Route::prefix("/Login")->group(function(){
    Route::get("/login",[ViewController::class,"login"])->name("Login.lg");
    Route::get("/otp",[EmailController::class,"viewotp"])->name("Login.viewotp");
    Route::post("/otp",[EmailController::class,"sendotp"])->name("Login.sendotp");
    Route::post("/send_mail_resetpass",[EmailController::class,"send_mail"])->name("Login.sm");
    Route::post("/login", [UserController::class, "loglog"])
        ->name("login.check");
        Route::get("/create",[UserController::class,"create"])
        ->name("login.create");
        Route::post("/create",[UserController::class,"store"])
        ->name("login.store");
    Route::get("/register",[ViewController::class,"register"])->name("Login.re");
    Route::post("/register",[ViewController::class,"create"])->name("Login.create");
    Route::get("/send_mail_resetpass",[ViewController::class,"sendmail"])->name("Login.sendmail");
    Route::get("/newpass",[ViewController::class,"pass"])->name("Login.pass");
    Route::post("/newpass",[EmailController::class,"update"])->name("password.update");

});
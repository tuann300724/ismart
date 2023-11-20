@extends('inc/header')
@section('title',"detail_blog")
    
@section('content')
<div>
    <div class="contact">
        <div class="contact-container">
            <div class="contact-box">
                <div class="contact-details">
                    <img src="images/1.jpg">
                    <h1>TuanCuTo</h1>
                    <p>TuanCT@gmail.com</p>
                </div>
                <div class="contact-form">
                    <form>
                        <span>Contact </span>
                        <input type="text" placeholder="Full Name">
                        <input type="text" placeholder="Email">
                        <input type="text" placeholder="Subject">
                        <textarea placeholder="Enter Message"></textarea>
                        <input type="submit" value="Send">
                    </form>
                </div>
    
            </div>
        </div>
    </div>
</div>
    


@endsection
<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login </title>
  <link href={{asset("login/style.css")}} rel="stylesheet" type="text/css"/>

</head>
<body>
  <div class="wrapper">
    <form method="post" action="{{route("Login.create")}}">
      @csrf
      <h2>Register account</h2>
      <div class="input-field">
        <input type="text" name="name" value="{{old('name')}}">
        <label>Enter your Name</label>  
      </div>
      @error('name')
      <span style="color: red">{{ $message }}</span>
  @enderror
        <div class="input-field">
        <input type="email" name="email" value="{{old('email')}}">
        <label>Enter your email</label>
        
      </div>
      @error('email')
        <span  style="color: red">{{ $message }}</span>
    @enderror
      <div class="input-field">
        <input type="password" name="password">
        <label>Enter your password</label>
       
      </div>
      @error('password')
      <span style="color: red">{{ $message }}</span>
  @enderror
      <button type="submit">Log In</button>
      <div class="register">
        <p>Have an account? <a href= {{route("Login.lg")}}>Turn back</a></p>
      </div>
    </form>
  </div>
</body>
</html>
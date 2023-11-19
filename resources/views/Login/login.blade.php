<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login </title>
  <link href={{asset("login/style.css")}} rel="stylesheet" type="text/css"/>
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> --}}

</head>
<body>
  <div class="wrapper">
    <form method="post" action={{route("login.check")}}>
      @csrf
      <h2>Login</h2>
        <div class="input-field">
        <input type="email" name="email" >
        <label>Enter your email</label>
        @error('email')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
      </div>
      <div class="input-field">
        <input type="password" name="password" >
        <label>Enter your password</label>
        @error('password')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
        <a href={{route("Login.sendmail")}}>Forgot password?</a>
      </div>
      <button type="submit">Log In</button>
      <div class="register">
        <p>Don't have an account? <a href={{route("Login.re")}}>Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>
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
    <form action="#">
      <h2>Register account</h2>
      <div class="input-field">
        <input type="text" required>
        <label>Enter your Name</label>
      </div>
        <div class="input-field">
        <input type="email" required>
        <label>Enter your email</label>
      </div>
      <div class="input-field">
        <input type="password" required>
        <label>Enter your password</label>
      </div>
      <button type="submit">Log In</button>
      <div class="register">
        <p>Have an account? <a href= {{route("Login.lg")}}>Turn back</a></p>
      </div>
    </form>
  </div>
</body>
</html>
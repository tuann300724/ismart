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
      <h2>Reset password</h2>
        <div class="input-field">
        <input type="enail" name="email"  required>
        <label>Enter your email</label>
      </div>

      <button type="submit">Send</button>
      <div class="register">
        <p>Don't have an account? <a href={{route("Login.re")}}>Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>
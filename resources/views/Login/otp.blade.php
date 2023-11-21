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
    <form action="{{route('Login.sendotp')}}" method="POST">
      @csrf
      <h2>Enter otp</h2>
      <div class="input-field">
        <input type="number" name="otp" required>
        <label>Enter your OTP</label>
      </div>
      <button type="submit">Update</button>
    </form>
  </div>
</body>
</html>
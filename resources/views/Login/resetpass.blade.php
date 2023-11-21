<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>
  <link href="{{ asset('login/style.css') }}" rel="stylesheet" type="text/css"/>
  
</head>
<body>
  <div class="wrapper">
    <form action="{{ route('password.update', ['email' => session('reset_email')]) }}" method="post">
      @csrf
      <h2>Reset password</h2>
      {{-- <input type="hidden" name="email" value="{{ $email }}"> --}}
      <div class="input-field">
        <input type="password" required name="password" id="password">
        <label for="password">Enter your new password</label>
      </div>
      <div class="input-field">
        <input type="password" required name="password_confirmation" id="password_confirmation">
        <label for="password_confirmation">Confirm your new password</label>
      </div>
      @if ($errors->any())
        <div class="text-danger">
          @foreach ($errors->all() as $error)
            <p style="color: red">{{ $error }}</p>
          @endforeach
        </div>
      @endif
      <button type="submit">Update</button>
      <div class="register">
        <p>Don't have an account? <a href="{{ route('Login.re') }}">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>

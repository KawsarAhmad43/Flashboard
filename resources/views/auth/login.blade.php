<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flashboard | Login</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/auth/css/login.css') }}">
</head>
<body>
  <div class="login-container">
    <div class="login-form">
      
      <img src="{{ asset('assets/auth/images/logo.png') }}" alt="Logo" class="logo">
      <h2 class="text-center mb-4 mt-2">Login</h2>
      <form>
        <div class="form-group">
          <input type="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-login btn-block">Login</button>
        </div>
        <div class="forgot-password">
          <a href="#">Forgot Password?</a>
        </div>
        <div class="already-account">
          Don't have an account? <a href="{{ route('register') }}">Sign up</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flashboard | Registration</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/auth/css/register.css') }}">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="registration-form">
          <h2 class="text-center mb-4">Registration</h2>
          <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
            {{--  --}}
            @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
            <div class="alert alert-success" role="alert">
              Login right now: <a href="{{ route('login') }}">Login</a>
              </div>
            @endif

            
            
            {{--  --}}
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" required>
              @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
             @enderror
            </div>

            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" id="username" class="form-control @error('username') is-invalid @enderror" name="username" required>
              @error('username')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
             @enderror
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" required>
              @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
             @enderror
            </div>

            <div class="form-group">
              <label for="contact">Contact Number</label>
              <input type="tel" id="contact" class="form-control @error('contact') is-invalid @enderror" name="contact" required>
              @error('contact')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
             @enderror
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
              @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
             @enderror
            </div>

            <div class="form-group">
              <label for="confirm-password">Confirm Password</label>
              <input type="password" id="confirm-password" class="form-control" name="password_confirmation" required>
            </div>

            <div class="form-group">
              <label for="gender">Gender</label>
              <select id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" required>
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
              @error('gender')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
             @enderror
            </div>

            <div class="form-group">
              <label for="image">Upload Image</label>
              <input type="file" id="image" class="form-control-file" name="image" accept="image/*" onchange="previewImage(event)">
              <br>
              <img id="image-preview" class="image-preview" src="https://via.placeholder.com/200" alt="Image Preview">
              @error('image')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
          </div>

            <div class="form-group">
              <div class="form-check">
                <input type="checkbox" class="form-check-input @error('remember') is-invalid @enderror" id="remember" name="remember" required>
                <label class="form-check-label checkbox-label" for="remember">Remember Me</label>
                @error('remember')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery and Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    function previewImage(event) {
      var reader = new FileReader();
      reader.onload = function() {
        var imagePreview = document.getElementById('image-preview');
        imagePreview.src = reader.result;
      }
      reader.readAsDataURL(event.target.files[0]);
    }
  </script>
</body>
</html>

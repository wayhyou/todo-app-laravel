<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <!-- 00. Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid col-md-7">
            <div class="navbar-brand">To Do App</div>
        </div>
    </nav>
    
    <div class="container mt-4">
        <!-- 01. Content-->
        <h1 class="text-center mb-4">Login</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
             <div class="card mb-3">
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- 02. Form input data login -->
                    <form id="login" action="{{ route('login.post') }}" method="post">
                        @csrf
                        <div class="input mb-3 d-flex flex-column gap-2">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="login-input"
                                placeholder="email" value="{{ old('email') }}" required>
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="login-input"
                                placeholder="password" value="{{ old('password') }}" required>
                            <button class="btn btn-primary" type="submit">
                                Login
                            </button>
                            <div class="text-end mt-3">
                                Belum punya akun? <a class="badge bg-primary text-decoration-none" href="{{ route('register') }}">Register disini</a>
                            </div>
                        </div>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle (popper.js included) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>
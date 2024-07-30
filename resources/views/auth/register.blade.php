<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid col-md-7">
            <div class="navbar-brand">To Do App</div>
        </div>
    </nav>
    
    <div class="container mt-4">
        <!-- Content -->
        <h1 class="text-center mb-4">Register</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- Registration Form -->
                        <form id="register" action="{{ route('register.post') }}" method="post">
                            @csrf
                            <div class="input mb-3 d-flex flex-column gap-2">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="register-input"
                                    placeholder="Name" value="{{ old('name') }}" required>
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="register-input"
                                    placeholder="Email" value="{{ old('email') }}" required>
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="register-input"
                                    placeholder="Password" required>
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation" id="register-input"
                                    placeholder="Confirm Password" required>
                                <button class="btn btn-primary" type="submit">
                                    Register
                                </button>
                                <div class="text-end mt-3">
                                    Sudah punya akun? <a class="badge bg-primary text-decoration-none" href="{{ route('login') }}">Login disini</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle (popper.js included) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

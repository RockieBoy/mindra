<?php header('Access-Control-Allow-Origin: *'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        .spinner-border {
            display: none;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
            <h3 class="text-center mb-4">Login</h3>

            <form id="loginForm" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>

                <div id="errorText" class="text-danger mb-3"></div>

                <div class="d-grid mb-4">
                    <button type="submit" class="btn btn-primary">
                        Login
                        <span class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"
                            id="spinner"></span>
                    </button>
                </div>
                <a href="{{ url('/sign-up') }}" class="btn">Sign Up</a>
            </form>
        </div>
    </div>
</body>

<script>
    $(function() {
        $('#loginForm').submit(function(e) {
            e.preventDefault();

            $('#spinner').show();
            $('#errorText').text('');

            let email = document.getElementById("email").value;
            let password = document.getElementById("password").value;

            $.ajax({
                url: 'http://192.168.100.14:8005/api/v1/auth/login',
                method: 'POST',
                data: JSON.stringify({
                    email: email,
                    password: password,
                }),
                contentType: 'application/json',
                success: function(response) {
                    $('#spinner').hide();
                    // window.location.href = '/dashboard'; 
                },
                error: function(xhr) {
                    $('#spinner').hide();
                    let msg = 'Login gagal. Silakan coba lagi.';
                    let error = xhr.responseJSON.errors;

                    const firstKey = Object.keys(error)[0];

                    const firstErrorMessage = error[firstKey][0];

                    if (xhr.responseJSON != null) {
                        msg = firstErrorMessage;
                    }
                    $('#errorText').text(msg);
                }
            });
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</html>

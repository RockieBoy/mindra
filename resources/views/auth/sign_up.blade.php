<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        .spinner-border {
            display: none;
        }
    </style>
</head>

<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow p-4" style="width: 100%; max-width: 500px;">
            <h4 class="mb-4">SME Registration</h4>
            <form id="registerForm" method="POST">
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" required />
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required />
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required />
                </div>
                <div class="mb-3">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Phone Number</label>
                    <input type="text" name="phoneNumber" class="form-control" />
                </div>
                <div id="registerError" class="text-danger mb-2"></div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">
                        Register
                        <span class="spinner-border spinner-border-sm ms-2" id="registerSpinner"></span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        $('#registerForm').submit(function(e) {
            e.preventDefault();
            $('#registerSpinner').show();
            $('#registerError').text('');

            const data = {
                email: $('input[name="email"]').val(),
                name: $('input[name="name"]').val(),
                password: $('input[name="password"]').val(),
                address: $('input[name="address"]').val(),
                phoneNumber: $('input[name="phoneNumber"]').val(),
                role: "sme",
                status: "active"
            };

            $.ajax({
                url: 'http://192.168.100.14:8005/api/v1/auth/register',
                method: 'POST',
                contentType: 'application/json',
                data: JSON.stringify(data),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Accept': 'application/json',
                    "Content-Type": "application/json",
                },
                success: function() {
                    $('#registerSpinner').hide();
                    alert('Registration successful!');
                    history.back();
                },
                error: function(xhr) {
                    $('#registerSpinner').hide();
                    let msg = 'Login gagal. Silakan coba lagi.';
                    let error = xhr.responseJSON.errors;

                    const firstKey = Object.keys(error)[0];

                    const firstErrorMessage = error[firstKey][0];

                    if (xhr.responseJSON != null) {
                        msg = firstErrorMessage;
                    }
                    $('#registerError').text(msg);
                }
            });
        });
    </script>

</body>

</html>

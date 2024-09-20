<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1a2b38;
            font-family: Arial, sans-serif;
        }

        .form-container {
            background-color: #243845;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            color: white;
            max-width: 500px; /* Set maximum width to limit the form width */
            margin: 0 auto; /* Center the form horizontally */
        }

        .form-container h3 {
            font-weight: bold;
        }

        .form-container label {
            font-weight: 500;
        }

        .form-container .form-control,
        .form-container .btn,
        .form-container .form-check-input {
            background-color: #3c5263;
            border: none;
            color: white;
        }

        .form-container .btn:hover {
            background-color: #586e7d;
        }

        .form-container .btn-group .btn-check:checked+.btn,
        .form-container .btn-group .btn-check:active+.btn {
            background-color: #586e7d;
        }

        .form-container .btn-group .btn {
            margin-right: 5px;
        }
        .card {
            background-color: #233b4c;
        }
        h3{
            color: white;
            box-shadow: white;
        }
        .form-label {
            color: white;
        }
        .btn {
            background-color: #586e7d;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Create New User</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.store') }}" method="POST" >
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                            </div>
                            <div class="mb-3">
                                <label for="confirm_password" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Create User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

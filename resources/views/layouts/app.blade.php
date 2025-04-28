<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Blog - @yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(90deg, #1e3c72, #2a5298);
            color: #fff;
            height: 100vh;
            display: flex;
            align-items: center;
        }
        .card {
            background: #1e1e1e;
            color: #fff;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }
        .card-header {
            background: linear-gradient(90deg, #6a11cb, #2575fc);
            border-bottom: none;
            font-size: 1.5rem;
            text-align: center;
        }
        .form-control {
            background: #333;
            border: none;
            color: #fff;
        }
        .form-control:focus {
            background: #444;
            color: #fff;
            box-shadow: none;
        }
        .btn-success, .btn-primary, .btn-danger {
            transition: all 0.3s ease;
        }
        .btn-success:hover, .btn-primary:hover, .btn-danger:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    @yield('content')

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
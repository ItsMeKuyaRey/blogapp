<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Post</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #2f80ed, #1a1a1a); /* Gradient background */
            color: #fff;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0;
        }

        .container {
            max-width: 800px;
            padding: 30px;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1.5s ease-in-out;
        }

        h1 {
            text-align: center;
            font-size: 3rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 40px;
        }

        .post-content {
            margin-bottom: 30px;
        }

        .back-link {
            display: block;
            text-align: center;
            font-size: 1.2rem;
            color: #ff6f61;
            text-decoration: none;
            padding: 10px 0;
            border-radius: 5px;
            background-color: rgba(255, 111, 97, 0.2);
        }

        .back-link:hover {
            background-color: #ff6f61;
            color: white;
        }

        /* Add animation */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <div class="post-content">
            <p>{{ $post->body }}</p>
        </div>
        <a href="{{ route('posts.index') }}" class="back-link">Back to Posts</a>
    </div>
</body>
</html>

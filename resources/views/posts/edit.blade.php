<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
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

        /* Input and Button Styles */
        input, textarea, button {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #fff;
            background-color: #333;
            color: #fff;
        }

        button {
            background-color: #ff6f61;
            border: none;
            cursor: pointer;
            transition: all 0.3s;
        }

        button:hover {
            background-color: #ff4f40;
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
        <h1>Edit Post</h1>
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="title" value="{{ $post->title }}" required>
            <textarea name="body" required>{{ $post->body }}</textarea>
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>
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
            max-width: 1200px;
            margin-top: 50px;
            padding: 30px;
            background: rgba(0, 0, 0, 0.7); /* Semi-transparent background */
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 40px;
            color: #fff;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5); /* Shadow for text */
        }

        .btn-success {
            background-color: #ff6f61;
            border-color: #ff6f61;
        }
        .btn-success:hover {
            background-color: #ff4f40;
            border-color: #ff4f40;
        }

        /* Cards for Posts */
        .post-card {
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            background: #333;
            padding: 20px;
            margin-bottom: 30px;
        }

        .post-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .post-card h5 {
            font-size: 1.8rem;
            color: #fff;
            font-weight: 600;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5); /* Adding glow effect */
        }

        .post-card p {
            color: #ccc;
            font-size: 1rem;
            margin-bottom: 20px;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.3); /* Light text shadow */
        }

        .button-group a, .button-group button {
            white-space: nowrap; /* Prevent text from wrapping */
        }

        .button-group {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .button-group a {
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 0.9rem;
            text-decoration: none;
        }

        .button-group button {
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 0.9rem;
            border: none;
        }

        .button-group a.btn-primary {
            background-color: #007bff;
            color: white;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3); /* Light glow effect */
        }

        .button-group a.btn-primary:hover {
            background-color: #0056b3;
        }

        .button-group button.btn-danger {
            background-color: #ff3d3d;
            color: white;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

        .button-group button.btn-danger:hover {
            background-color: #e20000;
        }

        .list-group {
            margin-top: 40px;
        }

        /* Add animation to page */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .container {
            animation: fadeIn 1.5s ease-in-out;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>All Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-success mb-3">Create Post</a>

        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-4">
                    <div class="post-card">
                        <h5><a href="{{ route('posts.show', $post->id) }}" class="text-decoration-none text-white">{{ $post->title }}</a></h5>
                        <p>{{ Str::limit($post->body, 150) }}</p>
                        <div class="button-group">
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Optional: Add Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

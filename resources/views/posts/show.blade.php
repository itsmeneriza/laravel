<!DOCTYPE html>
<html>

<head>
    <title>View Post</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-purple-50 text-gray-800 font-sans p-6">
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow">
        <h1 class="text-xl font-semibold">{{ $post->title }}</h1>
        <p class="mt-2">{{ $post->content }}</p>
        <a href="{{ route('posts.index') }}" class="mt-4 inline-block bg-purple-600 text-white px-4 py-2 rounded">Back to Posts</a>
    </div>
</body>

</html>

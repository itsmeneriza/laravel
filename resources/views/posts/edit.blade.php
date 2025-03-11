<!DOCTYPE html>
<html>

<head>
    <title>Edit Post</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-purple-50 text-gray-800 font-sans p-6">
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow">
        <h1 class="text-xl font-semibold mb-4">Edit Post</h1>
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-gray-600">Title:</label>
                <input type="text" name="title" value="{{ $post->title }}" required
                    class="mt-1 p-2 w-full border border-purple-300 rounded">
            </div>

            <div class="mb-4">
                <label for="content" class="block text-gray-600">Content:</label>
                <textarea name="content" required
                    class="mt-1 p-2 w-full border border-purple-300 rounded">{{ $post->content }}</textarea>
            </div>

            <button type="submit" class="bg-purple-600 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
</body>

</html>

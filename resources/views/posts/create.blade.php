<!DOCTYPE html>
<html>

<head>
    <title>Create Post</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-purple-50 text-gray-800 font-sans">

    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg w-full sm:w-96">

            <h1 class="text-xl font-bold text-center text-purple-700 mb-4">Create New Post</h1>
            <form action="{{ route('posts.store') }}" method="POST">

                <div class="mb-4">
                    <label for="title" class="block text-gray-600">Title:</label>
                    <input type="text" name="title" required class="mt-1 p-2 w-full border border-purple-300 rounded">
                </div>

                <div class="mb-4">
                    <label for="content" class="block text-gray-600">Content:</label>
                    <textarea name="content" required class="mt-1 w-full border border-purple-300 rounded"></textarea>
                </div>

                <button type="submit" class="w-full py-2 bg-purple-500 hover:bg-purple-600 text-white rounded">Create</button>
            </form>
        </div>
    </div>
</body>

</html>

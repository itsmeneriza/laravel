<!DOCTYPE html>
<html>

<head>
    <title>Post It</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-purple-50 text-gray-800 font-sans p-6">
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow">
        <h1 class="text-xl font-semibold mb-4">Post It</h1>
        <a href="{{ route('posts.create') }}" class="bg-purple-600 text-white px-4 py-2 rounded">Create New Post</a>

        <table class="w-full mt-4 border-collapse border border-purple-300">
            <tr class="bg-purple-200">
                <th class="p-2 border">Title</th>
                <th class="p-2 border">Actions</th>
            </tr>
            @foreach ($posts as $post)
            <tr class="border">
                <td class="p-2 border">{{ $post->title }}</td>
                <td class="p-2 border">
                    <a href="{{ route('posts.show', $post->id) }}" class="text-blue-600">View</a>
                    <a href="{{ route('posts.edit', $post->id) }}" class="text-green-600">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>

//added for display
<!DOCTYPE html>
<html>

<head>
    <title>Post It</title>
</head>

<body>
    <h1>Post It</h1>
    <a href="{{ route('posts.create') }}">Create New Post</a>

    <table>
        <tr>
            <th>Title</th>
            <th>Actions</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>
                <a href="{{ route('posts.show', $post->id) }}">View</a>
                <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trashed Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}

</head>

<body>

    <div class="container my-5">

        <h2>All Posts ({{ $posts->count() }})</h2>
        <a href="{{ route('posts.index') }}" class="btn btn-success">All Posts</a>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Deleted At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->deleted_at->diffForHumans() }}</td>
                        <td>
                            <a href="{{ route('posts.restore', $post->id) }}" class="btn btn-sm btn-primary">Restore</a>
                            <a href="{{ route('posts.forcedelete', $post) }}" class="btn btn-sm btn-danger">Deleted
                                Permanently</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No data found!</td>
                    </tr>
                @endforelse


            </tbody>
        </table>

        {{ $posts->withQueryString()->links() }}
    </div>

</body>

</html>

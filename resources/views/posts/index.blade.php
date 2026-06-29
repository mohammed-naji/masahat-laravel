<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}

</head>

<body>

    <div class="container my-5">
        {{-- @if (session('msg'))
            <div class="alert alert-success">
                {{ session('msg') }}
            </div>
        @endif --}}


        <h2>All Posts ({{ $posts->count() }})</h2>
        <a href="{{ route('posts.create') }}" class="btn btn-success">Add New Post</a>
        <a href="{{ route('posts.trash') }}" class="btn btn-danger">Trashed Posts</a>
        <hr>
        <form action="">
            <div class="row">
                <div class="col-10 col-md-11">
                    <input type="text" name="q" class="form-control" placeholder="Search about anything..."
                        value="{{ request()->q }}">
                </div>
                <div class="col-2 col-md-1">
                    <button class="btn btn-success w-100"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <hr>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- @if ($posts->count() > 0) --}}
                @forelse ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td><img src="{{ $post->image }}" width="80" class="img-thumbnail" alt=""></td>
                        <td>{{ $post->title }}</td>
                        <td>
                            <i class="far fa-calendar"></i> {{ $post->created_at->format('d , Y') }} <br>
                            <i class="far fa-clock"></i> {{ $post->created_at->format('h:i:s') }}
                        </td>
                        {{-- <td>{{ $post->updated_at->toDateString() }}</td> --}}
                        <td>{{ $post->updated_at->diffForHumans() }}</td>
                        <td>
                            <a data-bs-toggle="modal" data-bs-target="#post-{{ $post->id }}"
                                href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-primary">Show</a>
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-success">Edit</a>

                            {{-- <a href="{{ route('posts.destroy', $post->id) }}" class="btn btn-sm btn-danger">Delete</a> --}}

                            <form class="d-inline" action="{{ route('posts.destroy', $post->id) }}" method="post">
                                @csrf
                                @method('delete')

                                {{-- <button onclick="return confirm('Are you sure?!')"
                                    class="btn btn-sm btn-danger">Delete</button> --}}
                                <button class="btn btn-sm btn-danger btn-delete">Delete</button>
                            </form>

                            <div class="modal fade" id="post-{{ $post->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $post->title }}
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img class="w-100" src="{{ $post->image }}" alt="">
                                            <p>{!! $post->content !!}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No data found!</td>
                    </tr>
                @endforelse
                {{-- @else
                <tr>
                    <td colspan="6" class="text-center">No data found!</td>
                </tr>
                @endif --}}

            </tbody>
        </table>

        {{-- {{ $posts->appends($_GET)->links() }} --}}
        {{ $posts->withQueryString()->links() }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        let delete_btns = document.querySelectorAll('.btn-delete');

        delete_btns.forEach(btn => {
            btn.onclick = function(e) {
                e.preventDefault();
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        btn.closest('form').submit();
                    }
                });
            }
        });
    </script>
</body>

</html>

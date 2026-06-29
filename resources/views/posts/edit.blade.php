<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}
    <script src="https://cdn.tiny.cloud/1/q33q3e2ejf5cn0ap4wyy5fbnnwhs5z1hnv4zhr52ny222k0h/tinymce/8/tinymce.min.js"
        referrerpolicy="origin" crossorigin="anonymous"></script>

</head>

<body>

    <div class="container my-5">
        <h2>Edit Post ({{ $post->title }})</h2>
        <a href="{{ route('posts.index') }}" class="btn btn-success">All Posts</a>

        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')

            <x-input name="title" label="Title" :value="$post->title" />
            <x-input name="image" label="Image" type="file" :value="$post->image" />
            <textarea id="my-content" name="content">{{ $post->content }}</textarea>
            <button class="btn btn-success">Update</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        tinymce.init({
            selector: '#my-content'
        });

        let img_input = document.querySelector('input[name=image]')
        let prev = document.querySelector('#prev')

        img_input.onchange = (e) => {
            const [file] = img_input.files
            if (file) {
                prev.src = URL.createObjectURL(file)
            }
        }
    </script>
</body>

</html>

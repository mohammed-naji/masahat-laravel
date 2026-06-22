<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $post->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}

</head>

<body>

    <div class="container my-5 text-center">
        <h2>{{ $post->title }}</h2>
        <i class="far fa-calendar"></i> {{ $post->created_at }}
        <img class="d-block mx-auto my-4" src="{{ $post->image }}" alt="">
        <div>
            {{ $post->content }}
        </div>
    </div>
</body>

</html>

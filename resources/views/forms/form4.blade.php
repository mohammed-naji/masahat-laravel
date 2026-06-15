<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>Form Upload File</h1>
        <form action="{{ route('form4') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-input name="name" label="Name" />
            <x-input name="image" label="Image" type="file" />
            <button class="btn btn-success px-4">Upload File</button>
        </form>
    </div>
</body>

</html>

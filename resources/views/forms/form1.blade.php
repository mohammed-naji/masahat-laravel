<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        {{-- Cross Site Request Forge --}}
        <h1>Basic Form</h1>
        <form action="{{ route('form1') }}" method="POST">
            @csrf
            <input type="text" class="form-control mb-3" placeholder="Type anything here.." name="abc">
            <button class="btn btn-success">Go</button>
        </form>
    </div>
</body>

</html>

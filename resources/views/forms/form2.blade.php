<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Age Generation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>Check Generation</h1>
        <form action="{{ route('form2') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name..">
            </div>

            <div class="mb-3">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" name="dob" id="dob" placeholder="Your age..">
            </div>

            <button class="btn btn-primary px-5">Check</button>

        </form>
    </div>
</body>

</html>

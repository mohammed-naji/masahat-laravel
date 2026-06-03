<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
    <style>
        .box {
            width: 80%;
            margin: 50px auto;
            background-color: #fff2e6;
            padding: 20px;
            border-radius: 5px
        }
    </style>
</head>

<body>
    <div class="box">
        <p><strong>Name:</strong> {{ $name }} </p>
        <p><strong>Age in Years:</strong> {{ $years }} </p>
        <p><strong>Age in Months:</strong> {{ $months }} </p>
        <p><strong>Age in Days:</strong> {{ $days }} </p>
        <p><strong>Age in Hours:</strong> {{ $hours }} </p>
    </div>
</body>

</html>

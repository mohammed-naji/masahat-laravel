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
        <h1>Basic Form</h1>
        <form action="{{ route('form5') }}" method="POST">
            @csrf
            hobbies, education
            <x-input name="name" placeholder="Your Name" label="Name" />

            <div class="mb-3">
                <label>Gender</label> <br>
                <input @checked(old('gender') == 'Male') type="radio" name="gender" id="male" value="Male">
                <label for="male">Male</label> <br>
                <label><input @checked(old('gender') == 'Female') type="radio" name="gender" value="Female"> Female</label>
            </div>

            <div class="mb-3">
                <label>Hobbies</label> <br>
                <label><input @checked(in_array('Coding', old('hobbies') ?? [])) type="checkbox" name="hobbies[]" value="Coding">
                    Coding</label> <br>
                <label><input @checked(in_array('Cooking', old('hobbies') ?? [])) type="checkbox" name="hobbies[]" value="Cooking">
                    Cooking</label> <br>
                <label><input @checked(in_array('Eating', old('hobbies') ?? [])) type="checkbox" name="hobbies[]" value="Eating">
                    Eating</label> <br>
            </div>

            <div class="mb-3">
                <label for="education">Education</label>
                <select id="education" name="education" class="form-select">
                    <option @selected(old('education') == 1) value="1">High School</option>
                    <option @selected(old('education') == 2) value="2">Diploma</option>
                    <option @selected(old('education') == 3) value="3">Bachelor</option>
                    <option @selected(old('education') == 4) value="4">Master</option>
                    <option @selected(old('education') == 5) value="5">pHD</option>
                </select>
            </div>
            <button class="btn btn-success">Go</button>
        </form>
    </div>
</body>

</html>

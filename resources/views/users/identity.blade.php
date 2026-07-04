<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Find User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    {{-- <noscript>
        <p>اخوي فعل الجافاسكربت الله يرضى عليييك</p>
    </noscript> --}}

    <div class="container mt-5">
        <h1>Search By ID Number</h1>
        <form>
            <input name="id" class="form-control id-input" value="{{ request()->id }}"
                placeholder="type id number..">
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.18.1/axios.min.js"></script>
    <script>
        let input = document.querySelector('.id-input')
        input.onblur = function() {
            let text = input.value
            axios.get("{{ route('identity') }}?id=" + text)
                .then((res) => {
                    if (res.data.msg == 'User Found') {
                        alert(res.data.user.name)
                    }
                }).catch((err) => {

                });

            // fetch("{{ route('identity') }}?id=" + text, {
            //         headers: {
            //             'Accept': 'application/json'
            //         }
            //     })
            //     .then(res => res.json())
            //     .then(data => {
            //         if (data.msg == 'User Found') {
            //             alert(data.user.name)
            //         }
            //     })
        }
    </script>
</body>

</html>

{{-- @if ($user)
            <div class="mt-4 alert alert-success">
                <p><b>Name:</b> {{ $user->name }}</p>
                <p><b>Email:</b> {{ $user->email }}</p>
            </div>
        @endif --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register new User</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>

    <div class="max-w-5xl mx-auto mt-10">

        {{-- @dump($errors) --}}
        {{-- @dump($errors->any()) --}}

        @if ($errors->any())
            <div class="bg-red-100 rounded p-4 text-red-800">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <h1 class="font-semibold text-3xl mb-6">Register User</h1>

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <input type="text" class="block border w-full mb-3 p-3 py-2 rounded border-gray-400" name="name"
                placeholder="Your Name..">
            <input type="email" class="block border w-full mb-3 p-3 py-2 rounded border-gray-400" name="email"
                placeholder="Your Email..">
            <input type="text" class="block border w-full mb-3 p-3 py-2 rounded border-gray-400" name="phone"
                placeholder="Your Phone..">
            <input type="password" class="block border w-full mb-3 p-3 py-2 rounded border-gray-400" name="password"
                placeholder="Your Password.." autocomplete="new-password">
            <input type="password" class="block border w-full mb-3 p-3 py-2 rounded border-gray-400"
                name="password_confirmation" placeholder="Your Password Confirmation..">

            <button
                class="bg-blue-500 text-white px-10 cursor-pointer py-2 rounded hover:bg-blue-700 duration-200">Register</button>
        </form>
    </div>


    <script>
        // document.oncontextmenu = function() {
        //     return false;
        // }
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>Form Validation</h1>
        {{-- Show the global errors --}}
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        <form action="{{ route('form3') }}" method="POST">
            @csrf

            <x-input name="name" placeholder="Your Name.." label="Name" />
            <x-input name="email" placeholder="Your Email.." type="email" label="Email" />
            <x-input name="subject" placeholder="Your Subject.." label="Subject" />

            {{-- <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your name.."
                    class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                @error('name')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div> --}}

            {{-- <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Your email.."
                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                @error('email')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div> --}}

            {{-- <div class="mb-3">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="Your subject.."
                    class="form-control @error('subject') is-invalid @enderror" value="{{ old('subject') }}">
                @error('subject')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div> --}}

            <div class="mb-3">
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Your message.."
                    class="form-control @error('message') is-invalid @enderror" rows="5">{{ old('message') }}</textarea>
                @error('message')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <button class="btn btn-success px-5">Send</button>
        </form>
    </div>
</body>

</html>

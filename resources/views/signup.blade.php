<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <h1>Registrasi</h1>
    <form action="{{ route('registrasi-user') }}" method="post">
        @csrf
        <label for="name">Name :</label><br>
        <input type="text" name="name" id="name" required><br>
        <label for="email">Email :</label><br>
        <input type="email" name="email" id="email" required><br>
        <label for="password">Password :</label><br>
        <input type="password" name="password" id="password" required><br><br>
        <input type="submit" value="Registrasi">
        <br><br>
        <a href="{{ route('signin') }}">Kembali ke halaman sign in</a>
    </form>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>
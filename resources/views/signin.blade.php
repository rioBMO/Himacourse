<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="{{ route('login') }}" method="post">
        @csrf
        <label for="email">Email :</label><br>
        <input type="email" name="email" id="email" required><br>
        <label for="password">Password :</label><br>
        <input type="password" name="password" id="password" required><br><br>
        <input type="submit" value="Login">
        <p>Belum punya akun? <a href="{{ route('signup') }}">Buat akun disini!</a></p>
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
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <a href="{{ url('/') }}" class="button">Kembali ke Halaman Utama</a>
    <h1>Login</h1>
    <form action="{{ url('/login') }}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    @if ($errors->any())
        <div>{{ $errors->first() }}</div>
    @endif
</body>
</html>
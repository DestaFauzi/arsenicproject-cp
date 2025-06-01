<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
</head>
<body>
    <h1>Registrasi</h1>
    <form action="{{ url('/register') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nama" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>
        <select name="role" required>
            <option value="user">Pengguna</option>
            <option value="admin">Admin</option>
        </select>
        <button type="submit">Daftar</button>
    </form>
</body>
</html>
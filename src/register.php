<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Azrn_Halaman Register</title>
</head>
<body>
    <h1>Register Akun</h1>
    <form action="services/register.php" method="post">
        <label for="Name">Name</label>
        <input type="text" name="Name" id="Name"><br>
        <label for="Email">Email</label>
        <input type="email" name="Email" id="Email"><br>
        <label for="password">Password</label>
        <input type="Password" name="password" id="password"><br>
        <label for="password-konfirmasi">Password konfirmasi</label>
        <input type="password" name="password-konfirmasi" id="password-konfirmasi"><br>
        <label for="roles">Pilih roles</label>
        <select name="roles" id="roles">
            <option value="admin">Admin</option>
            <option value="staff">staff</option>
            <option value="kasir">Kasir</option>
            <option value="users">User</option>
        </select><br>
        <button type="submit" name="register">Register</button>
    </form>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <h1>Register</h1>
            <form action="./backend/register.php" method="post">
                <input type="text" name="name" placeholder="masukkan nama anda">
                <input type="email" name="email" placeholder="masukkan email anda">
                <input type="password" name="password" placeholder="masukkan password anda">
                <input type="password" name="confirm" placeholder="masukkan konfirmasi password anda">
                <input type="submit" value="login" name="submit">
            </form>
        </div>
    </div>
</body>

</html>
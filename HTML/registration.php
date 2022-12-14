<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/registration.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <form action="" id="form-register" method="get">
            <h2>Sign Up To, ROAM</h2>
            <div>
                <label for="">Nama : </label>
                <input type="text"  name="nama" id="nama">
            </div>
            <div>
                <label for="">Username : </label>
                <input type="text"  name="username" id="username">
            </div>
            <div>
                <label for="">Password : </label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <label for="">Re-enter Password : </label>
                <input type="password" name="repassword" id="repassword">
            </div>
            <button name="register" id="btn-register" type="submit">Submit</button>
            <div>
                Already have an account? <a href="../index.html">Login</a>
            </div>
        </form>
    </div>
    <script src="../JS/user.js"></script>
</body>
</html>
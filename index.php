<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/CSS/login.css">
    <title>Sign In</title>
</head>
<body>
    <div class="container">
    <form action="" id="form-login" class="form-login" method="get">
        <h2>Sign In To, ROAM</h2>
        <div>
            <label for="">Username : </label>
            <input type="text" id="username" name="username">
        </div>
        <div>
            <label for="">Password : </label>
            <input type="password" id="password" name="password">
        </div>
        <button name="login" id="btn-login" type="submit">Sign In</button>
        <div>
        Don't have an account? <a href="/HTML/registration.html">Register</a>
        </div>
    </form>
</div>
<script src="./JS/user.js"></script>
</body>
</html>

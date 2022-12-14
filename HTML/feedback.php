<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/feedback.css">
    <title>Feedback Form</title>
</head>
<body>
    <div class="container">
    <form id="form-feedback" action="../proses_feedback.php" method="POST">
        <h2>Feedback</h2>
        <div>
            <label for="">Kritik : </label>
            <textarea name="kritik" id="kritik" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="">Saran : </label>
            <textarea name="saran" id="saran" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="">Rating : </label>
            1 <input type="range" name="rating" id="rating" min="0" max="5" step="1"> 5
        </div>
        <button name="feedback">Submit</button>
    </form>
    </div>
    <!-- <script src="../JS/feedback.js"></script> -->
</body>
</html>
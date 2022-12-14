<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
<link rel="import" href="../navbar.html">
    <link rel="stylesheet" href="../CSS/pengaduan.css">
    <title>Form Pengaduan</title>
</head>
<body>
    <div class="container">
    <form id="form-pengaduan" name="form-pengaduan" action="../prosesPengaduan.php" method="POST">
        <h2>Form Pengaduan</h2>        
        <div>
            <label for="">Pilihan Pengaduan : </label>
            <select name="pilihan" id="pilihan">
                <option value="">Pilih Pengaduan</option>
                <option value="Jalan Berlubang">Jalan Berlubang</option>
                <option value="Penutupan Jalan">Penutupan Jalan</option>
                <option value="Perbaikan Jalan">Perbaikan Jalan</option>
            </select>
        </div>
        <div>
            <label for="">Foto : </label>
            <input type="file" name="foto" id="foto">
        </div>
        <div>
            <label for="">Waktu : </label>
            <input type="time" name="waktu" id="waktu">
        </div>
        <div>
            <label for="">Tanggal : </label>
            <input type="date" name="tanggal" id="tanggal">
        </div>
        <div>
            <label for="">Deskripsi : </label>
            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
        </div>
        <button name="submitpengaduan">Submit</button>
    </form>
    </div>
    <!-- <script src="../JS/pengaduan.js"></script> -->
</body>
</html>


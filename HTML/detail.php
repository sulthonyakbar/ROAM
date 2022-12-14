<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/detail.css">
    <title>Detail Marking</title>
</head>
<body>
    <div class="container">
      <form id="form-detail" action="" method="post">  
      <h2>Form Detail Marking</h2>
      <div class="mapouter">
          <div class="gmap_canvas">
            <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=surabaya&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            <a href="https://piratebay-proxys.com/">Pirate proxy</a>
          </div>
            <style>
              .mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}
            </style>
          </div>
          <div>
            <label for="">Alamat</label>
            <textarea name="alamat" id="alamat"></textarea>
          </div>
          <div>
            <label for="">Koordinat</label>
            <input type="text" name="koordinat1" id="koordinat1">
            <input type="text" name="koordinat2" id="koordinat2">
          </div>
          <button name="detail">Submit</button>
        </form>
        </div>
<script src="../JS/detail.js"></script>
</body>
</html>
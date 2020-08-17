<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <title>Document</title>
  <style>
    #capture {
    color: <?php echo $color;
    ?>;
    font-family: <?php echo $font_family;
    ?>;
    font-size: 100px;
    }
    #capture {
    width: 1280px;
    height: 720px;
    background: <?php echo $bgcolor; ?>;
    position: relative;
    }
    h3 {
      font-size: 50px;
      position: absolute;
      top: 200px;
      left: 20px;
    }
    .photo {
      width: auto;
      height: 150px;
      text-align: right;
      position: absolute;
      bottom: 50px;
      right: 20px;
    }
  </style>
</head>
<body onload="savesave()">
  <h1>完成結果</h1>

  <div id="capture">
    <h3><?php echo $name; ?></h3>
    <p><img class="photo" src="./img/<?php echo $upload_file['name']; ?>"></p>
  </div>
  <img src="" alt="" id="image">

  <script src="./js/html2canvas.js"></script>
  <script type="text/javascript">
    html2canvas(document.querySelector("#capture")).then(canvas => {
      var imageData = canvas.toDataURL();
      document.getElementById('image').setAttribute("src",canvas.toDataURL());
    });
  </script>
</body>
</html>
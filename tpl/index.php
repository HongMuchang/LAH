<!DOCTYPE html>
<html lang='ja'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body>
    <div class="card">
        <div>
            <div class="card_list">
                <form action="save.php" method="post" enctype="multipart/form-data">
                <!-- 文章 -->
                文字<input type="text" name="name"><br>
                <!-- カラーの調整 -->
                <label>フォントの色<input type="color" name="color"></label><br>
                <!-- フォントの調整 -->
                <?php foreach ($ary as $key => $value):?>
                    <input type="radio" name="font_family" value=<?php echo $key;?> checked><?php echo $value; ?>
                <?php endforeach; ?>
                <br>
                <!-- カラーの調整 -->
                <label>背景の色<input type="color" name="bg_color"></label><br>
                <!-- ファイルアップロード -->
                ファイル<input type="file" name="upload_file">
                <br>
                <input type="submit" value="送信">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
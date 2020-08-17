<?php

$name = $_POST["name"];//文章
$color = $_POST['color'];//文字色
$bgcolor = $_POST['bg_color'];//文字色
$font_family=$_POST["font_family"];//文字スタイル

//ファイルアップロード
$upload_file = $_FILES['upload_file'];
move_uploaded_file($upload_file['tmp_name'], "./img/" . $upload_file['name']);
$change_ary = explode(".", $upload_file['name']);

require_once './tpl/save.php';
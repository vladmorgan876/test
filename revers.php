<!DOCTYPE>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" >
    <title>revers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<button  class="button1"><a  href="str.php">назад</a></button>
</body>
</html>
<?php
$str=$_POST['str'];
$str2=strrev ( $str );
echo '<div class="text"><p>'.$str2.'</p></div>';
echo '<hr>';
$reversstring='';
for ($i=strlen($str);$i>=0;$i--){
    $reversstring=$str[$i];
    echo $reversstring;
}
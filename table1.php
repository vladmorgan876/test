<!DOCTYPE>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport">
    <title>table 1</title>
    <link rel="stylesheet" href="style.css">
    <p style="font-size:20px"><a href="index.php">на главную</a></p>
    <a href="https://github.com/vladmorgan876/test/commit/41f06a23f25aea26c920297b5a11022b455dca0b">ссылка на GITHUB/commit</a>
</head>
<body>


</body>
</html>
<?php
echo '<table>';
echo '<tr>';
for ($a=1;$a<=5;$a++){
    echo '<td>';
    for($i=1;$i<=10;$i++){
        echo $a.'*'.$i.'='.$a*$i.'<br>';
    }
}
echo '</td>';
echo '</tr>';
echo '<tr>';
for ($a=6;$a<=10;$a++){
    echo '<td>';
    for($i=1;$i<=10;$i++){
        echo $a.'*'.$i.'='.$a*$i.'<br>';
    }
}
echo '</td>';
echo '</tr>';
echo '</table>';






<!DOCTYPE>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport">
    <title>table 2</title>
    <link rel="stylesheet" href="style.css">
    <p style="font-size:20px"><a href="index.php">на главную</a></p>
    <a href="">ссылка на GITHUB/commit</a>
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
    $mult=$a*$i;
    $mult=(string)$mult;
    $mult1=$mult[0];
    $mult2=$mult[1];
        $col=[1=>'red',2=>'green',3=>'yellow',4=>'blue',5=>'cyan',6=>'magenta',7=>'orchid',8=>'Tomato',9=>'GreenYellow',0=>'SandyBrown'];
        $search_array = array('first' => 1, 'second' => 4);
        if (array_key_exists($a, $col)) {
            if (array_key_exists($i, $col)){
                echo "<span style='color: $col[$a]'>".$a.'</span>'.'*'."<span style='color: $col[$i]'>".$i.'</span>>'.'='."<span style='color: $col[$mult1]'>".$mult1.'</span>'."<span style='color: $col[$mult2]'>".$mult2.'</span>'.'<br>';
            }
        }
    }
}
echo '</td>';
echo '</tr>';
echo '<tr>';
for ($a=6;$a<=10;$a++){
    echo '<td>';
    for($i=1;$i<=10;$i++){
        $mult=$a*$i;
        $mult=(string)$mult;
        $mult1=$mult[0];
        $mult2=$mult[1];
        $col=[1=>'red',2=>'green',3=>'yellow',4=>'blue',5=>'cyan',6=>'magenta',7=>'orchid',8=>'Tomato',9=>'GreenYellow',0=>'SandyBrown',10=>'Pink'];
        $search_array = array('first' => 1, 'second' => 4);
        if (array_key_exists($a, $col)) {
            if (array_key_exists($i, $col)){
                echo "<span style='color: $col[$a]'>".$a.'</span>'.'*'."<span style='color: $col[$i]'>".$i.'</span>>'.'='."<span style='color: $col[$mult1]'>".$mult1.'</span>'."<span style='color: $col[$mult2]'>".$mult2.'</span>'.'<br>';
            }
        }
    }
}
echo '</td>';
echo '</tr>';

echo '</table>';






<!DOCTYPE>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport">
    <title>table 2</title>
    <link rel="stylesheet" href="style.css">
    <p style="font-size:20px"><a href="index.php">на главную</a></p>
    <a href="https://github.com/vladmorgan876/test/commit/a5266a134311f4aaaa25689d0098e129adc38686">ссылка на GITHUB/commit</a>

</head>
<body>


</body>
</html>
<?php
echo '<table>';
echo '<tr>';
for ($a = 1; $a <= 5; $a++) {
    echo '<td>';
    for ($i = 1; $i <= 10; $i++) {
        $mult = $a * $i;
        $mult = (string)$mult;
        $mult1 = $mult[0];
        $mult2 = $mult[1];
        $col = [1 => 'red', 2 => 'green', 3 => 'yellow', 4 => 'blue', 5 => 'cyan', 6 => 'magenta', 7 => 'orchid', 8 => 'Tomato', 9 => 'GreenYellow', 0 => 'SandyBrown'];
        if ($i > 9) {
            $i = (string)$i;
            $i1 = $i[0];
            $i2 = $i[1];
            if (array_key_exists($i1, $col)) {
                if (array_key_exists($i2, $col)) {
                    echo "<span style='color: $col[$a]'>" . $a . '*' . "<span style='color: $col[$i1]'>" . $i1 . '</span>' . "<span style='color: $col[$i2]'>" . $i2 . '</span>' . '=' . "<span style='color: $col[$mult1]'>" . $mult1 . '</span>' . "<span style='color: $col[$mult2]'>" . $mult2 . '</span>' . '<br>';
                }
            }
        }
        $col = [1 => 'red', 2 => 'green', 3 => 'yellow', 4 => 'blue', 5 => 'cyan', 6 => 'magenta', 7 => 'orchid', 8 => 'Tomato', 9 => 'GreenYellow', 0 => 'SandyBrown'];
        if (array_key_exists($a, $col)) {
            if (array_key_exists($i, $col)) {
                echo "<span style='color: $col[$a]'>" . $a . '</span>' . '*' . "<span style='color: $col[$i]'>" . $i . '</span>>' . '=' . "<span style='color: $col[$mult1]'>" . $mult1 . '</span>' . "<span style='color: $col[$mult2]'>" . $mult2 . '</span>' . '<br>';
            }
        }
    }
}
echo '</td>';
echo '</tr>';
echo '<tr>';
for ($a = 6; $a <= 10; $a++) {
    echo '<td>';
    for ($i = 1; $i <= 10; $i++) {
        $mult = $a * $i;
        $mult = (string)$mult;
        $mult1 = $mult[0];
        $mult2 = $mult[1];
        $mult3 = $mult[2];
        $col = [1 => 'red', 2 => 'green', 3 => 'yellow', 4 => 'blue', 5 => 'cyan', 6 => 'magenta', 7 => 'orchid', 8 => 'Tomato', 9 => 'GreenYellow', 0 => 'SandyBrown'];
        if ($a > 9) {
            $a = (string)$a;
            $a1 = $a[0];
            $a2 = $a[1];
            if (array_key_exists($a1, $col)) {
                if (array_key_exists($i, $col)) {
                    echo "<span style='color: $col[$a1]'>" . $a1 . '</span>' . "<span style='color: $col[$a2]'>" . $a2 . '</span>' . '*' . "<span style='color: $col[$i]'>" . $i . '</span>>' . '=' . "<span style='color: $col[$mult1]'>" . $mult1 . '</span>' . "<span style='color: $col[$mult2]'>" . $mult2 . '</span>' . '<br>';
                }
            }
        }
        if ($i > 9 || $a > 9) {
            $i = (string)$i;
            $i1 = $i[0];
            $i2 = $i[1];
            $a = (string)$a;
            $a1 = $a[0];
            $a2 = $a[1];
            if (array_key_exists($i1, $col)) {
                if (array_key_exists($i2, $col)) {
                    echo "<span style='color: $col[$a1]'>" . $a1 . '</span>' . "<span style='color: $col[$a2]'>" . $a2 . '</span>' . '*' . "<span style='color: $col[$i1]'>" . $i1 . '</span>' . "<span style='color: $col[$i2]'>" . $i2 . '</span>' . '=' . "<span style='color: $col[$mult1]'>" . $mult1 . '</span>' . "<span style='color: $col[$mult2]'>" . $mult2 . '</span>' . "<span style='color: $col[$mult3]'>" . $mult3 . '</span>' . '<br>';
                }
            }
        }
        if (array_key_exists($a, $col)) {
            if (array_key_exists($i, $col)) {
                echo "<span style='color: $col[$a]'>" . $a . '</span>' . '*' . "<span style='color: $col[$i]'>" . $i . '</span>>' . '=' . "<span style='color: $col[$mult1]'>" . $mult1 . '</span>' . "<span style='color: $col[$mult2]'>" . $mult2 . '</span>' . '<br>';
            }
        }

    }
}
echo '</td>';
echo '</tr>';

echo '</table>';






<?php
$min_value = 10;
$max_value = 20;
$precison = 3;
$x = 5;
$encounting = 20;
$step = 2;
$type = 'E';
if ($type == 'A') {
    echo '';
}
if ($type == 'B') {
    echo '<ul>';
}
if ($type == 'C') {
    echo '<ol>';
}
if ($type == 'D') {
    echo '<table border="1px">';
    echo '<tr>';
}
if ($type == 'E') {
    echo '<div class="etype">';
}

for ($i = 0; $i <= $encounting; $i++, $x += $step) {
    if ($x <= 10) {
        $f = 10 * $x - 5;
    } else {
        if ($x == 25) {
            $f = 'error';
        } else if ($x > 10 && $x < 20) {
            $f = (($x + 3) * ($x ** 2));
        } else {
            $f = 3 / ($x - 25);
        }
    }

    switch ($type) {
        case 'A':
            if ($f != "error") {
                $f = (float)$f;
                echo 'f(' . $x . ')=' . round($f, $precison).'<br>';                   // выводим аргумент и значение функции
            } else {
                echo 'f(' . $x . ')=' . $f.'<br>';
            }
            
            break;
        case 'B':
            if ($f != "error") {
                $f = (float)$f;
                echo '<li>f(' . $x . ')=' . round($f, $precison) . '</li>';                   // выводим аргумент и значение функции
            } else {
                echo '<li>f(' . $x . ')=' . $f . '</li>';
            }
            break;
        case 'C':
            if ($f != "error") {
                $f = (float)$f;
                echo '<li>f(' . $x . ')=' . round($f, $precison) . '</li>';                   // выводим аргумент и значение функции
            } else {
                echo '<li>f(' . $x . ')=' . $f . '</li>';
            }
            break;
        case 'D':
            
                if ($f != 'error') {
                    $f = (float)$f;
                    echo '<tr><td>' . $i . '</td><td>argument = ' . $x . '</td><td>f(' . $x . ') = ' . round($f, $precison) . ' </td></tr>';
                } else {
                    echo '<tr><td>' . $i . '</td><td>argument = ' . $x . '</td><td>f(' . $x . ') = ' . $f . '</td></tr> ';
                }
            break;
        case 'E':
            if ($f != "error") {
                $f = (float)$f;
                echo '<div class="typee">f(' . $x . ')=' . round($f, $precison) . '</div>';

            } else {

                echo '<div class="typee">f(' . $x . ')=' . $f . '</div>';

            }
    }
}

if ($type == 'A') {
    echo '<br>';
}
if ($type == 'B') {
    echo '</ul>';
} else if ($type == 'C') {
    echo '</ol>';
} else if ($type == 'D') {
    echo '</tr>';
    echo '</table>';
}
?>
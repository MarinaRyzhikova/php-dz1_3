<?php
//$variable = [];
// $variable = 3;
$variable = 'one';
// $variable = true;
// $variable = null;
//$variable = [];

if (is_int($variable)) {
    echo 'int';
} else if (is_bool($variable)) {
    echo 'bool';
} else if (is_float($variable)) {
    echo 'float';
} else if (is_string($variable)) {
    echo 'string';
}else if (is_null($variable)) {
    echo 'null';
}else {
    echo 'other';
}

echo PHP_EOL;

$variabletwo = [];
//$variabletwo  = 3;
//$variabletwo  = 'one';
//$variabletwo  = true;
//$variabletwo  = null;


switch (true) {
    case is_int($variabletwo):
        echo 'int';
        break;
    case is_bool($variabletwo):
        echo 'bool';
        break;
    case is_float($variabletwo):
        echo 'float';
        break;
    case is_string($variabletwo):
        echo 'string';
        break;
    case is_null($variabletwo):
        echo 'null';
        break;
    default:
        echo 'other';
}

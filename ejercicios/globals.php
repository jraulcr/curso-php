
<?php
$a = 1;
$b = 2;

function Suma()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];

    print_r($GLOBALS);
}

Suma();
echo $b;
?>

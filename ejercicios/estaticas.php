<?php 

function test() {
	//$a = 0;
/*	 static $a = 0;
	echo $a;
	$a++;*/

    static $count = 0;

    $count++;
    echo $count;
    if ($count < 10) {
        test();
    }
    $count--;
	
}

echo test();
?>
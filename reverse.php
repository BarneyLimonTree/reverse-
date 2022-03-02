<?php
	function reverse () {
		$a = '12345';
		$b = str_split($a, 1);
		$c = array_reverse($b);
		$f = implode('', $c);
		echo($f);
	}
	reverse();











?>
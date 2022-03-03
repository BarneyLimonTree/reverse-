<form action="" method="GET">
	<input placeholder="Введите сюда число" type="text" name="number">
	<input type="submit">
</form>


<?php

	$r = $_GET['number'] ;
	echo $r;
	function reverse (&$r) {
		$b = str_split($r, 1);
		$c = array_reverse($b);
		$f = implode('', $c);
		echo($f);
	};
	echo "<br>";
	reverse ($r);










?>
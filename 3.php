<?php

function createTri($ttl) {
	echo "<pre>";
	for($i=0; $i<$ttl; $i++){
		$br = str_repeat(" ", $ttl-$i);
		$tri = str_repeat("*", ($i)*2+1);
		echo $br.$tri."<br>";
	}
	echo "</pre>";
}

echo createTri(5);

?>
<?php
	$items = array("あか","あお","きいろ","みどり","むらさき","だいだい");
	for($i = 0;$i<count($items);$i++){
		echo "$items[$i],";
	}
	
	$items2 = array("A","B","C","D","E","F");
	
	foreach($items2 as $n){
		echo "$n,";
	}
	
	echo "<br>";
	
	$items3 = array("りんご" => 10,
					"ぶどう" => 20,
					"パイン" => 500);
	foreach($items3 as $a => $b){
		echo "$a"."は"."$b"."ポイントです。<br>";
	}
?>
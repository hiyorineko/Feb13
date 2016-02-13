<?php
/*
	$deka = 30;
	$chiisa = 20;
	$chuukurai = 30;
	$docchika = ($deka > $chiisa) ? $deka : $chiisa;
	var_dump($docchika);
	echo "<br>";
	
	$box = ["あかいの"=>"りんご","あおいの"=>"ユンピョウ","みどりいの"=>"マナマナ"];
	?>
	<ul>
		<?php foreach($box as $colors => $whats) :?>
		<li><?php echo "$colors → $whats";?></li>
		<?php endforeach; ?>
	</ul>
*/

	$tamatteru = false;
	
	function minuki($hantei){
		if($hantei){
			echo "しょうがないにゃあ。いいよ<br>";
		}else{
			echo("ためてきて<br>");
		}
	}
	/*
	function minuki2(){
		if($tamatteru){
			echo "しょうがないにゃあ。いいよ<br>";
		}else{
			echo("ためてきて<br>");
		}
	}
	
	minuki2();
	*/
	minuki($tamatteru);
	$tamatteru = true;
	minuki($tamatteru);
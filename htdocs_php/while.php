<?php
	
	$num = 1;
	while( $num < 10 ) {

		$num++;

		if($num == 3) {
			continue;
		}

		echo "$num <br />";
		//$num++;

		/*if($num == 5) {
			break;
		}*/
	}

?>
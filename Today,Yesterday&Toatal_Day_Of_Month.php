<?php

	function date_1() {
		$today=date('d');
		echo "Today's date - $today<br>";
		$yesterday=date('d',strtotime("-1 days"));
		echo "Yesterday's date - $yesterday<br>";	
		$total_days=date('t');
		//$my_date=array("$today",$yesterday,$total_days);
		//print_r($my_date);
		echo "Total days in current month -" . " " . $total_days;
	}
	date_1();	
	
?>
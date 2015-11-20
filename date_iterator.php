<?php

/*$begin = new DateTime( '2015/06/01' );
$end = new DateTime( '2015/06/30' );
$end = $end->modify( '+1 day' ); 

$interval = new DateInterval('P1D');
$daterange = new DatePeriod($begin, $interval ,$end);

foreach($daterange as $date){
    echo $date->format("Y-m-d") . "<br>";
	
}*/
	function Date_Manager() {
	
	$date_d='2015/06/01';
		
			$begin = new DateTime($date_d);
			$end = new DateTime('2015/06/30');
			$end = $end->modify( '+1 day' ); 

			$interval = new DateInterval('P1D');
			$daterange = new DatePeriod($begin, $interval ,$end);

			foreach($daterange as $date){
    			echo $date->format("Y/m/d")."<br>";
			}
		}
		
		Date_Manager();
?> 

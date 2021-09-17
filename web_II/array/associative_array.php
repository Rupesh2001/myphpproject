  

<?php
	//Create associative array which stores model, color, price, mfd_year, cc, no_of_seats of a Car and display it using loop.
	
	$car = array("model"=>"911 gt3","color"=>"green","price"=>120000,"mfd_year"=>2019,"cc"=>1000,"no_of_seats"=>2);
	
	foreach ($car as $info)
		echo "$info ";
?>
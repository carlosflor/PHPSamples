<?php
/*this function will return how many heavy numbers are there in the an array.
a heavy number is calculated by adding together all of the component 
digits and then dividing by the number of components. If the average is greater than 7, the number is considered heavy.*/
function how_many_heavy($num){
$long=count($num);
$heavy=0;

	for($i=0;$i<$long;$i++){
		$rest=0;
		$acu=0;
		$cont=0;		
		while($num[$i]>0){
			$rest=$num[$i]%10;
			$acu+=$rest;
			$num[$i]=((int)($num[$i]/10));
			$cont++;
		}
		if(($acu/$cont)>7)
		$heavy++;	
	}
	echo 'there is '.$heavy.' heavy numbers';
	
	
}
$quant=array(98,8,96,7,454,21,8);
how_many_heavy($quant);
?>
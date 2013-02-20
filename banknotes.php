<?php

function desc($cantidad,$billetes){ //The function will return the number of banknotes that are needed to pay a price.
$long=count($billetes);
$numbill=0;
	for($i=0;$i<$long;){ 
		if($cantidad>=$billetes[$i]){ 
			$cantidad-=$billetes[$i];  
			$numbill++;
		}
		else{
			if($numbill>0)
				echo $numbill.' unit(s) of '.$billetes[$i].' banknote<br/>'; //show the quantity needed of a banknote
			$i++;
			$numbill=0;
		}
	}
}
$billetes=array(500,200,100,50,20,10,5); //the different euro banknotes
desc($_POST['cantidad'],$billetes);

?>
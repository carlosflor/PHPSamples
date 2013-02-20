<?php

function desc($cantidad,$billetes){
$long=count($billetes);
$numbill=0;
	for($i=0;$i<$long;){
		if($cantidad>=$billetes[$i]){
			$cantidad-=$billetes[$i]; 
			$numbill++;
			
		}
		else{
			if($numbill>0)
				echo $numbill.' unit(s) of '.$billetes[$i].' banknote<br/>';
			$i++;
			$numbill=0;
		}
		
	}




}
$billetes=array(500,200,100,50,20,10,5);
/*descomposicion($_POST['cantidad']);*/
desc($_POST['cantidad'],$billetes);



?>
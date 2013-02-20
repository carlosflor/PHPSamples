<?php
/*
This function return wether a sentence is palindrome or not
*/
function palindromo ($frase){
$es_p=true;
$i=0;
$j=strlen($frase)-1;
	while($es_p && $i<$j){
		$es_p=($frase{$i}==$frase{$j});
		$i++;
		$j--;
	}

return $es_p;	
	
}

$palabra='race2car';
if(palindromo($palabra)==true){
echo $palabra.' is a palindrome';
}
else{
echo $palabra.' is not a palindrome';
}

?>
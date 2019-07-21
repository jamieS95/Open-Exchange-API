<?php
if ($_GET['param1'] == 'information'){
	$myObj->supportedversions = array('0.0.0.9','1.0.0.0');  
	$myJSON = json_encode($myObj); 
	echo $myJSON;
}else{
	if($_GET['param2'] == '0.0.0.9'){
		
		
	}
}



 



?>
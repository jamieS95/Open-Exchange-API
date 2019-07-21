<?php
if (isset() && ($_GET['param1'] == 'information')){
	$myObj->supportedversions = array('0','1');  
	$myJSON = json_encode($myObj); 
	echo $myJSON;
}else{
	if($_GET['param2'] == '0'){
		switch($_GET['param3']){
			case 'coinlist':
			
				break;
			case 'tradingpairs':
			
				break;
			case 'account':
			
				break;
			case 'neworder':
			
				break;
			case 'dummyorder':
			
				break;
			default:
				$myObj->error = true;  
				$myJSON = json_encode($myObj); 
				echo $myJSON;				
		}
		
	}else{
		$myObj->error = true;  
		$myJSON = json_encode($myObj); 
		echo $myJSON;		
	}
}


 
?>
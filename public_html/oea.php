<?php
function errorjson($errormsg){
	return json_encode(array('error' => 1,'errormsg'=>$errormsg));
}






if (!isset($_GET['version']) && ($_GET['action'] == 'information')){
	$myObj = new \stdClass();
	$myObj->supportedversions = array('1');
	$myObj->error = false;
	$myObj->errormsg = '';
	die(json_encode($myObj));
}else{
	if($_GET['version'] == '1'){
		switch($_GET['action']){
			case 'coinlist':
				die(json_encode(array('error' => 1,'errormsg'=>'coinlist')));
				break;
			case 'tradingpairs':
				die(json_encode(array('error' => 1,'errormsg'=>'tradingpairs')));			
				break;
			case 'account':
				die(json_encode(array('error' => 1,'errormsg'=>'account')));			
				break;
			case 'neworder':
				die(json_encode(array('error' => 1,'errormsg'=>'neworder')));			
				break;
			case 'dummyorder':
				die(errorjson('dummyorder'));		
				break;
			default:
				die(errorjson('no such action with this version'));				
		}
		
	}else{
		die(errorjson('version not supported'));
	}
}






?>
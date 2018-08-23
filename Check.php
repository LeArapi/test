<?php declare(strict_types=1); # -*- coding: utf-8 -*-

namespace Check;
/*
*This class is maden static in order to be used as librar component
*and not to be more than one instances in memory.
*There is private member with the proper action names in a string array
*/
final class Check {
	
/** private member with the proper action names in a string array */
private static checkType=['action1',
			'action2..'
];
/** public functions that checks if the action that is passed is propre, 
* as well as the $_POST['name_of_nonce_field'] */
public static function cleanInput($name_of_nonce_field='default',$action){
	
	if(!isset(checkType[$action])|| !isset($_POST[checkType[$name_of_nonce_field]] ) ||! wp_verify_nonce( $_POST[$name_of_nonce_field], $action ) ){
		print 'Sorry, your nonce did not verify.';
		exit;
		
	} else {

   // process form data
	}
	
}//end of function


}//end of class
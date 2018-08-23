# test
Hirring Test

This project creates a composer package, which serves the functionality working with WordPress Nonces. 
That means that initially in the form there is a section with
/*
form method="post" action="Action.php"
   <!-- some inputs here ... -->
   php wp_nonce_field( 'name_of_my_action', 'name_of_nonce_field' ); 
/form
*/
The form is submitted at the Action.php page that is using the Check class.
The Check class uses the wp_nonce_*() function
in order to achieved a more object oriented approach of the validation
functionallity

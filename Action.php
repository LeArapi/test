<?php declare(strict_types=1); # -*- coding: utf-8 -*-

namespace Action;

use Check;

/*
*This class is called when the form is submitted
*Then it is called the Check class to verify the nonce
*field name and action name and data as well
*
*/
class Action {

Check::cleanInput('name_of_nonce_field','action');


}
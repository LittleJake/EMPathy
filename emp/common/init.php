<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jake
 * Date: 10/5/2018
 * Time: 2:32 PM
 */

define('EMP', realpath(' /'));
define('CONF', EMP.'config/');

include CONF.'config.php';

if(DEBUG)
    ini_set('display_errors', 'On');
else
    ini_set('display_errors', 'Off');

include CORE.'common/func.php';
include CORE.'emp.php';


spl_autoload_register('\emp\emp::load');


<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jake
 * Date: 10/5/2018
 * Time: 2:32 PM
 */

define('CONF', EMP.'config/');

require CONF.'config.php';
require CORE.'common/func.php';
require CORE.'EMPathy.php';

//DB
$db = require CONF.'db_config.php';


if(APP_DEBUG)
    ini_set('display_errors', 'On');
else
    ini_set('display_errors', 'Off');




spl_autoload_register('\emp\EMPathy::load');


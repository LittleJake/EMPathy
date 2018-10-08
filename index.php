<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jake
 * Date: 10/5/2018
 * Time: 2:23 PM
 *
 * 入口文件
 */

define('EMP', realpath(' /'));
define('CORE', EMP.'emp/');

require CORE.'/common/init.php';


\emp\EMPathy::start();

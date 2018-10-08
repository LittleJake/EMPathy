<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jake
 * Date: 10/5/2018
 * Time: 2:30 PM
 */

function p($s){
    if(is_bool($s))
        var_dump($s);
    else if(is_null($s))
        var_dump('NULL');
    else
        echo "<pre style=\"border: 1px solid;border-radius: 5px;position: relative;z-index: 1000;padding: 10px;font-size: 18px;line-height: 23px;background: lightskyblue; opacity: 0.9; \">". print_r($s, true) .'</pre>';
}

//返回设置
function c($conf = '') {
    $c = require CONF.'config.php';

    if(isset($c[$conf]))
        return $c[$conf];

    return '';
}

function error_func() {
    $e = error_get_last();
    p($e);
}
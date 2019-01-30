<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jake
 * Date: 10/5/2018
 * Time: 2:30 PM
 */

//通用函数

function p($s){
    /**
     * p函数，显示信息
     * @param $s 需要显示的信息（变量）
     *
     */

    if(is_bool($s))
        var_dump($s);
    else if(is_null($s))
        var_dump('NULL');
    else
        echo "<pre style=\"border: 1px solid;border-radius: 5px;position: relative;z-index: 1000;padding: 10px;font-size: 18px;line-height: 23px;background: lightskyblue; opacity: 0.9; \">". print_r($s, true) .'</pre>';
}


function c($conf = '') {
    /**
     * 返回配置条目
     * @param $conf 需要的配置条目名
     * @return 返回存在的配置或null
     *
     */
    $c = \emp\lib\conf::get($conf);

    if(isset($c))
        return $c;

    return null;
}



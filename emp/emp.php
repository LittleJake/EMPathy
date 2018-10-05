<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jake
 * Date: 10/5/2018
 * Time: 2:41 PM
 */

namespace emp;

class emp {
    //已加载类文件列表
    static private $classMap = array();


    static public function start() {
        p('emp core start');

        $route = new \emp\route();
    }


    //自动加载类文件
    static public function load($class) {
        if(isset(self::$classMap[$class]))
            return true;
        else {
            $file = EMP. str_replace('\\', '/', $class) . '.php';
            if(is_file($file)){
                include $file;
                self::$classMap[$class] = $file;
            } else {
                return false;
            }
        }
    }
}
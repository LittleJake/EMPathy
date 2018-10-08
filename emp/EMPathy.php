<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jake
 * Date: 10/5/2018
 * Time: 2:41 PM
 */

namespace emp;

class EMPathy {

    //已加载类文件列表
    static private $classMap = array();


    static public function start() {
        p('emp core start');

        $route = new \emp\lib\route();

        $module = c('APP').c('CONTROLLER_DIR').$route ->controller.c('CONTROLLER_SUFFIX');
        $controller_file = $module.".php";

        $a = $route ->action.c('ACTION_SUFFIX');

        if(is_file($controller_file)) {
            p($controller_file);

            require $controller_file;


            $controller = '\\'.str_replace("/","\\", $module);

            $c = new $controller();

            $c ->$a();



        }
        else
            p("控制器".$route->controller."不存在");





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
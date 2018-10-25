<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jake
 * Date: 10/25/2018
 * Time: 3:43 PM
 */

namespace emp\lib;


class log
{
    private static $class;
    public static function init(){
        $c = "\\emp\\lib\\driver\\" . conf::get('LOG');

        self::$class = new $c();
        self::$class->log("LOG START");
    }

    public static function log($msg = ''){

        self::$class->log($msg);
    }
}
<?php
/**
 * Created by IntelliJ IDEA.
 * User: LittleJake
 * Date: 2018/10/12
 * Time: 13:30
 */

namespace emp\lib;


class conf
{
    static private $conf;

    static public function get($name = ''){
        try {
            if(!isset(self::$conf))
                self::$conf = require CONF.'config.php';

            return (isset(self::$conf[$name])?self::$conf[$name]:null);
        } catch (\Exception $e) {
            p($e->getMessage());
        }

        return null;
    }
}
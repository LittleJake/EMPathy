<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jake
 * Date: 10/5/2018
 * Time: 2:49 PM
 */

namespace emp\lib;


class route
{
    public $controller;
    public $action;

    public function __construct(){
        \emp\lib\log::log('route ok');
        //p($_SERVER);

        $default = c('ROUTE');

        //视图文件夹定义
        define('__STATIC__', EMP.'public/');
        define('__JS__', EMP.'public/js');
        define('__CSS__', EMP.'public/css');


        if($default['ACCESS_MODE'] == 0) {
            //普通模式

            $this ->action = isset($_REQUEST['a'])?$_REQUEST['a']:$default['DEFAULT_ACTION'];
            $this ->controller = isset($_REQUEST['c'])?$_REQUEST['c']:$default['DEFAULT_CONTROLLER'];

        } else if ($default['ACCESS_MODE'] == 1) {
            //pathinfo模式

            $path = isset($_SERVER['PATH_INFO'])?explode('/', trim($_SERVER['PATH_INFO'], '/')): '';

            $this ->action = isset($path[1])?$path[1]:$default['DEFAULT_ACTION'];
            $this ->controller = isset($path[0])?$path[0]:$default['DEFAULT_CONTROLLER'];

            p($path);
        }

        p(array($this ->action, $this ->controller));


    }

}
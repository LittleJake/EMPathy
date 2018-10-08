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
        p('route ok');
        //p($_SERVER);

        define('__STATIC__', EMP.'public/');
        define('__JS__', EMP.'public/js');
        define('__CSS__', EMP.'public/css');


        if(c('ACCESS_MODE') == 0) {
            //普通模式
            $this ->action = $_REQUEST['a'];
            $this ->controller = $_REQUEST['c'];

        } else if (c('ACCESS_MODE') == 1) {
            //pathinfo模式

            $path = isset($_SERVER['PATH_INFO'])?explode('/', trim($_SERVER['PATH_INFO'], '/')): '';

            $this ->action = isset($path[1])?$path[1]:'index';;
            $this ->controller = isset($path[0])?$path[0]:'index';

            p($path);
        }

        p(array($this ->action, $this ->controller));



    }

}
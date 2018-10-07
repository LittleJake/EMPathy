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
    private $c;
    private $a;

    public function __construct(){
        p('route ok');

        p($_SERVER);


        if(ACCESS_MODE == 0) {
            //普通模式
            $a = $_REQUEST['a'];
            $c = $_REQUEST['c'];
        } else if (ACCESS_MODE == 1) {
            //pathinfo模式
            p($_SERVER['PATH_INFO']);

            $path = explode('/', trim($_SERVER['PATH_INFO'], '/'));
            $a = isset($path[0])?$path[0]:'index';;
            $c = isset($path[1])?$path[1]:'index';
            p($path);
        }

        p(array($a, $c));



    }

}
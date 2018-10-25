<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jake
 * Date: 10/5/2018
 * Time: 2:33 PM
 */
return array(
    //子程序路径
    'APP' => EMP.'app/',
    //调试模式
    'APP_DEBUG' => true,

    /*
     * ACCESS_MODE
     * 0 - 普通模式     /index.php?c=index&a=index
     * 1 - pathinfo    /index.php/index/index
     *
     */



    'CONTROLLER_SUFFIX' => 'Controller',

    'ACTION_SUFFIX' => 'Action',

    'CONTROLLER_DIR' => 'Controller/',

    'TEMPLATE_DIR' => 'resources/view',

    'ROUTE' => [
        'ACCESS_MODE' => 0,

        'DEFAULT_CONTROLLER' => 'index',

        'DEFAULT_ACTION' => 'index',
    ],

    'LOG' => 'file',

    'LOG_PATH' => EMP.'log/',

);


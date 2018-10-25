<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jake
 * Date: 10/25/2018
 * Time: 3:45 PM
 */

namespace emp\lib\driver;


use emp\lib\conf;

class file
{
    private $path;

    public function __construct(){
        $this->path = conf::get('LOG_PATH');
    }

    public function log($msg = ''){


        if(!is_dir($this->path)){
            mkdir($this->path,0777);
        }

        $msg = date("Y-m-d H:i:s") . ' ' . json_encode($msg);

        return file_put_contents($this->path . date("Y-m-d-")."emp.log", $msg. PHP_EOL, FILE_APPEND);
    }
}
<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jake
 * Date: 10/9/2018
 * Time: 7:58 PM
 */

namespace emp\lib;


class model extends \PDO
{

    private $dbconf;

    public function __construct()
    {
        $this -> dbconf =require CONF.'db_config.php';
        $dsn = 'mysql:host='.$this -> dbconf['db_host'].';dbname='.$this -> dbconf['db_name'];
        $username = $this -> dbconf['db_user'];
        $passwd = $this ->dbconf['db_password'];

        try{
            parent::__construct($dsn, $username, $passwd);
        }catch (\Throwable $e) {
            p($e ->getMessage());
        }



    }
}
<?php
header("Content-type:text/html;charset=utf-8");
/**
 * Created by PhpStorm.
 * User: HY
 * Date: 2016/10/8
 * Time: 13:35
 */

namespace Db;
Interface IDatabase
{
    function connect();
    function query();
    function close();
}
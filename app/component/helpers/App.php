<?php
/**
 * Created by PhpStorm.
 * User: misha
 * Date: 20.03.18
 * Time: 11:03
 */

namespace App\component\helpers;


class App
{
    protected static $instance = array();

    public static function getApp($key)
    {
        return isset(self::$instance[$key]) ? self::$instance[$key] : null;
    }

    public static function setApp(string $key, $object): bool
    {
        self::$instance[$key] = new $object();

        return isset(self::$instance[$key]);
    }
}
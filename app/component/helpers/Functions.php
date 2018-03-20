<?php
/**
 * Created by PhpStorm.
 * User: misha
 * Date: 20.03.18
 * Time: 12:05
 */

namespace App\component\helpers;

use Exception;

class Functions
{
    public function abort($code, $message = '')
    {
        try {
            throw new Exception($message, $code);
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
        header("HTTP/1.1 $code");
        $this->viewException();
        exit($code);
    }

    private function viewException()
    {

    }
}
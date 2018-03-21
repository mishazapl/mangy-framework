<?php
/**
 * Created by PhpStorm.
 * User: misha
 * Date: 19.03.18
 * Time: 21:06
 */

namespace App\component\router;


use App\component\helpers\App;

class Route
{
    private $request;
    private $uri;

    public function __construct()
    {
        $this->uri = $_SERVER['REQUEST_URI'];
    }

    public function post($className, $method, $uri): Route
    {
        $this->request[$uri] = ['class' => $className, 'method' => $method];

        return $this;
    }

    public function get($className, $method, $uri): Route
    {
        $this->request[$uri] = ['class' => $className, 'method' => $method];

        return $this;
    }

    public function __destruct()
    {
        if (!isset($this->request[$this->uri])) {
            abort(404, 'Not Found');
        }

        $className = $this->request[$this->uri]['class'];
        $method    = $this->request[$this->uri]['method'];

        $className = new $className();

        $className->$method();
    }

}
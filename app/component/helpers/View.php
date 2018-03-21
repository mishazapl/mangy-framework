<?php

namespace App\component\helpers;


class View
{
    public $viewName;
    public $path;

    public function __construct()
    {
        $this->path = '/../../../views/';
    }

    /**
     * @param string $viewName
     * @param string $path
     * @return View
     */
    public function view(string $viewName, string $path = '/../../../views/')
        : View
    {
        $this->viewName = $viewName;
        $this->path     = $path;

        return $this;
    }


    /**
     * @param null $variables
     * @return mixed
     */
    public function with($variables = null)
    {
        if (is_array($variables))
            extract($variables);
        return include __DIR__ . $this->path . $this->viewName . '.php';
    }
}
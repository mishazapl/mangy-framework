<?php


function abort($code, $message = '')
{
    return \App\component\helpers\App::getApp('helpers')->abort($code, $message);
}

function view(string $viewName, $variables = null)
{
   return \App\component\helpers\App::getApp('helpers')->view($viewName, $variables);
}
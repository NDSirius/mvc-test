<?php


namespace Core;


class View
{
    protected static $viewPath = '/App/Views/';
    //protected static $viewPartsPath = '/App/Views/parts/';

    public static function render($view, $args = [])
    {
        extract($args, EXTR_SKIP);

        $file = dirname(__DIR__) . static::$viewPath . $view;

        if(is_readable($file)){
            require $file;
        }else {
            throw new \Exception("$file not found");
        }
    }

}
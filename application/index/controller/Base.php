<?php
namespace app\index\controller;
use think\View;
use think\Controller;
use think\Cache;

class Base extends Controller
{
    public static $sqliteCache = null;
    public function _initialize()
    {
        echo 'Base._initialize';
    }

    public function doit()
    {
        echo 'Base.doit';
        // $this -> assign('123', '123');
    }

}

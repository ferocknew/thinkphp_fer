<?php
namespace app\index\controller;

use think\log;
use think\config;
use think\Debug;
use first\Foo;
use think\Session;
use think\Request;

class Index extends Base
{
    public function _initialize()
    {


        // 11111111
        // Base::_initialize();
        // echo 'Index._initialize';
    }

    public function index()
    {

        $this->doit();

        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
    }

    public function test()
    {
        $request = Request::instance();
        print_r($request->param('id'));
        dump(Request::instance()->param());

        echo "昨天:", date("Y-m-d  H:i:s", strtotime("-1 day", strtotime('2011-11-01'))), "<br>";

        Debug::remark('begin');
        // Session::set('name','thinkphp');
        dump(Session::get());
        dump(session_id());

        // $model = \think\Loader::model('index/index');
        $model = model('index/index');
        $data = $model->test();

        $this->assign('aaa', '111111');

        Foo::doit();
        showMe();

        Log::record('测试日志信息1');
        Log::record('测试日志信息，这是警告级别', 'show1');
        Log::write('测试日志信息，这是警告级别，并且实时写入', 'notice');

        dump(Config::get('v.test1'));
        // exit ;
        Debug::remark('end');

        // 进行统计区间
        echo debug('begin', 'end') . 's<br />';
        echo debug('begin', 'end', 6) . 's<br />';
        echo debug('begin', 'end', 'm') . 'kb<br />';

        return $this->fetch('index/add');
        // return xml($data);
    }

}

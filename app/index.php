<?php
// +----------------------------------------------------------------------
// | phpth|phpy: msg-server
// +----------------------------------------------------------------------
// | Copyright (c) 2018
// +----------------------------------------------------------------------
// | Licensed MIT
// +----------------------------------------------------------------------
// | Author: luajia
// +----------------------------------------------------------------------
// | Date: 2018/9/27 0027
// +----------------------------------------------------------------------
// | Time: 下午 21:05
// +----------------------------------------------------------------------
namespace app;

use bin\config;
use bin\process;
class index
{
    public function __construct ()
    {

    }

    public function index()
    {
        system('echo ;echo "\033[41;37m  hello tiny-cli framework~ \033[0m";echo ;');
    }
}
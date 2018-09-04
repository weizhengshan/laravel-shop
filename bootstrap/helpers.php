<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/4 0004
 * Time: 下午 15:26
 */
function test_helper() {
    return 'OK';
}
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
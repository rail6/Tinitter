<?php
namespace Tinitter;
class Route{
    static function registration($app){
        $app->get('/',
            '\Tinitter\Controller\TimeLine:show');
        $app->get('/page/:page_num',
            '\Tinitter\Controller\TimeLine:show');
    }
}

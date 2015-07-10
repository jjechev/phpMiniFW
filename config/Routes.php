<?php

class Routes
{
    public static $routePath = array(
        //system
        '/FWerrorlog' => array(null, '/FWerrorlog', '../core/system/controllers/errorlog'),
        '/FWphpinfo' => array(null, '/FWphpinfo', '../core/system/controllers/phpinfo'),
        '/errorPage404' => array(null, '/errorPage404', '../core/system/controllers/page404'),
        
        //projects
        'test' => array(null, '/test', 'testPageController'),
        'indexPage' => array(null, '/', 'IndexPageController', 'index'),
        
//        'testpageIna' => array(null, '/ina*', 'PageIna', 'pageInaindex'),
        'testpageIna' => array(null, '/ina', 'PageIna', 'pageInaindex'),
        
        
//        'adminCategory' => array('admin', '/category', 'adminPageCategoryController', 'dispatcher'),
//        'adminCategoryShow' => array('admin', '/category/*', 'adminPageCategoryController', 'dispatcher'),
    );

}

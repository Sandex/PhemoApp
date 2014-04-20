<?php

namespace Phemo\DemoBundle;

use Phalcon\Mvc\ModuleDefinitionInterface;
use Phalcon\Mvc\Router;
use Phalcon\Mvc\Url;
use Phalcon\Mvc\View;
use Phalcon\Translate\Adapter\NativeArray;

class BundleModule implements ModuleDefinitionInterface
{

    use \Phemo\DiTrait;

    public function registerAutoloaders($di)
    {

    }

    public function registerServices($di)
    {
        $this->setDI($di);

        /* @var $router Router */
        $router = $di->getShared('router');
        $moduleName = $router->getModuleName();


        /* @var $view View */
        $view = $di->getShared('view');
        $view->setViewsDir(__DIR__ . '/Resources/views/');


        /* @var $view Url */
        $url = $di->getShared('url');
        //$url->setBaseUri('/' . ($i13n ? $i13n . '/' : '') . $moduleName . '/');
        $url->setBaseUri('/' . $moduleName . '/');


        $di->setShared('t', function() {
            // Check translation file exists
            $i13n = $this->getDI()->getShared('i13n');

            $messages = [];
            $translationFile = __DIR__ . '/Resources/translations/' . $i13n . '/messages.php';
            if (file_exists($translationFile)) {
                $messages = require_once $translationFile;
            }

            return new NativeArray([
                'content' => $messages,
            ]);
        });
    }

}

<?php

namespace Phemo\DemoBundle\Controller;

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{

    /**
     * Try:
     * http://127.0.0.1/phemo/index/index/YourName
     *
     * @param string $name
     */
    public function indexAction($name = 'guest')
    {
        // some actions ...
        // pass variable to template
        $this->view->setVar('name', $name);
    }

}

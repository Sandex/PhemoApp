<?php

namespace Phemo;

require_once __DIR__ . '/../vendor/sandex/phemo/Kernel.php';

use Phemo\Kernel;

class AppKernel extends Kernel
{

    protected function registerBundles()
    {
        $bundles = [
            // Add new bundle there
            //'Namespace\\NameBundle' => 'path/to/src/',
            // ...

            'Phemo\\WidgetsBundle' => 'vendor/sandex/PhemoWidgetsBundle/',
        ];

        if (in_array($this->getEnvironment(), ['dev', 'test'])) {
            $bundles += [
                'Phemo\\DemoBundle' => 'src/Phemo/DemoBundle/',
            ];
        }

        return $bundles;
    }

    protected function confingureServices()
    {
        $di = $this->getDI();

        // Add your services there
        //$di->set(...);
    }

    protected function registerConfig()
    {
        $config = require_once __DIR__ . '/config/main.local_' . $this->getEnvironment() . '.php';

        return $config;
    }

}

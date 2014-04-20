<?php $e = new \Phalcon\Escaper() ?>
<?php $this->tag->setTitle('Demo controller title') ?>

<h1>Demo controller</h1>

<h3><?php echo $this->router->getControllerName() ?>Controller::<?php echo $this->router->getActionName() ?>Action()</h3>

Hello <?php echo $e->escapeHtml($name) ?>!
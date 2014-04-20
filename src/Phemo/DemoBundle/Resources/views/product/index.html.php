<?php /* @var $this \Phalcon\Mvc\View\EngineInterface */ ?>

<?php
$header = $this->t->_('Product list');
$this->tag->setTitle($header);
?>

<ul class="breadcrumb">
    <li class="active"><?php echo $this->t->_('Products') ?></li>
</ul>

<h3><?php echo $header ?></h3>


<?php $this->partial('product/_search_grid', ['dataProvider' => $dataProvider]) ?>
<?php /* @var $this \Phalcon\Mvc\View\EngineInterface */ ?>

<?php
$header = $this->t->_('Product list');
$this->tag->setTitle($header);
?>

<ul class="breadcrumb">
    <li class="active"><?php echo $this->t->_('Products') ?></li>
</ul>

<div class="panel panel-default">
    <div class="panel-body">
        <a href="<?php echo $this->url->get('product/create') ?>" class="btn btn-default" role="button" style="float: right;">New</a>
    </div>
</div>

<h3><?php echo $header ?></h3>

<?php $this->partial('product/_search_grid', ['dataProvider' => $dataProvider]) ?>
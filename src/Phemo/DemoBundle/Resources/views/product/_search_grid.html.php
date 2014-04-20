<?php /* @var $this \Phalcon\Mvc\View\EngineInterface */ ?>

<?php

$this->getDI()
    ->get('widget')
    ->create('\Phemo\WidgetsBundle\Widget\GridView', [
        /*'id' => 'product-grid', /* you can define or auto */
        'dataProvider' => $dataProvider,
        'columns'      => [
            [
                'name'   => 'productId',
                'filter' => $this->tag->textField([
                    'ProductSearch[product_id]',
                    'id'    => 'ProductSearch_product_id',
                    'value' => $dataProvider->getModel()->getProductId(),
                    'class' => 'form-control',
                ]),
            ],
            [
                'name'   => 'name',
                'filter' => $this->tag->textField([
                    'ProductSearch[name]',
                    'id'    => 'ProductSearch_name',
                    'value' => $dataProvider->getModel()->getName(),
                    'class' => 'form-control',
                ]),
            ],
            [
                'name'   => 'categoryId',
                'value'  => function($entity) {
                    return $entity->getCategory()->getName();
                },
                'filter' => $this->tag->select([
                    'ProductSearch[category_id]',
                    $categories,
                    $categories,
                    'using'     => ['category_id', 'name'],
                    'value'     => $dataProvider->getModel()->getCategoryId(),
                    'useEmpty'  => true,
                    'emptyText' => '',
                    'class'     => 'form-control',
                    'id'        => 'ProductSearch_category_id',
                ]),
            ],
            'created',
        ],
    ])->render()
?>
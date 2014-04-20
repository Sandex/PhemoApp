<?php

namespace Phemo\DemoBundle\Entity;

use Phemo\DemoBundle\Entity\Base\BaseProduct;

/**
 * Model Product
 */
class Product extends BaseProduct
{

    public function getPrimaryKey()
    {
        return 'product_id';
    }

    public function initialize()
    {
        $this->belongsTo('category_id', '\Phemo\DemoBundle\Entity\Category', 'category_id', ['alias' => 'Category']);
    }

    /**
     * Return the related "Category"
     *
     * @return Category[]
     */
    public function getCategory($parameters = null)
    {
        return $this->getRelated('Category', $parameters);
    }

}

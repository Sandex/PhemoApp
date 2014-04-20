<?php

namespace Phemo\DemoBundle\Entity\Base;

use Phemo\Mvc\ModelBase;

/**
 * Base Model Product
 */
class BaseProduct extends ModelBase
{

    /**
     * @var int
     */
    protected $product_id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $category_id;

    /**
     * @return int
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * @param int $productId
     */
    public function setProductId($productId)
    {
        $this->product_id = (int) $productId;
    }

    /**
     * @return stirng
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param stirng $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * @param int $categoryId
     */
    public function setCategoryId($categoryId)
    {
        $this->category_id = (int) $categoryId;
    }

    /**
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     */
    public function setCreated($created)
    {
        $this->created = (int) $created;
    }
}

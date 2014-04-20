<?php

namespace Phemo\DemoBundle\Entity\Base;

use Phemo\Mvc\ModelBase;

/**
 * Base Model Category
 */
class BaseCategory extends ModelBase
{

    /**
     *
     * @var integer
     */
    protected $category_id;

    /**
     *
     * @var string
     */
    protected $name;

    /**
     *
     * @var integer
     */
    protected $parent_category_id;

    /**
     * Method to set the value of field category_id
     *
     * @param integer $category_id
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;

        return $this;
    }

    /**
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Method to set the value of field parent_category_id
     *
     * @param integer $parent_category_id
     * @return $this
     */
    public function setParentCategoryId($parent_category_id)
    {
        $this->parent_category_id = $parent_category_id;

        return $this;
    }

    /**
     * Returns the value of field category_id
     *
     * @return integer
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of field parent_category_id
     *
     * @return integer
     */
    public function getParentCategoryId()
    {
        return $this->parent_category_id;
    }

}

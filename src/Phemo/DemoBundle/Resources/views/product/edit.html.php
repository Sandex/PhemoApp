<?php /* @var $product Phemo\DemoBundle\Entity\Product */ ?>

<?php $this->tag->setTitle('Product view') ?>

<ol class="breadcrumb">
    <li><a href="<?php echo $this->url->get('product/index/') ?>">Products</a></li>
    <li class="active">Edit</li>
</ol>

<h3>Product edit #<?php echo $product->getProductId() ?></h3>

<form action="<?php echo $this->url->get('product/edit/') . $product->getProductId() ?>" method="post" role="form">
    <?php $this->partial('product/_form') ?>

    <button type="submit" class="btn btn-primary">Save</button>
</form>
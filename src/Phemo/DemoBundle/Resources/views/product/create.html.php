<?php /* @var $product Phemo\DemoBundle\Entity\Product */ ?>

<?php $this->tag->setTitle('Product view') ?>

<ol class="breadcrumb">
    <li><a href="<?php echo $this->url->get('product/index/') ?>">Products</a></li>
    <li class="active">Edit</li>
</ol>

<h3>Product create</h3>

<form action="<?php echo $this->url->get('product/create/') ?>" method="post" role="form">
    <?php $this->partial('product/_form') ?>

    <button type="submit" class="btn btn-primary">Create</button>
</form>
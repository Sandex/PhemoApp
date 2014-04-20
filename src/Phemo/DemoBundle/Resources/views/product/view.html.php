<?php /* @var $product Phemo\DemoBundle\Entity\Product */ ?>

<?php $this->tag->setTitle('Product view') ?>

<ul class="breadcrumb">
    <li><a href="<?php echo $this->url->get('product/index/') ?>">Products</a></li>
    <li class="active">View</li>
</ul>

<h3>Product view #<?php echo $product->getProductId() ?></h3>

<table class="table table-striped">
    <tbody>
        <tr>
            <th>ProductId</th>
            <td><?php echo $product->getProductId() ?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?php echo $product->getName() ?></td>
        </tr>
        <tr>
            <th>CategoryId</th>
            <td><?php echo $product->getCategoryId() ?></td>
        </tr>
        <tr>
            <th>Category</th>
            <td><?php echo $product->getCategory()->getName() ?></td>
        </tr>
    </tbody>
</table>
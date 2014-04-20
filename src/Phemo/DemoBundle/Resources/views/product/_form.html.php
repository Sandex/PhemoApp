<div class="form-group">
    <label for="Product_product_id">Product</label>
    <?php
    echo $this->tag->textField([
        'Product[product_id]',
        'id'       => 'Product_product_id',
        'class'    => 'form-control',
        'disabled' => 'disabled',
        'value'    => $product->getProductId(),
    ])
    ?>
</div>

<div class="form-group">
    <label for="Product_name">Name</label>
    <?php
    echo $this->tag->textField([
        'Product[name]',
        'id'    => 'Product_name',
        'class' => 'form-control',
        'value' => $product->getName(),
    ])
    ?>
</div>

<div class="form-group">
    <label for="Product_category_id">Category</label>
    <?php
    echo $this->tag->select([
        'Product[category_id]',
        $categories,
        'using'     => ['category_id', 'name'],
        'value'     => $product->getCategoryId(),
        'useEmpty'  => true,
        'emptyText' => '',
        'class'     => 'form-control',
        'id'        => 'Product_category_id',
    ])
    ?>
</div>
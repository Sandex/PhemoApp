<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <?php echo $this->tag->getTitle() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->assets->outputCss('headerCss') ?>
        <?php $this->assets->outputJs('headerJs') ?>
    </head>
    <body>
        <div class="container">
            <?php $this->partial('navigation') ?>
            <?php $this->partial('flash') ?>

            <?php echo $this->getContent() ?>
        </div>
    </body>
</html>
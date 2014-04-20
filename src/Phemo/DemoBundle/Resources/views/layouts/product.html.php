<?php
$bundleAssests = '../src/Phemo/DemoBundle/Resources/assets/';

/* @var $assets \Phalcon\Assets\Manager */
$assets = $this->assets;

$this->assets
    ->collection('headerJs')
    ->setPrefix('../../assets/')
    ->setSourcePath($bundleAssests)
    ->addJs('jquery/jquery.min.js')
    ->addJs('activity-indicator/activity-indicator/activity-indicator.js')
    ->addJs('bootstrap/js/bootstrap.min.js');


$this->assets
    ->collection('headerCss')
    ->setPrefix('../../assets/')
    ->setSourcePath($bundleAssests)
    ->addCss('bootstrap/css/bootstrap.min.css')
    ->addCss('bootstrap/css/bootstrap-theme.min.css');
?>

<div class="page-header">
    <h2>Product layout <small>Subtext for header</small></h2>
</div>

<?php echo $this->getContent() ?>
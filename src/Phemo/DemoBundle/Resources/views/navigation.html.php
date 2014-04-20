<nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">

        <div class="navbar-header">
            <a class="navbar-brand" href="#">Phemo</a>
        </div>

        <div class="collapse navbar-collapse">

            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo $this->url->get('index/index/') ?>">Index</a></li>
                <li><a href="<?php echo $this->url->get('product/index/') ?>">Product</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Language<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo '/en' . $this->router->getRewriteUri() ?>">English</a></li>
                        <li><a href="<?php echo '/fr' . $this->router->getRewriteUri() ?>#">French</a></li>
                        <li><a href="<?php echo '/ru' . $this->router->getRewriteUri() ?>">Russian</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>
</nav>
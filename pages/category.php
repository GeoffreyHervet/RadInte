<?php require_once 'blocks/menu.php' ?>
<div class="container category">
    <h1 class="page-title text-underline text-center">Robe femme</h1>
    <div class="row" itemtype="http://schema.org/ItemList">
        <meta itemprop="numberOfItems" content="315" />
        <?php for ($i = 0; $i < 11; $i++) { ?>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="item">
                    <?php include 'blocks/product.php'; ?>
                </div>
            </div>
        <?php } ?>
        <div class="col-md-3 col-sm-4 col-xs-6">
            <div class="item">
                <?php include 'blocks/product-gift.php'; ?>
            </div>
        </div>
    </div>
</div>
<nav class="text-center">
    <ul class="pagination hide">
        <li>
            <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li>
            <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
    <div class="infinite-animation clearfix"><div class="anim"></div></div>
</nav>
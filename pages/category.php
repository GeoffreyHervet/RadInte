<?php require_once 'blocks/menu.php' ?>
<div class="container category">
    <h1 class="page-title text-underline-bottom text-center"><span>Robe femme</span></h1>
    <div class="row" itemtype="http://schema.org/ItemList">
        <meta itemprop="numberOfItems" content="315" />
        <?php for ($i = 0; $i < 11; $i++) { ?>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="item">
                    <?php include 'blocks/product.php'; ?>
                </div>
            </div>
        <?php } ?>
        <div class="col-md-3 col-sm-4 col-xs-12">
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

<div class="modal fade fast-buy" id="fast-buy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        </div>
    </div>
</div>
<div class="modal fade video-modal" id="video-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
            <div class="modal-body"></div>
        </div>
    </div>
</div>
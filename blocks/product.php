<?php
    $kinds = ['instock', 'promo', 'new', 'gone', 'limited'];
    $kind = $kinds[mt_rand(0, sizeof($kinds) - 1)];
?>
<div itemscope itemtype="http://schema.org/Product">
    <meta itemprop="brand" content="Petit-bâteau" />
    <meta itemprop="priceCurrency" content="EUR" />
    <meta itemprop="availability" content="http://schema.org/<?php echo ($kind == 'gone') ? 'OutOfStock' : 'InStock'; ?>" />
    <meta itemprop="image" content="img/tmp/product-list-250x325.jpg" />

    <a href="?p=product" class="product">
        <img  itemprop="image" class="hidden-xs" src="img/tmp/product-list-250x325.jpg" alt="Executive Anvil logo"/>
        <img  itemprop="image" class="visible-xs" src="img/tmp/product-list-cell-250x254.jpg" alt="Executive Anvil logo"/>
        <span itemprop="name" class="name">Vers l’infini et au delà t-shirt</span>
        <span class="price" itemprop="price" content="29.90">
            <?php if ($kind == 'promo') { ?>
                <strong class="text-pink">29,90 €</strong>
                <span class="old-price">34,99 €</span>
            <?php } else { ?>
                29,90 €
            <?php } ?>
        </span>
        <?php if ($kind == 'limited') { ?><span class="flash limited">édition limitée</span><?php } ?>
        <?php if ($kind == 'new') { ?><span class="flash new">nouveauté</span><?php } ?>
        <?php if ($kind == 'gone') { ?><span class="flash new">produit épuisé</span><?php } ?>
    </a>
    <?php if ($kind != 'gone') { ?>
        <div class="btn-actions text-uppercase">
            <a class="fast-buy" href="./">Achat rapide</a>
            <a class="save" href="./">Sauvegarder</a>
            <div class="clearfix"></div>
        </div>
    <?php } ?>
</div>
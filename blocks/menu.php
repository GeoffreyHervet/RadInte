<div class="container">
    <nav class="categories clearfix">
        <ul>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle text-underline-hover" data-toggle="dropdown" role="button">Nouveautés</a>
                <?php $menu = function($add = '') {
                    return <<<EOL
                    <ul class="dropdown-menu dropdown-menu-left menu-top {$add}" role="menu">
                        <li class="left">
                            <ul class="list-unstyled">
                                <li><a class="text-underline-hover" href="#"><span>Voir tous les produits</span></a></li>
                                <li><a class="text-underline-hover" href="#"><span>T-shirts (13)</span></a></li>
                                <li><a class="text-underline-hover" href="#"><span>Sweaters (24)</span></a></li>
                                <li><a class="text-underline-hover" href="#"><span>Vestes (32)</span></a></li>
                                <li><a class="text-underline-hover" href="#"><span>Bonnets et casquettes (9)</span></a></li>
                                <li><a class="text-underline-hover" href="#"><span>Bijoux (12)</span></a></li>
                                <li><a class="text-underline-hover" href="#"><span>Chaussettes (32)</span></a></li>
                                <li><a class="text-underline-hover" href="#"><span>Chaussures (9)</span></a></li>
                                <li><a class="text-underline-hover" href="#"><span>Beauté (3)</span></a></li>
                            </ul>
                        </li>
                        <li class="right">
                            <ul class="list-unstyled">
                                <li class="collections">Collections</li>
                                <li><a class="text-underline-hover" href="#"><span>Adieu et à demain</span></a></li>
                                <li><a class="text-underline-hover" href="#"><span>Club pétanque</span></a></li>
                                <li><a class="text-underline-hover" href="#"><span>Madame</span></a></li>
                                <li><a class="text-underline-hover" href="#"><span>Mademoiselle</span></a></li>
                                <li><a class="text-underline-hover" href="#"><span>Leah Flores</span></a></li>
                            </ul>
                        </li>
                    </ul>
EOL;
                };
                echo $menu(); ?>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle text-underline-hover" data-toggle="dropdown" role="button">Les tendances</a>
                <?php echo $menu(); ?>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle text-underline-hover" data-toggle="dropdown" role="button">Colabs</a>
                <?php echo $menu(); ?>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle text-underline-hover" data-toggle="dropdown" role="button">Femme</a>
                <?php echo $menu(); ?>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle text-underline-hover" data-toggle="dropdown" role="button">Homme</a>
                <?php echo $menu(); ?>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle text-underline-hover" data-toggle="dropdown" role="button">Kids</a>
                <?php echo $menu(); ?>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle text-underline-hover" data-toggle="dropdown" role="button">Sport</a>
                <?php echo $menu(); ?>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle text-underline-hover" data-toggle="dropdown" role="button">Histoires</a>
                <?php echo $menu('pull-right'); ?>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle text-pink text-underline-hover" data-toggle="dropdown" role="button">Promotions</a>
                <?php echo $menu('pull-right'); ?>
            </li>
        </ul>
    </nav>
</div>
<div class="fake-container hide">
    <div class="text-top">
        <br /><br /><br />
        <div class="text-center hide">
            <span>
                Invitez vos amis et gagnez 50€ de crédit d’achat -
                <a class="text-underline-hover" href="#"><strong><span>Acheter une carte cadeau</span></strong></a>
            </span>
        </div>
        <span class="pull-right text-right hide">
            <span class="date">Mer. 25 Octobre 10:32 - expédié en 48hrs</span><br />
            <a href="#" class="text-underline-bottom"><span>Service client</span></a>
        </span>
    </div>
</div>
<div class="container">
    <!--    <div class="text-top">-->
    <!--        <br /><br /><br />-->
    <!--        <div class="text-center hide">-->
    <!--            <span>-->
    <!--                Invitez vos amis et gagnez 50€ de crédit d’achat --->
    <!--                <a class="text-underline-hover" href="#"><strong><span>Acheter une carte cadeau</span></strong></a>-->
    <!--            </span>-->
    <!--        </div>-->
    <!--        <span class="pull-right text-right hide">-->
    <!--            <span class="date">Mer. 25 Octobre 10:32 - expédié en 48hrs</span><br />-->
    <!--            <a href="#" class="text-underline-bottom"><span>Service client</span></a>-->
    <!--        </span>-->
    <!--    </div>-->
</div>
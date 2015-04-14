<?php require_once 'blocks/menu.php' ?>
<div class="container product-buy-container" itemscope itemtype="http://schema.org/Product">
    <div class="content product">
        <div class="img-big-container">
            <div class="img-big hidden-xs">
                <div class="img-wrapper" data-zoom-image="img/tmp/product-original-1376x2064.jpg">
                    <img src="img/tmp/product-large-385x505.jpg" class="img-responsive" alt="Image du produit" title="Vers l'infini et au dela (petit bateau)" />
                </div>
                <div class="legend hidden-xs">
                    <div class="pull-left">Passer la souris pour zoomer</div>
                    <a class="pull-right text-bold text-underline text-black" id="show-big">Voir l'image taille réelle</a>
                </div>
                <div class="legend hidden-sm hidden-lg hidden-md">
                    <div class="pull-left"><a href="img/tmp/product-large-385x505.jpg" target="_blank" class="text-black">Cliquez pour afficher l'image</a></div>
                </div>
            </div>
            <div class="img-big visible-xs">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="img/tmp/product-original-1376x2064.jpg" /></div>
                        <div class="swiper-slide"><img src="img/tmp/product2-original-1376x2064.jpg" /></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="thumbnails hidden-xs">
                <div data-carrousel="thumbnails-vertical-prev" class="prev"></div>
                <div class="carousel">
                    <ul class="list-unstyled">
                        <li><span data-img="img/tmp/product-large-385x505.jpg"  data-big="img/tmp/product-original-1376x2064.jpg"><img src="img/tmp/product-small-85x110.jpg" class="img-responsive"/></span></li>
                        <li><span data-img="img/tmp/product2-large-385x505.jpg" data-big="img/tmp/product2-original-1376x2064.jpg"><img src="img/tmp/product2-small-85x110.jpg" class="img-responsive"/></span></li>
    <!--                    <li><span data-img="img/tmp/product-large-385x505.jpg"  data-big="img/tmp/product-original-1376x2064.jpg"><img src="img/tmp/product-small-85x110.jpg" class="img-responsive"/></span></li>-->
    <!--                    <li><span data-img="img/tmp/product2-large-385x505.jpg" data-big="img/tmp/product2-original-1376x2064.jpg"><img src="img/tmp/product2-small-85x110.jpg" class="img-responsive"/></span></li>-->
    <!--                    <li><span data-img="img/tmp/product-large-385x505.jpg"  data-big="img/tmp/product-original-1376x2064.jpg"><img src="img/tmp/product-small-85x110.jpg" class="img-responsive"/></span></li>-->
    <!--                    <li><span data-img="img/tmp/product2-large-385x505.jpg" data-big="img/tmp/product2-original-1376x2064.jpg"><img src="img/tmp/product2-small-85x110.jpg" class="img-responsive"/></span></li>-->
                    </ul>
                </div>
                <div data-carrousel="thumbnails-vertical-next" class="next"></div>
            </div>
        </div>
        <div class="infos">
            <div class="bg-white">
                <h1 class="product-title text-underline-bottom"><span>Ma copine c'est la plus fraiche</span></h1>
                <h2 class="product-price">29,99 €<span class="old-price">39,99 €</span></h2>
                <form action="" method="post" class="product-buy">
                    <div class="form-group">
                        <label class="control-label" for="color-choice">Couleur</label>
                        <div class="colors select2-big select2-centered hidden-xs">
                            <select name="color" id="color-choice" data-color-choice data-dropdown-css-class="select2-big">
                                <option value="1" data-color="#000000" selected>Noir</option>
                                <option value="2" data-color="#ffffff">Blanc</option>
                                <option value="3" data-color="#1E90FF">Bleu marine</option>
                            </select>
                        </div>
                        <div class="color-chooser select2-big">
                            <a data-value="1" data-is-select data-target="#color-choice" class="color active" href="javascript:;"><span class="round-color" style="background-color:#000000;"></span></a>
                            <a data-value="2" data-is-select data-target="#color-choice" class="color" href="javascript:;"><span class="round-color" style="background-color:#ffffff;"></span></a>
                            <a data-value="3" data-is-select data-target="#color-choice" class="color" href="javascript:;"><span class="round-color" style="background-color:#1E90FF;"></span></a>
                        </div>
                    </div>
                    <div class="form-group size-item">
                        <button type="button" class="close"><span>&times;</span></button>
                        <label class="control-label">Taille <a class="size-help text-black" href="javascript:;">(Ma taille ?)</a></label>
                        <div class="size-chooser" data-error-me>
                            <a data-value="XXL" data-target="#size-val" class="size" href="javascript:;">XS</a>
                            <a data-value="XXL" data-target="#size-val" class="size" href="javascript:;">S</a>
                            <a data-value="XXL" data-target="#size-val" class="size" href="javascript:;">M</a>
                            <a data-value="XXL" data-target="#size-val" class="size" href="javascript:;">L</a>
                            <a data-value="XXL" data-target="#size-val" class="size" href="javascript:;">XL</a>
                            <input type="hidden" id="size-val" data-empty="Veuillez sélectionner une taille" value="">
<!--                            <div class="visible-xs">-->
<!--                                <div><input type="submit" name="buy-xs"  class="btn" value="Ajouter au panier" /></div>-->
<!--                            </div>-->
                        </div>
                    </div>
                    <div class="form-group form-submit-wrapper">
                        <div><input type="submit" name="buy" class="btn" value="Ajouter au panier" /></div>
                        <div><a href="javascript:;" class="whish-it text-underline-hover"><span>Sauvegarder ce produit</span></a></div>
                    </div>
                </form>
                <ul class="menu list-unstyled">
                    <li data-menu class="active"><a href="#infos">Infos</a></li>
                    <li data-menu><a href="#details">Détails</a></li>
                    <li data-menu><a href="#shipping-and-payment">Livraison et paiement</a></li>
                    <li class="share">
                        <a href="javascript:;" class="facebook">Partager sur facebook</a>
                        <a href="javascript:;" class="twitter">Partager sur twitter</a>
                        <a href="javascript:;" class="pinterest">Partager sur pinterest</a>
                    </li>
                </ul>
                <div class="info-content clearfix"> <!-- Add class scroll-container -->
                    <div id="infos">
                        <p>Sweater <strong>Ma Copine C'est La Plus Fraiche</strong> de <a href="#">FRAICHE</a> pour Rad.</p>
                        <p>
                            Sweater en poly-coton. <strong>Imprimé à la main</strong> et avec soin.<br />
                            Coupe américaine, col rond, épaules et manches ajustées, bords côtelés et poignets resserrés.<br />
                            <strong>Ultra confortable et doux à l'intérieur.</strong>
                        </p>
                        <p>
                            Ma Copine C'est La Plus Fraiche de Fraîche Store pour Rad.
                        </p>
                    </div>
                    <div id="details" class="hide">
                        <ul class="specs">
                            <li><strong>Coloris : </strong>Noir</li>
                            <li><strong>Artiste : </strong>Fraîche Store</li>
                            <li><strong>Marque : </strong>Gildan</li>
                            <li><strong>Composition : </strong>50% Coton - 50% Polyester</li>
                            <li><strong>Entretien : </strong>Premier lavage en machine à 30°C, à l'envers.</li>
                        </ul>
                        <p>
                            Taille unisexe, il est conseillé aux femmes de prendre une taille en dessous de leur taille habituelle.
                        </p>
                    </div>
                    <div id="shipping-and-payment" class="hide">
                        <p>Je suis le texte de test. Je suis le texte de test. Je suis le texte de test. Je suis le texte de test. Je suis le texte de test. Je suis le texte de test.</p>
                        <p>Je suis le texte de test. Je suis le texte de test. Je suis le texte de test. Je suis le texte de test. Je suis le texte de test. Je suis le texte de test. Je suis le texte de test. Je suis le texte de test. Je suis le texte de test. Je suis le texte de test. Je suis le texte de test. Je suis le texte de test.</p>
                        <p>Je suis le texte de test. Je suis le texte de test. Je suis le texte de test. Je suis le texte de test. Je suis le texte de test. Je suis le texte de test.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'pages/category.php'; ?>
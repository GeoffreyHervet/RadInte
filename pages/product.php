<?php require_once 'blocks/menu.php' ?>
    <div class="container breadcrumb-container">
        <ol class="breadcrumb">
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Nouveautés homme</a></li>
            <li class="active text-underline-bottom"><span>Just do nothing Sweater</span></li>
        </ol>
    </div>
    <div class="container product-buy-container" itemscope itemtype="http://schema.org/Product">
        <div class="product-images">
            <div class="preview">
                <div class="img-preview">
                    <img src="img/tmp/just-do-nothing-1-517x674.jpg" />
                </div>
            </div>
            <div class="thumbs">
                <ul data-thumbs class="list-unstyled">
                    <li class="active"><a href="img/tmp/just-do-nothing-1-517x674.jpg"><img src="img/tmp/product-thumb-jdn-1-91x124.jpg" /></a></li>
                    <li><a href="img/tmp/just-do-nothing-2-517x674.jpg"><img src="img/tmp/product-thumb-jdn-2-91x124.jpg" /></a></li>
                    <li><a href="img/tmp/just-do-nothing-3-517x674.jpg"><img src="img/tmp/product-thumb-jdn-3-91x124.jpg" /></a></li>
                </ul>
            </div>
        </div>
        <form class="product-form">
            <h1>Just do nothing sweater</h1>
            <h2>Sweater “classique” navy en coton <a href="javascript:;" class="info-ask">?</a></h2>
            <div class="price">29,90 € EUR</div>
            <div class="color">
                <label for="color-choose-big-form">Couleur</label>
                <select name="test" id="color-choose-big-form">
                    <option><span class="color" style="background-color:#0000CD"></span> Bleu marine</option>
                    <option><span class="color" style="background-color:#13cd00"></span> Vert fluo</option>
                    <option><span class="color" style="background-color:#cd0010"></span> Rouge coca</option>
                    <option><span class="color" style="background-color:#000000"></span> Noir</option>
                    <option><span class="color" style="background-color:#ffffff"></span> Blanc</option>
                </select>
            </div>
            <div class="size">
                <label>Taille <a href="javascript:;" class="info-ask">?</a></label>
                <div class="hide"><input type="hidden" name="size" /></div>
                <ul class="sizes list-unstyled">
                    <li data-value="xs">XS</li>
                    <li data-value="s">S</li>
                    <li data-value="m" class="active">M</li>
                    <li data-value="l">L</li>
                    <li data-value="xl">XL</li>
                </ul>
            </div>
            <div class="quantity">
                <label>Quantité</label>
                <div class="quantity">
                    <a href="javascript:;">+</a>
                    <input type="text" name="qty" value="1" />
                    <a href="javascript:;">-</a>
                </div>
            </div>
            <div class="submit">
                <input type="submit" class="btn btn-danger" value="Ajouter au panier" />
                <a href="#" class="whish">Ajouter à la liste de souhaits</a>
            </div>
            <div class="specs" role="tabpanel">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a class="text-underline-bottom" href="#infos" aria-controls="home" role="tab" data-toggle="tab"><span>Infos</span></a></li>
                    <li role="presentation"><a class="text-underline-bottom" href="#details" aria-controls="details" role="tab" data-toggle="tab"><span>Détails</span></a></li>
                    <li role="presentation"><a class="text-underline-bottom" href="#shipping" aria-controls="shipping" role="tab" data-toggle="tab"><span>Livraison et paiement</span></a></li>
                </ul>

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="infos">
                        <p>
                            Sweater en poly-coton. <strong>Imprimé à la main</strong> et avec soin.<br>
                            Coupe américaine, col rond, épaules et manches ajustées, bords côtelés et poignets resserrés.<br>
                            <strong>Ultra confortable et doux à l'intérieur.</strong>
                        </p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="details">
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
                    <div role="tabpanel" class="tab-pane" id="shipping">
                        <p>Je suis le texte de test. Je suis le <p>Je suis le texte de test. Je suis le texte de test. Je suis le texte de test. Je suis le texte de test. Je suis le texte de test. Je suis le texte de test.</p>
                    </div>
                </div>
            </div>
            <div class="item-id">
                Référence produit : SWT_JDN_313
            </div>
            <div class="shares">
                <a class="fb" href="#"><span></span> Partager</a>
                <a class="tw" href="#"><span></span> Tweeter</a>
                <a class="pt" href="#"><span></span> Pinner</a>
            </div>
        </form>
    </div>
<?php if (0) require 'pages/category.php'; ?>
<div class="clearfix">
    <br /><br /><br /><br /><br /><br /><br />
    <br /><br /><br /><br /><br /><br /><br />
    <br /><br /><br /><br /><br /><br /><br />
</div>
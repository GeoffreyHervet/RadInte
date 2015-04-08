<?php require_once 'blocks/menu.php' ?>
<div class="container product-buy-container" itemscope itemtype="http://schema.org/Product">
    <h1 class="page-title text-underline text-center">Vers l'infini et au delà</h1>
    <div class="content product">
        <div class="img-big">
            <img src="img/tmp/product-large-385x505.jpg" class="hidden-xs img-responsive" alt="Image du produit" title="Vers l'infini et au dela (petit bateau)" />
            <a class="hidden-sm hidden-lg hidden-md" href="img/tmp/product-large-385x505.jpg" target="_blank"><img src="img/tmp/product-large-385x505.jpg" class="img-responsive" alt="Image du produit" title="Vers l'infini et au dela (petit bateau)" /></a>
            <div class="legend hidden-xs">
                <div class="pull-left">Passer la souris pour zoomer</div>
                <a class="pull-right text-bold text-underline text-black">Voir l'image taille réelle</a>
            </div>
            <div class="legend hidden-sm hidden-lg hidden-md">
                <div class="pull-left"><a href="img/tmp/product-large-385x505.jpg" target="_blank" class="text-black">Cliquez pour afficher l'image</a></div>
            </div>
        </div>
        <div class="thumbnails">&nbsp;<div class="clearfix"></div></div>
        <div class="infos">
            <div class="bg-white-dark">
                <br />
                <form action="" method="post" class="product-buy product-gift">
                    <div class="form-group">
                        <label class="control-label">Prix</label>
                        <div class="price">
                            <strong>10 - 1000 €</strong>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="size-choice">MONTANT</label>
                        <div class="sizes">
                            <select class="select2-item" name="size" id="size-choice" data-nosearch="1" data-select2-enabled data-empty="Merci de choisir un montant">
                                <option value="">Sélectionnez un montant</option>
                                <option value="9">XXS</option>
                                <option value="8">XS</option>
                                <option value="1">S</option>
                                <option value="2">M</option>
                                <option value="3">L</option>
                                <option value="4">XL</option>
                                <option value="5">XXL</option>
                                <option value="6">3XL</option>
                                <option value="7">4XL</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group full-width">
                        <label class="control-label" for="delivery-time">Date de livraison</label>
                        <div class="content">
                            <input type="date" name="delivery-time" id="delivery-time" value="2015-06-13" min="2015-04-08"/>
                        </div>
                    </div>
                    <div class="form-group full-width">
                        <label class="control-label" for="name">Nom du bénéficiaire</label>
                        <div class="content">
                            <input type="text" name="name" id="name" data-empty="Merci de renseigner le bénéficiaire" placeholder="Entrez le nom du bénéficiaire"/>
                        </div>
                    </div>
                    <div class="form-group full-width">
                        <label class="control-label" for="email">Adresse e-mail du bénéficiaire</label>
                        <div class="content">
                            <input type="email" name="mail" id="emai l" data-empty="Merci de renseigner l'email" placeholder="Entrez l'adresse e-mail"/>
                        </div>
                    </div>
                    <div class="form-group full-width">
                        <label class="control-label" for="email">Adresse e-mail du bénéficiaire</label>
                        <div class="content">
                            <input type="text" name="address" id="address" data-empty="Merci de renseigner l'adress" placeholder="Entrez l'adresse"/>
                        </div>
                    </div>
                    <div class="form-group full-width">
                        <label class="control-label" for="email">Message facultatif</label>
                        <div class="content">
                            <textarea name="content" placeholder="Jusqu'à 100 caractères"></textarea>
                            <p class="char-count"><span id="count-left" data-max="100">100</span> caractères restants</p>
                        </div>
                    </div>
                    <div class="form-group form-submit-wrapper">
                        <input type="submit" name="buy"  class="btn btn-black" value="+ Ajouter au panier" />
                        <input type="submit" name="save" class="btn btn-white save" value="Sauvegarder" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require 'pages/category.php'; ?>
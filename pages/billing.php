<div class="cart-container">
    <div class="container">
        <div class="breadcrumb-cart">
            <div class="active">
                <span class="step"><i class="glyphicon glyphicon-ok"></i></span>
                Connexion
            </div>
            <div class="active">
                <span class="step"><i class="glyphicon glyphicon-ok"></i></span>
                Livraison
            </div>
            <div class="active">
                <span class="step">3</span>
                Paiement
            </div>
            <div>
                <span class="step">4</span>
                Confirmation
            </div>
        </div>
    </div>

    <div class="container big-title">
        Votre mode de paiement
    </div>

    <div class="container containter-rel">
        <div class="cart-address">
            <div class="address-book">
                <h3 class="small-title">Cartes enregistrées</h3>
                <div class="item">
                    <div class="description">
                        <a href="javascript:;" class="hidden-md hidden-lg edit">Modifier</a>
                        <a href="javascript:;" class="hidden-md hidden-lg use">Livrer-ici</a>
                        (**** 1234)
                    </div>
                    <a href="javascript:;" class="visible-md-inline-block visible-lg-inline-block edit">Modifier</a>
                    <a href="javascript:;" class="visible-md-inline-block visible-lg-inline-block use">Livrer-ici</a>
                </div>
                <div class="item">
                    <div class="description">
                        <a href="javascript:;" class="hidden-md hidden-lg edit">Modifier</a>
                        <a href="javascript:;" class="hidden-md hidden-lg use">Livrer-ici</a>
                        (**** 1234)
                    </div>
                    <a href="javascript:;" class="visible-md-inline-block visible-lg-inline-block edit">Modifier</a>
                    <a href="javascript:;" class="visible-md-inline-block visible-lg-inline-block use">Livrer-ici</a>
                </div>
                <div class="item">
                    <div class="description">
                        <a href="javascript:;" class="hidden-md hidden-lg edit">Modifier</a>
                        <a href="javascript:;" class="hidden-md hidden-lg use">Livrer-ici</a>
                        (**** 1234)
                    </div>
                    <a href="javascript:;" class="visible-md-inline-block visible-lg-inline-block edit">Modifier</a>
                    <a href="javascript:;" class="visible-md-inline-block visible-lg-inline-block use">Livrer-ici</a>
                </div>
            </div>
            <form class="address form-vertical">
                <div class="form-group">
                    <label for="nom-carte">Nom</label>
                    <input type="text" class="form-control" id="nom-carte" placeholder="Nom sur la carte">
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="ccnumber">Numéro de carte</label>
                                <input type="text" class="form-control" id="ccnumber" placeholder="ex: 6037 2341 9432 6749">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="verification">Cryptogramme</label>
                            <input type="text" class="form-control" id="verification" placeholder="ex: 123">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="ccmonth">Expiration (mois)</label>
                                <select id="ccmonth" class="form-control">
                                    <?php for ($i = 1; $i <= 12; $i++) {
                                        echo '<option value="' . $i .'">'. $i . '</option>';
                                    } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="ccmonth">Expiration (mois)</label>
                                <select id="ccmonth" class="form-control">
                                    <?php
                                        $currentYear = intval(date('Y'));
                                        for ($i = -1; $i <= 12; $i++) {
                                            echo '<option value="' . (($currentYear + $i)) .'">'. ($currentYear + $i) . '</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn-full-width btn btn-danger" value="Valider →" />
                </div>
            </form>
            <div class="address-book address-book-right">
                <h3 class="small-title">Autres modes de paiement</h3>
                <div class="item">
                    <a href="javascript:;"><img src="img/paypal-fr.png" alt="Payer avec paypal" /></a>
                </div>
                <div class="item">
                    <a href="javascript:;"><img src="img/apple-pay-fr.png" alt="Payer avec  pay" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <hr class="main-sepa" />
        <h4 class="small-title">Votre commande</h4>
        <div class="cart-resume" data-remove-text="Vous avez bien <strong>supprimé le produit.</strong>" data-remove-btn="Annuler">
            <div class="cart-item">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="img">
                    <img width="82" height="106" src="img/tmp/product-small-85x110.jpg" />
                </div>
                <div class="content">
                    <h2 class="product-title text-underline-bottom"><span>Times are new roman t-shirt</span></h2>
                    <div class="col-container">
                        <div class="col">
                            <select data-color-choice data-dropdown-css-class="black cart-resume color">
                                <option value="1" data-color="#000000" selected></option>
                                <option value="2" data-color="#ffffff"></option>
                                <option value="3" data-color="#1E90FF"></option>
                            </select>
                        </div>
                        <div class="col">
                            <select data-select2-enabled data-dropdown-css-class="black">
                                <option value="0">XS</option>
                                <option value="1" selected>S</option>
                                <option value="2">M</option>
                                <option value="3">L</option>
                                <option value="4">XL</option>
                            </select>
                        </div>
                        <div class="col">
                            <select data-select2-enabled data-dropdown-css-class="black">
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                            <span class="product-price">
                                17,95€
                                <span class="old-price">29,90€</span>
                            </span>
                    </div>
                </div>
            </div>
            <div class="cart-item">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="img">
                    <img width="82" height="106" src="img/tmp/product-small-85x110.jpg" />
                </div>
                <div class="content">
                    <h2 class="product-title text-underline-bottom"><span>Times are new roman t-shirt</span></h2>
                    <div class="col-container">
                        <div class="col">
                            <select data-color-choice data-dropdown-css-class="black cart-resume color">
                                <option value="1" data-color="#000000" selected></option>
                                <option value="2" data-color="#ffffff"></option>
                                <option value="3" data-color="#1E90FF"></option>
                            </select>
                        </div>
                        <div class="col">
                            <select data-select2-enabled data-dropdown-css-class="black">
                                <option value="0">XS</option>
                                <option value="1" selected>S</option>
                                <option value="2">M</option>
                                <option value="3">L</option>
                                <option value="4">XL</option>
                            </select>
                        </div>
                        <div class="col">
                            <select data-select2-enabled data-dropdown-css-class="black">
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                            <span class="product-price">
                                17,95€
                                <span class="old-price">29,90€</span>
                            </span>
                    </div>
                </div>
            </div>
            <div class="cart-item">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="img">
                    <img width="82" height="106" src="img/tmp/product-small-85x110.jpg" />
                </div>
                <div class="content">
                    <h2 class="product-title text-underline-bottom"><span>Times are new roman t-shirt</span></h2>
                    <div class="col-container">
                        <div class="col">
                            <select data-color-choice data-dropdown-css-class="black cart-resume color">
                                <option value="1" data-color="#000000" selected></option>
                                <option value="2" data-color="#ffffff"></option>
                                <option value="3" data-color="#1E90FF"></option>
                            </select>
                        </div>
                        <div class="col">
                            <select data-select2-enabled data-dropdown-css-class="black">
                                <option value="0">XS</option>
                                <option value="1" selected>S</option>
                                <option value="2">M</option>
                                <option value="3">L</option>
                                <option value="4">XL</option>
                            </select>
                        </div>
                        <div class="col">
                            <select data-select2-enabled data-dropdown-css-class="black">
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                            <span class="product-price">
                                17,95€
                                <span class="old-price">29,90€</span>
                            </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-numbers">
            <div class="title">Ma commande</div>
            <div class="num">
                <span>Sous-total</span>
                46,85 €
            </div>
            <div class="num">
                <span>Frais de port</span>
                46,85 €
            </div>
            <div class="num">
                <span>Crédits</span>
                -20 €
            </div>
            <div class="num total">
                <span>Total</span>
                46,85 €
            </div>
        </div>
    </div>
</div>
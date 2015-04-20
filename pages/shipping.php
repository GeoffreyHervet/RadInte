<div class="cart-container">
    <div class="container">
        <div class="breadcrumb-cart">
            <div class="active">
                <span class="step"><i class="glyphicon glyphicon-ok"></i></span>
                Connexion
            </div>
            <div class="active">
                <span class="step">2</span>
                Livraison
            </div>
            <div>
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
        Votre adresse de livraison
    </div>

    <div class="container containter-rel">
        <div class="cart-address">
            <div class="address-book">
                <h3 class="small-title">Carnet d'addresse</h3>
                <div class="item">
                    <div class="description">
                        <a href="javascript:;" class="hidden-md hidden-lg edit">Modifier</a>
                        <a href="javascript:;" class="hidden-md hidden-lg use">Livrer-ici</a>
                        35 rue des Jeuneurs, 75002, PARIS
                    </div>
                    <a href="javascript:;" class="visible-md-inline-block visible-lg-inline-block edit">Modifier</a>
                    <a href="javascript:;" class="visible-md-inline-block visible-lg-inline-block use">Livrer-ici</a>
                </div>
                <div class="item">
                    <div class="description">
                        <a href="javascript:;" class="hidden-md hidden-lg edit">Modifier</a>
                        <a href="javascript:;" class="hidden-md hidden-lg use">Livrer-ici</a>
                        35 rue des Jeuneurs, 75002, PARIS
                    </div>
                    <a href="javascript:;" class="visible-md-inline-block visible-lg-inline-block edit">Modifier</a>
                    <a href="javascript:;" class="visible-md-inline-block visible-lg-inline-block use">Livrer-ici</a>
                </div>
                <div class="item">
                    <div class="description">
                        <a href="javascript:;" class="hidden-md hidden-lg edit">Modifier</a>
                        <a href="javascript:;" class="hidden-md hidden-lg use">Livrer-ici</a>
                        35 rue des Jeuneurs, 75002, PARIS
                    </div>
                    <a href="javascript:;" class="visible-md-inline-block visible-lg-inline-block edit">Modifier</a>
                    <a href="javascript:;" class="visible-md-inline-block visible-lg-inline-block use">Livrer-ici</a>
                </div>
            </div>
            <form class="address form-vertical" method="POST" action="/?p=billing">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstname">Prénom</label>
                            <input type="text" class="form-control" id="firstname" placeholder="Prénom">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastname">Nom</label>
                            <input type="text" class="form-control" id="lastname" placeholder="Nom">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">Adresse de livraison</label>
                    <input type="text" class="form-control" id="address" placeholder="Adresse de livraison">
                    <input type="text" class="form-control" placeholder="Complément d'adresse">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="city">Ville</label>
                            <input type="text" class="form-control form-error" id="city" placeholder="Ville">
                            <div class="error">Ce champ est obligatoire</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="country">Pays</label>
                            <input type="text" class="form-control" id="country" placeholder="Pays">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="state">Département</label>
                            <input type="text" class="form-control" id="state" placeholder="Département">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="zip">Code postal</label>
                            <input type="number" class="form-control" id="zip" placeholder="Code postal">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="cell">Numéro de téléphone</label>
                    <input type="tel" class="form-control" id="cell" placeholder="Numéro de téléphone">
                    <div class="help">Indispensable pour la livraison et le suivi de votre colis.</div>
                </div>
                <div class="form-group ask-same-billing">
                    <label>
                        <input type="checkbox" id="different-billing" checked /> Adresse de facturation identique
                    </label>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn-full-width btn btn-danger" value="Valider →" />
                </div>
            </form>
        </div>
    </div>
    <div class="container hide"> <!-- Remove me if I still have the .hide class -->
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
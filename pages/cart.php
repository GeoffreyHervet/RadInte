<div class="cart-container">
    <div class="container">
        <div class="breadcrumb-cart">
            <div class="active">
                <span class="step">1</span>
                Connexion
            </div>
            <div class="disababled">
                <span class="step">2</span>
                Livraison
            </div>
            <div class="disababled">
                <span class="step">3</span>
                Paiement
            </div>
            <div class="disababled">
                <span class="step">4</span>
                Confirmation
            </div>
        </div>
    </div>

    <div class="cart-connexion container">
        <div class="page-title text-center">
            Connexion
            <a href="?p=inscription" class="text-gray-disabled text-underline-hover"><span>Inscription</span></a>
        </div>

        <div class="row">
            <form role="form" action="" method="post" class="form-vertical">
                <?php if (isset($_POST) && count($_POST)) { ?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Erreur !</strong> Mauvais identifiants
                    </div>
                <?php } ?>
                <div class="form-group">
                    <input type="email" name="email" required placeholder="Entrez votre e-mail" />
                </div>
                <div class="form-group">
                    <input type="password" name="password" required placeholder="Entrez votre mot de passe" />
                    <a href="javascript:;" title="Mot de passe oublié" class="forgot-pass">?</a>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-danger text-uppercase text-bold" value="Valider" />
                </div>
                <div class="or-separator">
                    <span>ou</span>
                    <a href="./" class="btn btn-primary">Connexion avec <strong>Facebook</strong></a>
                </div>
            </form>
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
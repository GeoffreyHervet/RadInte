<div class="cart-container">
    <div class="container">
        <div class="breadcrumb-cart">
            <div class="active">
                <span class="step">1</span>
                Récapitulatif
            </div>
            <div class="disabled">
                <span class="step">2</span>
                Connexion
            </div>
            <div class="disababled">
                <span class="step">3</span>
                Livraison
            </div>
            <div class="disababled">
                <span class="step">4</span>
                Paiement
            </div>
            <div class="disababled">
                <span class="step">5</span>
                Confirmation
            </div>
        </div>
    </div>

    <div class="container big-title">
        Récapitulatif de votre commande
    </div>

    <div class="container">
        <div class="cart-resume">
            <div class="cart-item">
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
            <?php if (isset($_POST, $_POST['code'])) { ?>
                <div class="num">
                    <span>Code Promo</span>
                    -20 €
                </div>
            <?php
            } else {
            ?>
            <div class="num code-promo">
                <form action="" method="post">
                    <input name="code" placeholder="Code Promo" type="text" />
                    <button type="submit"><i class="glyphicon glyphicon-ok"></i></button>
                </form>
            </div>
            <?php } ?>
            <div class="num total">
                <span>Total</span>
                46,85 €
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-4 col-md-4 col-xs-12">
                <a href="?p=cart" class="btn btn-danger btn-lg col-xs-12">Continuer</a>
            </div>
        </div>
    </div>
</div>
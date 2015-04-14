<?php
    $defaultPage = 'index.php';
    $page = isset($_GET['p']) ? $_GET['p'] . '.php' : $defaultPage;
    if (!in_array($page, scandir('pages'))) {
        die ('NO PAGE');
        die (header('Location: /'));
    }
    $bodyClass = in_array($page, array(
        'inscription.php',
        'connexion.php'
    )) ? 'gray' : '';
?>
<!DOCTYPE html>
<html lang="fr"<?php if (isset($_GET['left'])) echo ' class="nav-left"';?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Rad.co</title>

    <link href="css/rad.css?v=<?php echo time(); ?>" rel="stylesheet">
    <!--[if gte IE 9]>
    <style type="text/css">
        .gradient {
            filter: none;
        }
    </style>
    <![endif]-->
</head>

<body role="document" class="<?php echo $bodyClass; ?>">
<div id="fb-root"></div>
<!--<script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1448799852059806&version=v2.0";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>-->
<div id="site-wrapper">
<nav class="navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" id="right-menu-toggler">
                <span class="sr-only">Toggle navigation</span>
                <img src="img/collapse-cart.gif" />
            </button>
            <button type="button" class="navbar-toggle navbar-toggle-left collapsed" id="left-menu-toggler">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="img/logo.png" alt="RAD." title="Logo RAD.co" /></a>
        </div>
        <form role="form" method="GET" id="search" class="search">
            <a href="#search" data-toggle="collapse" aria-expanded="false"><i class="glyphicon-search glyphicon"></i></a>
            <input type="search" name="q" />
            <input type="submit" class="sr-only" value="Rechercher" />
        </form>
        <div id="navbar" class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle cart-btn" data-toggle="dropdown" role="button">
                        (<span id="cart-count">1</span><span class="hidden-md hidden-lg"> article </span>) Panier
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right cart-products hidden-sm hidden-xs" role="menu" id="cart-header-container">
                        <li class="border">
                            <a href="#" class="cart-product clearfix">
                                <img src="img/tmp/product-cart-54x54.jpg" alt="Mon produit de fou" />
                                <strong class="price text-white">19,90 €</strong>
                                <span class="price text-gray stroke-gray">29,90 €</span>
                                <span class="title">
                                    Happy christmas sweater
                                    <span class="specs">Happy christmas sweater</span>
                                </span>
                            </a>
                        </li>
                        <li class="border">
                            <a href="#" class="cart-product clearfix">
                                <img src="img/tmp/product-cart-54x54.jpg" alt="Mon produit de fou" />
                                <span class="price text-white">19,90 €</span>
                                <span class="title">
                                    Happy christmas sweater
                                    <span class="specs">Happy christmas sweater</span>
                                </span>
                            </a>
                        </li>
                        <li class="total clearfix">
                            <strong class="text-white pull-left">Sous-total</strong>
                            <strong class="text-gray stroke-gray pull-right">39,80 €</strong>
                            <strong class="text-white pull-right">39,80 € &nbsp; </strong>
                        </li>
                        <li class="actions">
                            <a href="#" class="btn btn-gray">Voir mon panier</a>
                            <a href="#" class="btn btn-white">Commander</a>
                        </li>
                    </ul>
                </li>
                <li><a data-toggle="modal" href="modals/country.html" data-target="#default-modal">France</a></li>
                <li><a href="?p=inscription">Inscription</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Mon compte</a>
                    <ul class="dropdown-menu dropdown-menu-left" role="menu">
                        <?php
                            foreach (scandir('pages') as $file) {
                                if ($file[0] == '.') {
                                    continue;
                                }
                                $name = explode('.', $file);
                                echo '<li><a class="text-underline-hover" href="?p='. $name[0] .'&v='.time().'"><span>'. ucfirst($name[0]) .'</span></a></li>';
                            }
                        ?>
                    </ul>
                </li>
                <li style="color: #ffffff">
                    <a href="#search" id="search-header">
                        <i class="glyphicon-search glyphicon"></i>
                        <span class="sm-only">&nbsp; Recherche</span>
                        <span class="sr-only">Recherche</span>
                    </a>
                    <form role="form" method="GET" id="search-mobile" class="search-mobile search hide">
                        <input type="search" name="q" />
                        <input type="submit" class="sr-only" value="Rechercher" />
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php require_once ('pages/' . $page); ?>

<div class="modal fade" id="default-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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


<footer class="fixed-footer">
    <div class="container">
        <ul>
            <li><a class="text-black text-underline-hover" data-toggle="modal" href="modals/service-client.html" data-target="#default-modal"><span>Service client</span></a></li>
            <li><a class="text-gray text-underline-hover" href="#"><span>Presse</span></a></li>
            <li><a class="text-gray text-underline-hover" href="#"><span>Newsletter</span></a></li>
            <li><a class="text-gray text-underline-hover" href="#"><span>Recrutement</span></a></li>
            <li><a class="text-gray text-underline-hover" href="#"><span>Suivez-nous</span></a></li>
            <li><div class="fb-like" data-href="https://www.facebook.com/rad" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div></li>
        </ul>
    </div>
</footer>
</div>
<script src="js/vendors.js"></script>
<script src="js/rad.js"></script>
</body>
</html>

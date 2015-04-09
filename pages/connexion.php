<div class="visible-xs">
    <?php require_once 'blocks/menu.php'; ?>
</div>
<div class="container">

    <div class="page-title text-center">
        <a href="./" class="back pull-left"><i class="glyphicon glyphicon-arrow-left"></i> retour</a>
        Connexion
        <a href="?p=inscription" class="text-gray-disabled">Inscription</a>
    </div>

    <div class="row">
        <form role="form" action="" method="post" class="form-vertical col-md-4 col-md-offset-4">
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
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-black text-uppercase text-bold" value="Valider" />
            </div>
            <div class="or-separator">
                <span>ou</span>
                <a href="./" class="btn btn-primary">Connexion avec <strong>Facebook</strong></a>
            </div>
        </form>
    </div>
</div>
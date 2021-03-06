<?php
session_start();
require 'Controllers/index_traitement.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BDD | Login </title>
    <link rel="stylesheet" href="Vendor/css/bootstrap.min.css">
</head>
<body>
<header>
    <nav class="navbar navbar-light bg-light">
        <p class="navbar-brand">BDD</p>
    </nav>
</header>

<?php if (!empty($errors) AND isset($errors)) { ?>
    <div class="alert alert-danger col-12 text-center mt-3" role="alert">
        liste des erreurs :
        <?php foreach ($errors as $error) {
            echo $error ?>
            |
        <?php } ?>
    </div>
<?php } ?>

<section class="d-flex justify-content-center mt-5">
    <div class="card text-center">
        <div class="card-header">
            Connexion
        </div>
        <form method="post">
            <div class="card-body">

                <div class="form-group">
                    <label for="pseudo">Pseudo</label>
                    <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Saisir un pseudo" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Saisir un mot de passe" required>
                </div>
            </div>
            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-success">Connexion</button>
            </div>
        </form>
    </div>
</section>
</body>
</html>

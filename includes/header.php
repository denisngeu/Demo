<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/style.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <h1><?php echo SITE_NAME; ?></h1>
            </div>
            <ul class="nav-links">
                <li><a href="<?php echo SITE_URL; ?>/public/index.php">Accueil</a></li>
                <li><a href="<?php echo SITE_URL; ?>/public/products.php">Produits</a></li>
                <li><a href="<?php echo SITE_URL; ?>/public/cart.php">Panier</a></li>
                <?php if(isset($_SESSION['user_id'])): ?>
                    <li><a href="<?php echo SITE_URL; ?>/public/customers.php">Mon Compte</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/public/logout.php">Déconnexion</a></li>
                <?php else: ?>
                    <li><a href="<?php echo SITE_URL; ?>/public/login.php">Connexion</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/public/register.php">Inscription</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    <main>

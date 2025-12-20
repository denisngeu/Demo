<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/header.php';
?>

<div class="login-container">
    <h2>Connexion</h2>
    <form method="POST" action="">
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <div class="form-group">
            <label>Mot de passe:</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit" class="btn">Se connecter</button>
    </form>
    <p>Pas encore de compte? <a href="register.php">S'inscrire</a></p>
</div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

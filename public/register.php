<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/header.php';
?>

<div class="register-container">
    <h2>Inscription</h2>
    <form method="POST" action="">
        <div class="form-group">
            <label>Nom d'utilisateur:</label>
            <input type="text" name="username" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <div class="form-group">
            <label>Mot de passe:</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit" class="btn">S'inscrire</button>
    </form>
    <p>Déjà un compte? <a href="login.php">Se connecter</a></p>
</div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

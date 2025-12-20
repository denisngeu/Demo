<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/header.php';
?>

<div class="hero">
    <h1>Bienvenue sur <?php echo SITE_NAME; ?></h1>
    <p>Découvrez notre collection de vélos de qualité</p>
    <a href="products.php" class="btn">Voir nos produits</a>
</div>

<div class="featured-products">
    <h2>Produits en vedette</h2>
    <?php
    $sql = "SELECT * FROM products LIMIT 6";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo '<div class="products-grid">';
        while($row = $result->fetch_assoc()) {
            echo '<div class="product-card">';
            echo '<h3>' . $row['name'] . '</h3>';
            echo '<p>' . $row['description'] . '</p>';
            echo '<p class="price">' . $row['price'] . ' €</p>';
            echo '<a href="products.php?id=' . $row['id'] . '" class="btn">Voir détails</a>';
            echo '</div>';
        }
        echo '</div>';
    } else {
        echo '<p>Aucun produit disponible pour le moment.</p>';
    }
    ?>
</div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

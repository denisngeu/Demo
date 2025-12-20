<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/header.php';
?>

<h2>Nos Produits</h2>
<div class="products-container">
    <?php
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        while($product = $result->fetch_assoc()) {
            echo '<div class="product-item">';
            echo '<h3>' . $product['name'] . '</h3>';
            echo '<p>' . $product['description'] . '</p>';
            echo '<p class="price">' . $product['price'] . ' €</p>';
            echo '<button class="btn">Ajouter au panier</button>';
            echo '</div>';
        }
    }
    ?>
</div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

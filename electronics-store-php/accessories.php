<?php
$products = [
    ['name' => 'Wireless Headphones', 'price' => 199, 'icon' => 'fas fa-headphones'],
    ['name' => 'Fast Charger', 'price' => 49, 'icon' => 'fas fa-charging-station'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Accessories - Electronics Store</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/styles.css" />
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <h1>Electronics Store - Accessories</h1>
    <nav>
      <a href="index.php">Home</a>
    </nav>
  </header>
  <main>
    <h2>Accessories</h2>
    <div class="products">
      <?php foreach ($products as $product): ?>
        <div class="product">
          <i class="<?php echo $product['icon']; ?> fa-5x"></i>
          <h3><?php echo htmlspecialchars($product['name']); ?></h3>
          <p>$<?php echo number_format($product['price'], 2); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </main>
  <footer>
    &copy; 2024 Electronics Store. All rights reserved.
  </footer>
</body>
</html>

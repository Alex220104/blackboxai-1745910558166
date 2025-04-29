<?php
$products = [
    ['name' => 'Laptop Model X', 'price' => 999, 'image' => 'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=400&q=80'],
    ['name' => 'Laptop Model Y', 'price' => 1299, 'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=400&q=80'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Laptops - Electronics Store</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
  <header>
    <h1>Electronics Store - Laptops</h1>
    <nav>
      <a href="index.php">Home</a>
    </nav>
  </header>
  <main>
    <h2>Laptops</h2>
    <div class="products">
      <?php foreach ($products as $product): ?>
        <div class="product">
          <img src="<?php echo $product['image']; ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" />
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

<?php
$categories = [
    'phones' => 'Phones',
    'laptops' => 'Laptops',
    'accessories' => 'Accessories',
    'components' => 'Electronic Components'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Electronics Store - Home</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
  <header>
    <h1>Electronics Store</h1>
    <nav>
      <ul>
        <?php foreach ($categories as $slug => $name): ?>
          <li><a href="<?php echo $slug; ?>.php"><?php echo $name; ?></a></li>
        <?php endforeach; ?>
      </ul>
    </nav>
  </header>
  <main>
    <h2>Welcome to Electronics Store</h2>
    <p>Your trusted source for genuine phones, laptops, accessories, and electronic components.</p>
  </main>
  <footer>
    &copy; 2024 Electronics Store. All rights reserved.
  </footer>
</body>
</html>

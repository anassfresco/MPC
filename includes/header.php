<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MPC Group - <?php echo $page_title; ?></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="main-header">
        <div class="container">
            <nav class="nav-wrapper">
                <a href="index.php" class="logo">
                    <img src="img/logo.png" alt="MPC Group Logo">
                </a>
                <ul class="nav-menu">
                    <li><a href="index.php" class="<?php echo ($current_page == 'home') ? 'active' : ''; ?>">Accueil</a></li>
                    <li><a href="about.php" class="<?php echo ($current_page == 'about') ? 'active' : ''; ?>">À Propos</a></li>
                    <li><a href="services.php" class="<?php echo ($current_page == 'services') ? 'active' : ''; ?>">Services</a></li>
                    <li><a href="products.php" class="<?php echo ($current_page == 'products') ? 'active' : ''; ?>">Produits</a></li>
                    <li><a href="solutions.php" class="<?php echo ($current_page == 'solutions') ? 'active' : ''; ?>">Solutions</a></li>
                    <li><a href="sectors.php" class="<?php echo ($current_page == 'sectors') ? 'active' : ''; ?>">Secteurs</a></li>
                    <li><a href="news.php" class="<?php echo ($current_page == 'news') ? 'active' : ''; ?>">Actualités</a></li>
                    <li><a href="contact.php" class="<?php echo ($current_page == 'contact') ? 'active' : ''; ?>">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
</body>
</html> 
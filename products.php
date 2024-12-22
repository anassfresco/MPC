<?php 
$page_title = "Nos Produits";
$current_page = "products";
include 'includes/header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h1>Nos Produits</h1>
            <p>Découvrez notre gamme complète de produits de qualité</p>
        </div>
    </section>

    <section class="products-content">
        <div class="container">
            <div class="products-categories">
                <div class="category-card">
                    <img src="img/products/category1.jpg" alt="Matériaux de Construction">
                    <div class="category-content">
                        <h2>Matériaux de Construction</h2>
                        <ul class="product-list">
                            <li>Ciment</li>
                            <li>Béton</li>
                            <li>Agrégats</li>
                            <li>Acier</li>
                        </ul>
                        <a href="#" class="btn-link">En savoir plus →</a>
                    </div>
                </div>

                <div class="category-card">
                    <img src="img/products/category2.jpg" alt="Équipements">
                    <div class="category-content">
                        <h2>Équipements</h2>
                        <ul class="product-list">
                            <li>Machines de Construction</li>
                            <li>Outils Spécialisés</li>
                            <li>Équipements de Sécurité</li>
                            <li>Matériel de Mesure</li>
                        </ul>
                        <a href="#" class="btn-link">En savoir plus →</a>
                    </div>
                </div>

                <div class="category-card">
                    <img src="img/products/category3.jpg" alt="Finition">
                    <div class="category-content">
                        <h2>Finition</h2>
                        <ul class="product-list">
                            <li>Peintures</li>
                            <li>Revêtements</li>
                            <li>Carrelages</li>
                            <li>Matériaux d'Isolation</li>
                        </ul>
                        <a href="#" class="btn-link">En savoir plus →</a>
                    </div>
                </div>
            </div>

            <div class="featured-products">
                <h2>Produits Vedettes</h2>
                <div class="products-grid">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="img/products/product1.jpg" alt="Produit 1">
                        </div>
                        <div class="product-info">
                            <h3>Ciment Premium</h3>
                            <p>Ciment haute performance pour tous types de construction.</p>
                            <a href="#" class="btn-outline">Détails</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image">
                            <img src="img/products/product2.jpg" alt="Produit 2">
                        </div>
                        <div class="product-info">
                            <h3>Béton Prêt à l'Emploi</h3>
                            <p>Solution pratique pour vos projets de construction.</p>
                            <a href="#" class="btn-outline">Détails</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image">
                            <img src="img/products/product3.jpg" alt="Produit 3">
                        </div>
                        <div class="product-info">
                            <h3>Acier de Construction</h3>
                            <p>Acier de haute qualité pour une résistance optimale.</p>
                            <a href="#" class="btn-outline">Détails</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="quality-section">
        <div class="container">
            <div class="quality-content">
                <h2>Notre Engagement Qualité</h2>
                <p>Tous nos produits sont soumis à des contrôles qualité rigoureux pour garantir leur performance et leur durabilité.</p>
                <div class="quality-features">
                    <div class="quality-feature">
                        <i class="fas fa-certificate"></i>
                        <h3>Certifications</h3>
                        <p>Produits certifiés aux normes internationales</p>
                    </div>
                    <div class="quality-feature">
                        <i class="fas fa-flask"></i>
                        <h3>Tests</h3>
                        <p>Tests réguliers en laboratoire</p>
                    </div>
                    <div class="quality-feature">
                        <i class="fas fa-shield-alt"></i>
                        <h3>Garantie</h3>
                        <p>Garantie sur tous nos produits</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
.products-content {
    padding: 4rem 0;
}

.products-categories {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    margin-bottom: 4rem;
}

.category-card {
    background: var(--white);
    border-radius: 8px;
    overflow: hidden;
    box-shadow: var(--shadow-sm);
    transition: var(--transition);
}

.category-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-md);
}

.category-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.category-content {
    padding: 2rem;
}

.category-content h2 {
    margin-bottom: 1rem;
    color: var(--text-dark);
}

.product-list {
    list-style: none;
    margin: 0 0 1.5rem 0;
    padding: 0;
}

.product-list li {
    padding: 0.5rem 0;
    color: var(--text-light);
    border-bottom: 1px solid #eee;
}

.product-list li:last-child {
    border-bottom: none;
}

.featured-products {
    margin-top: 4rem;
}

.featured-products h2 {
    text-align: center;
    margin-bottom: 3rem;
}

.products-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
}

.product-card {
    background: var(--white);
    border-radius: 8px;
    overflow: hidden;
    box-shadow: var(--shadow-sm);
    transition: var(--transition);
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-md);
}

.product-image {
    height: 250px;
    overflow: hidden;
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.product-info {
    padding: 1.5rem;
    text-align: center;
}

.product-info h3 {
    margin-bottom: 1rem;
    color: var(--text-dark);
}

.product-info p {
    color: var(--text-light);
    margin-bottom: 1.5rem;
}

.quality-section {
    background: var(--background-light);
    padding: 4rem 0;
    margin-top: 4rem;
}

.quality-content {
    text-align: center;
}

.quality-content h2 {
    margin-bottom: 1rem;
}

.quality-content > p {
    max-width: 600px;
    margin: 0 auto 3rem;
    color: var(--text-light);
}

.quality-features {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
}

.quality-feature {
    padding: 2rem;
    background: var(--white);
    border-radius: 8px;
    box-shadow: var(--shadow-sm);
}

.quality-feature i {
    font-size: 2.5rem;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

.quality-feature h3 {
    margin-bottom: 0.5rem;
    color: var(--text-dark);
}

.quality-feature p {
    color: var(--text-light);
}

@media (max-width: 768px) {
    .products-categories,
    .products-grid,
    .quality-features {
        grid-template-columns: 1fr;
    }
}
</style>

<?php include 'includes/footer.php'; ?>

<?php 
$page_title = "Secteurs d'Activité";
$current_page = "sectors";
include 'includes/header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h1>Secteurs d'Activité</h1>
            <p>Des solutions adaptées pour chaque industrie</p>
        </div>
    </section>

    <section class="sectors-intro">
        <div class="container">
            <p class="intro-text">
                MPC Group est fier d'intervenir dans une large variété de secteurs industriels. Nous offrons des solutions adaptées aux exigences spécifiques de chaque domaine, en intégrant des technologies de pointe pour améliorer la productivité, réduire les coûts et garantir des performances optimales. Nos secteurs d'activité comprennent l'industrie manufacturière, l'énergie, le secteur minier, et bien d'autres, chacun ayant ses propres défis que nous abordons avec des solutions innovantes et sur mesure.
            </p>
        </div>
    </section>

    <section class="sectors-grid">
        <div class="container">
            <!-- Manufacturing Industry -->
            <div class="sector-card">
                <div class="sector-image">
                    <img src="img/sectors/manufacturing.jpg" alt="Industrie manufacturière">
                </div>
                <div class="sector-content">
                    <h2>Industrie manufacturière</h2>
                    <p>L'industrie manufacturière nécessite une automatisation avancée et des équipements fiables pour garantir des processus de production efficaces. MPC Group propose des solutions d'instrumentation et de contrôle qui permettent une gestion optimale des flux et des paramètres dans les lignes de production.</p>
                    <ul class="sector-features">
                        <li>Amélioration de la productivité</li>
                        <li>Réduction des coûts opérationnels</li>
                        <li>Garantie de qualité constante</li>
                        <li>Automatisation des processus</li>
                    </ul>
                    <a href="#" class="btn-outline">En savoir plus</a>
                </div>
            </div>

            <!-- Energy and Petrochemicals -->
            <div class="sector-card">
                <div class="sector-image">
                    <img src="img/sectors/energy.jpg" alt="Énergie et Pétrochimie">
                </div>
                <div class="sector-content">
                    <h2>Énergie et Pétrochimie</h2>
                    <p>Dans les secteurs de l'énergie et de la pétrochimie, la sécurité et la fiabilité des installations sont primordiales. Nos solutions de robinetterie industrielle et d'instrumentation permettent de contrôler et de réguler les flux dans des environnements exigeants.</p>
                    <ul class="sector-features">
                        <li>Solutions de robinetterie industrielle</li>
                        <li>Contrôle et régulation des flux</li>
                        <li>Produits robustes et performants</li>
                        <li>Partenariat avec Valmet</li>
                    </ul>
                    <a href="#" class="btn-outline">En savoir plus</a>
                </div>
            </div>

            <!-- Mining Sector -->
            <div class="sector-card">
                <div class="sector-image">
                    <img src="img/sectors/mining.jpg" alt="Secteur Minier">
                </div>
                <div class="sector-content">
                    <h2>Secteur Minier</h2>
                    <p>Les équipements miniers sont confrontés à des conditions de travail difficiles. MPC Group offre des solutions spécifiques pour l'optimisation de la performance des équipements dans ce secteur.</p>
                    <ul class="sector-features">
                        <li>Prolongation de la durée de vie des équipements</li>
                        <li>Réduction des coûts de maintenance</li>
                        <li>Pièces de rechange de haute qualité</li>
                        <li>Équipements sur mesure</li>
                    </ul>
                    <a href="#" class="btn-outline">En savoir plus</a>
                </div>
            </div>

            <!-- Water Treatment -->
            <div class="sector-card">
                <div class="sector-image">
                    <img src="img/sectors/water.jpg" alt="Traitement de l'eau">
                </div>
                <div class="sector-content">
                    <h2>Traitement de l'eau</h2>
                    <p>Le traitement de l'eau est essentiel pour garantir des ressources durables. MPC Group offre des solutions efficaces pour le traitement de l'eau, contribuant à une gestion responsable des ressources en eau.</p>
                    <ul class="sector-features">
                        <li>Technologies de pointe</li>
                        <li>Optimisation de l'utilisation de l'eau</li>
                        <li>Minimisation de l'impact environnemental</li>
                        <li>Solutions durables</li>
                    </ul>
                    <a href="#" class="btn-outline">En savoir plus</a>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
.sectors-intro {
    padding: 4rem 0;
    background: var(--background-light);
}

.intro-text {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
    color: var(--text-light);
    line-height: 1.8;
}

.sectors-grid {
    padding: 4rem 0;
}

.sector-card {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3rem;
    margin-bottom: 4rem;
    align-items: center;
}

.sector-card:nth-child(even) {
    direction: rtl;
}

.sector-card:nth-child(even) .sector-content {
    direction: ltr;
}

.sector-image {
    border-radius: 8px;
    overflow: hidden;
    box-shadow: var(--shadow-md);
}

.sector-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.sector-content {
    padding: 2rem;
}

.sector-content h2 {
    color: var(--text-dark);
    margin-bottom: 1.5rem;
}

.sector-content p {
    color: var(--text-light);
    margin-bottom: 2rem;
    line-height: 1.8;
}

.sector-features {
    list-style: none;
    margin-bottom: 2rem;
}

.sector-features li {
    color: var(--text-light);
    margin-bottom: 0.5rem;
    padding-left: 1.5rem;
    position: relative;
}

.sector-features li::before {
    content: "•";
    color: var(--primary-color);
    position: absolute;
    left: 0;
}

@media (max-width: 992px) {
    .sector-card {
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    .sector-card:nth-child(even) {
        direction: ltr;
    }

    .sector-image {
        height: 300px;
    }
}

@media (max-width: 768px) {
    .sector-content {
        padding: 1rem 0;
    }
}
</style>

<?php include 'includes/footer.php'; ?> 
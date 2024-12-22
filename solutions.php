<?php 
$page_title = "Nos Solutions";
$current_page = "solutions";
include 'includes/header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h1>Nos Solutions</h1>
            <p>Des solutions innovantes pour répondre à vos besoins</p>
        </div>
    </section>

    <section class="solutions-content">
        <div class="container">
            <div class="solutions-intro">
                <h2>Solutions Complètes pour l'Industrie</h2>
                <p>Nous proposons une gamme complète de solutions adaptées aux besoins spécifiques de chaque secteur d'activité. Notre expertise nous permet de vous accompagner dans tous vos projets.</p>
            </div>

            <div class="solutions-grid">
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Solutions Industrielles</h3>
                    <p>Solutions complètes pour l'industrie manufacturière et la production.</p>
                    <ul class="solution-features">
                        <li>Automatisation des processus</li>
                        <li>Optimisation de la production</li>
                        <li>Maintenance prédictive</li>
                        <li>Gestion de l'énergie</li>
                    </ul>
                    <a href="#" class="btn-outline">En savoir plus</a>
                </div>

                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Construction</h3>
                    <p>Expertise complète pour vos projets de construction et rénovation.</p>
                    <ul class="solution-features">
                        <li>Gestion de projet</li>
                        <li>Solutions durables</li>
                        <li>Innovation technique</li>
                        <li>Conformité aux normes</li>
                    </ul>
                    <a href="#" class="btn-outline">En savoir plus</a>
                </div>

                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Services Techniques</h3>
                    <p>Support technique et maintenance pour vos installations.</p>
                    <ul class="solution-features">
                        <li>Maintenance préventive</li>
                        <li>Support 24/7</li>
                        <li>Formation technique</li>
                        <li>Optimisation des systèmes</li>
                    </ul>
                    <a href="#" class="btn-outline">En savoir plus</a>
                </div>
            </div>

            <div class="expertise-section">
                <div class="expertise-content">
                    <h2>Notre Expertise</h2>
                    <p>Forte de son expérience, MPC Group vous accompagne dans la réalisation de vos projets avec une expertise pointue et des solutions sur mesure.</p>
                    
                    <div class="expertise-grid">
                        <div class="expertise-item">
                            <div class="expertise-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="expertise-info">
                                <h3>Analyse et Conseil</h3>
                                <p>Étude approfondie de vos besoins et recommandations personnalisées.</p>
                            </div>
                        </div>

                        <div class="expertise-item">
                            <div class="expertise-icon">
                                <i class="fas fa-tools"></i>
                            </div>
                            <div class="expertise-info">
                                <h3>Mise en Œuvre</h3>
                                <p>Réalisation et suivi de projet avec une équipe dédiée.</p>
                            </div>
                        </div>

                        <div class="expertise-item">
                            <div class="expertise-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div class="expertise-info">
                                <h3>Support Continu</h3>
                                <p>Accompagnement et maintenance pour garantir la performance.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="partners-section">
        <div class="container">
            <h2>Nos Partenaires</h2>
            <p>Nous collaborons avec les meilleurs acteurs du secteur pour vous offrir des solutions optimales.</p>
            
            <div class="partners-grid">
                <div class="partner-card">
                    <img src="img/partners/partner1.png" alt="Partner 1">
                </div>
                <div class="partner-card">
                    <img src="img/partners/partner2.png" alt="Partner 2">
                </div>
                <div class="partner-card">
                    <img src="img/partners/partner3.png" alt="Partner 3">
                </div>
                <div class="partner-card">
                    <img src="img/partners/partner4.png" alt="Partner 4">
                </div>
            </div>
        </div>
    </section>
</main>

<style>
.solutions-content {
    padding: 4rem 0;
}

.solutions-intro {
    text-align: center;
    max-width: 800px;
    margin: 0 auto 4rem;
}

.solutions-intro h2 {
    margin-bottom: 1rem;
    color: var(--text-dark);
}

.solutions-intro p {
    color: var(--text-light);
}

.solutions-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    margin-bottom: 4rem;
}

.solution-card {
    background: var(--white);
    padding: 2rem;
    border-radius: 8px;
    box-shadow: var(--shadow-sm);
    transition: var(--transition);
}

.solution-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-md);
}

.solution-icon {
    width: 80px;
    height: 80px;
    background: var(--primary-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
}

.solution-icon i {
    font-size: 2rem;
    color: var(--white);
}

.solution-card h3 {
    margin-bottom: 1rem;
    color: var(--text-dark);
}

.solution-card > p {
    color: var(--text-light);
    margin-bottom: 1.5rem;
}

.solution-features {
    list-style: none;
    margin: 0 0 1.5rem 0;
    padding: 0;
}

.solution-features li {
    padding: 0.5rem 0;
    color: var(--text-light);
    display: flex;
    align-items: center;
}

.solution-features li::before {
    content: "→";
    color: var(--primary-color);
    margin-right: 0.5rem;
}

.expertise-section {
    background: var(--background-light);
    padding: 4rem 0;
    margin: 4rem -2rem 0;
}

.expertise-content {
    text-align: center;
}

.expertise-content h2 {
    margin-bottom: 1rem;
}

.expertise-content > p {
    max-width: 600px;
    margin: 0 auto 3rem;
    color: var(--text-light);
}

.expertise-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
}

.expertise-item {
    background: var(--white);
    padding: 2rem;
    border-radius: 8px;
    box-shadow: var(--shadow-sm);
    display: flex;
    align-items: flex-start;
    text-align: left;
}

.expertise-icon {
    width: 50px;
    height: 50px;
    background: var(--primary-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1rem;
    flex-shrink: 0;
}

.expertise-icon i {
    font-size: 1.5rem;
    color: var(--white);
}

.expertise-info h3 {
    margin-bottom: 0.5rem;
    color: var(--text-dark);
}

.expertise-info p {
    color: var(--text-light);
    font-size: 0.9rem;
    margin: 0;
}

.partners-section {
    padding: 4rem 0;
    text-align: center;
}

.partners-section h2 {
    margin-bottom: 1rem;
}

.partners-section > p {
    max-width: 600px;
    margin: 0 auto 3rem;
    color: var(--text-light);
}

.partners-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2rem;
    align-items: center;
}

.partner-card {
    background: var(--white);
    padding: 2rem;
    border-radius: 8px;
    box-shadow: var(--shadow-sm);
    transition: var(--transition);
}

.partner-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-md);
}

.partner-card img {
    max-width: 150px;
    height: auto;
}

@media (max-width: 768px) {
    .solutions-grid,
    .expertise-grid,
    .partners-grid {
        grid-template-columns: 1fr;
    }

    .expertise-section {
        margin: 4rem 0 0;
    }
}
</style>

<?php include 'includes/footer.php'; ?> 
<?php
$page_title = "À Propos";
$current_page = "about";
include 'includes/header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h1>À Propos de MPC Group</h1>
            <p>Découvrez notre histoire et notre engagement</p>
        </div>
    </section>

    <section class="about-content">
        <div class="container">
            <div class="about-grid">
                <div class="about-text">
                    <h2>Notre Histoire</h2>
                    <p>Depuis plus de 20 ans, MPC Group s'est imposé comme un acteur majeur dans le domaine des solutions industrielles et de la construction. Notre engagement envers l'excellence et l'innovation nous a permis de devenir un partenaire de confiance pour nos clients.</p>
                    
                    <h2>Notre Mission</h2>
                    <p>Notre mission est d'offrir des solutions innovantes et durables qui répondent aux défis complexes de l'industrie moderne, tout en maintenant les plus hauts standards de qualité et de service client.</p>

                    <div class="values-grid">
                        <div class="value-card">
                            <i class="fas fa-medal"></i>
                            <h3>Excellence</h3>
                            <p>Nous visons l'excellence dans chaque aspect de notre travail.</p>
                        </div>
                        
                        <div class="value-card">
                            <i class="fas fa-handshake"></i>
                            <h3>Partenariat</h3>
                            <p>Nous construisons des relations durables avec nos clients et partenaires.</p>
                        </div>
                        
                        <div class="value-card">
                            <i class="fas fa-leaf"></i>
                            <h3>Durabilité</h3>
                            <p>Nous nous engageons pour un avenir plus durable.</p>
                        </div>
                    </div>
                </div>
                
                <div class="about-image">
                    <img src="img/about/company.jpg" alt="MPC Group Building">
                    <div class="about-stats">
                        <div class="stat-item">
                            <span class="stat-number">20+</span>
                            <span class="stat-label">Années d'expérience</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">Projets réalisés</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">50+</span>
                            <span class="stat-label">Experts qualifiés</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="certifications-section">
                <h2>Nos Certifications</h2>
                <div class="certifications-grid">
                    <div class="certification-card">
                        <img src="img/certifications/iso9001.png" alt="ISO 9001">
                        <h3>ISO 9001:2015</h3>
                        <p>Système de management de la qualité</p>
                    </div>
                    <div class="certification-card">
                        <img src="img/certifications/iso14001.png" alt="ISO 14001">
                        <h3>ISO 14001:2015</h3>
                        <p>Management environnemental</p>
                    </div>
                    <div class="certification-card">
                        <img src="img/certifications/ohsas18001.png" alt="OHSAS 18001">
                        <h3>OHSAS 18001</h3>
                        <p>Santé et sécurité au travail</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <h2>Prêt à Collaborer ?</h2>
            <p>Découvrez comment nous pouvons vous aider à réaliser vos projets.</p>
            <a href="contact.php" class="btn">Contactez-nous</a>
        </div>
    </section>
</main>

<style>
.about-content {
    padding: 4rem 0;
    margin-top: var(--header-height);
}

.about-grid {
    display: grid;
    grid-template-columns: 3fr 2fr;
    gap: 4rem;
    margin-bottom: 4rem;
}

.about-text {
    width: 100%;
}

.about-text h2 {
    margin-bottom: 1.5rem;
    color: var(--text-dark);
}

.about-text p {
    margin-bottom: 2rem;
    color: var(--text-light);
    line-height: 1.8;
}

.values-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    margin-bottom: 4rem;
}

.value-card {
    text-align: center;
    padding: 2rem;
    background: var(--white);
    border-radius: 8px;
    box-shadow: var(--shadow-sm);
    transition: var(--transition);
}

.value-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-md);
}

.value-card i {
    font-size: 2.5rem;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

.value-card h3 {
    margin-bottom: 1rem;
    color: var(--text-dark);
}

.value-card p {
    color: var(--text-light);
    margin-bottom: 0;
    font-size: 0.9rem;
}

.about-image {
    position: sticky;
    top: calc(var(--header-height) + 2rem);
}

.about-image img {
    width: 100%;
    height: auto;
    border-radius: 8px;
    box-shadow: var(--shadow-md);
    margin-bottom: 2rem;
}

.about-stats {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1rem;
    padding: 1.5rem;
    background: var(--white);
    border-radius: 8px;
    box-shadow: var(--shadow-md);
}

.stat-item {
    text-align: center;
    padding: 0.75rem;
}

.stat-number {
    display: block;
    font-size: 2rem;
    font-weight: 700;
    color: var(--primary-color);
    margin-bottom: 0.25rem;
    line-height: 1;
}

.stat-label {
    display: block;
    color: var(--text-light);
    font-size: 0.85rem;
}

.certifications-section {
    margin-top: 6rem;
    text-align: center;
}

.certifications-section h2 {
    margin-bottom: 3rem;
}

.certifications-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
}

.certification-card {
    background: var(--white);
    padding: 2rem;
    border-radius: 8px;
    box-shadow: var(--shadow-sm);
    transition: var(--transition);
}

.certification-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-md);
}

.certification-card img {
    width: 120px;
    height: 120px;
    margin-bottom: 1.5rem;
}

.certification-card h3 {
    margin-bottom: 0.5rem;
    color: var(--text-dark);
}

.certification-card p {
    color: var(--text-light);
    font-size: 0.9rem;
}

.cta-section {
    background: var(--text-dark);
    color: var(--white);
    padding: 4rem 0;
    text-align: center;
    margin-top: 4rem;
}

.cta-section h2 {
    margin-bottom: 1rem;
}

.cta-section p {
    margin-bottom: 2rem;
    color: var(--text-gray);
}

@media (max-width: 992px) {
    .about-grid {
        grid-template-columns: 1fr;
    }
    
    .about-image {
        position: relative;
        top: 0;
    }
}

@media (max-width: 768px) {
    .about-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    .values-grid,
    .certifications-grid {
        grid-template-columns: 1fr;
    }

    .values-grid,
    .about-stats {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 480px) {
    .values-grid,
    .about-stats {
        grid-template-columns: 1fr;
    }
}
</style>

<?php include 'includes/footer.php'; ?>
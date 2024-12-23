<?php 
$page_title = "Nos Services";
$current_page = "services";
include 'includes/header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h1>Nos Services</h1>
            <p>Un accompagnement complet pour votre performance industrielle</p>
        </div>
    </section>

    <section class="services-intro">
        <div class="container">
            <p class="intro-text">
                MPC Group ne se limite pas à fournir des produits de qualité, nous offrons également un accompagnement complet et personnalisé pour optimiser les performances industrielles de nos clients. Nous proposons des services sur mesure, allant de l'audit à la mise en œuvre de solutions, en passant par un support technique de haute qualité et des formations adaptées aux besoins spécifiques de chaque client. Notre objectif est de garantir la satisfaction totale de nos clients en leur offrant des services qui maximisent l'efficacité de leurs processus industriels tout en réduisant leurs coûts opérationnels.
            </p>
        </div>
    </section>

    <section class="services-content">
        <div class="container">
            <!-- Custom Solutions -->
            <div class="service-card">
                <div class="service-image">
                    <img src="img/services/custom-solutions.jpg" alt="Solutions sur mesure">
                </div>
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h2>Solutions sur mesure</h2>
                    <p>Chez MPC Group, nous comprenons que chaque entreprise a des besoins uniques. C'est pourquoi nous mettons un point d'honneur à offrir des solutions personnalisées, adaptées aux spécificités de chaque secteur.</p>
                    <ul class="service-features">
                        <li>Analyse approfondie des besoins</li>
                        <li>Solutions adaptées à chaque secteur</li>
                        <li>Optimisation des performances</li>
                        <li>Résultats mesurables</li>
                    </ul>
                </div>
            </div>

            <!-- Technical Support -->
            <div class="service-card">
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h2>Support technique et maintenance proactive</h2>
                    <p>Nous croyons qu'un service après-vente de qualité est essentiel pour garantir la pérennité des équipements. C'est pourquoi nous proposons un support technique réactif et une maintenance proactive pour assurer le bon fonctionnement de toutes les solutions que nous fournissons.</p>
                    <ul class="service-features">
                        <li>Support technique réactif</li>
                        <li>Maintenance préventive</li>
                        <li>Diagnostics réguliers</li>
                        <li>Optimisation continue</li>
                    </ul>
                </div>
                <div class="service-image">
                    <img src="img/services/technical-support.jpg" alt="Support technique">
                </div>
            </div>

            <!-- Training -->
            <div class="service-card">
                <div class="service-image">
                    <img src="img/services/training.jpg" alt="Formation">
                </div>
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h2>Formation et transfert de compétences</h2>
                    <p>Nous savons que la maîtrise des équipements est essentielle pour garantir leur efficacité. C'est pourquoi nous offrons des formations sur mesure pour les équipes de nos clients.</p>
                    <ul class="service-features">
                        <li>Formations personnalisées</li>
                        <li>Transfert de compétences</li>
                        <li>Support continu</li>
                        <li>Documentation complète</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <h2>Besoin d'un accompagnement personnalisé?</h2>
            <p>Nos experts sont à votre disposition pour étudier vos besoins et vous proposer les meilleures solutions.</p>
            <a href="contact.php" class="btn btn-primary">Prenez contact pour une consultation</a>
        </div>
    </section>
</main>

<style>
.services-intro {
    padding: 4rem 0;
}

.intro-text {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
    color: var(--text-light);
    line-height: 1.8;
}

.services-content {
    padding: 2rem 0;
}

.service-card {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    margin-bottom: 4rem;
    align-items: center;
}

.service-card:nth-child(even) {
    direction: rtl;
}

.service-card:nth-child(even) .service-content {
    direction: ltr;
}

.service-image {
    border-radius: 8px;
    overflow: hidden;
    box-shadow: var(--shadow-md);
}

.service-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.service-content {
    padding: 2rem;
}

.service-icon {
    width: 60px;
    height: 60px;
    background: var(--primary-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
}

.service-icon i {
    font-size: 1.5rem;
    color: var(--white);
}

.service-content h2 {
    color: var(--text-dark);
    margin-bottom: 1.5rem;
}

.service-content p {
    color: var(--text-light);
    margin-bottom: 2rem;
    line-height: 1.8;
}

.service-features {
    list-style: none;
}

.service-features li {
    color: var(--text-light);
    margin-bottom: 0.5rem;
    padding-left: 1.5rem;
    position: relative;
}

.service-features li::before {
    content: "•";
    color: var(--primary-color);
    position: absolute;
    left: 0;
}

.cta-section {
    background: var(--primary-color);
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
    opacity: 0.9;
}

.btn-primary {
    background: var(--white);
    color: var(--primary-color);
    padding: 1rem 2rem;
    border-radius: 4px;
    text-decoration: none;
    font-weight: 600;
    transition: var(--transition);
    display: inline-block;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
}

@media (max-width: 992px) {
    .service-card {
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    .service-card:nth-child(even) {
        direction: ltr;
    }

    .service-image {
        height: 300px;
    }
}

@media (max-width: 768px) {
    .service-content {
        padding: 1rem 0;
    }
}
</style>

<?php include 'includes/footer.php'; ?> 
<?php 
$page_title = "Solutions Industrielles";
$current_page = "solutions";
include 'includes/header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h1>Solutions Industrielles</h1>
            <p>Des solutions innovantes et sur mesure pour votre industrie</p>
        </div>
    </section>

    <section class="solutions-content">
        <div class="container">
            <div class="solutions-intro">
                <h2>Solutions Complètes pour l'Industrie</h2>
                <p>Chez MPC Group, nous proposons une gamme complète de solutions industrielles sur mesure, conçues pour répondre aux besoins spécifiques de chaque secteur. Nous comprenons que chaque industrie fait face à des défis uniques, et nous mettons notre expertise à votre service pour offrir des solutions innovantes, efficaces et durables. Que ce soit pour l'optimisation des processus, la réduction des coûts, ou la gestion des flux dans des environnements complexes, nous avons la solution adaptée à vos besoins.</p>
            </div>

            <div class="solutions-grid">
                <!-- Instrumentation et contrôle -->
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Instrumentation et contrôle</h3>
                    <p>Solutions avancées d'instrumentation industrielle pour une mesure précise et un contrôle rigoureux des paramètres clés.</p>
                    <ul class="solution-features">
                        <li>Mesure de débit, température, pression et niveau</li>
                        <li>Technologies Endress+Hauser</li>
                        <li>Optimisation continue des processus</li>
                        <li>Solutions adaptées à tous secteurs</li>
                    </ul>
                    <div class="partner-logo">
                        <img src="img/partners/endress.png" alt="Endress+Hauser">
                    </div>
                </div>

                <!-- Robinetterie et régulation -->
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-valve"></i>
                    </div>
                    <h3>Robinetterie et régulation</h3>
                    <p>Solutions de robinetterie industrielle conçues pour les environnements les plus exigeants.</p>
                    <ul class="solution-features">
                        <li>Vannes et systèmes de régulation</li>
                        <li>Solutions Valmet haute performance</li>
                        <li>Gestion optimale des fluides</li>
                        <li>Résistance aux conditions extrêmes</li>
                    </ul>
                    <div class="partner-logo">
                        <img src="img/partners/valmet.png" alt="Valmet">
                    </div>
                </div>

                <!-- Équipements miniers -->
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <h3>Optimisation des équipements miniers</h3>
                    <p>Solutions spécialisées pour le secteur minier, optimisant la productivité dans des conditions extrêmes.</p>
                    <ul class="solution-features">
                        <li>Pièces de rechange haute qualité</li>
                        <li>Solutions Element sur mesure</li>
                        <li>Performance accrue</li>
                        <li>Durabilité maximale</li>
                    </ul>
                    <div class="partner-logo">
                        <img src="img/partners/element.png" alt="Element">
                    </div>
                </div>
            </div>

            <!-- Sustainability Section -->
            <div class="sustainability-section">
                <div class="sustainability-content">
                    <h2>Notre Engagement pour la Durabilité</h2>
                    <p>Nous intégrons une dimension écoresponsable dans toutes nos solutions industrielles. En optimisant l'utilisation des ressources et en réduisant l'impact environnemental, nous contribuons à la transition vers une industrie plus verte.</p>
                    
                    <div class="sustainability-features">
                        <div class="feature-item">
                            <i class="fas fa-leaf"></i>
                            <h3>Efficacité énergétique</h3>
                            <p>Optimisation de la consommation d'énergie</p>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-recycle"></i>
                            <h3>Gestion des ressources</h3>
                            <p>Utilisation responsable des matériaux</p>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-chart-line"></i>
                            <h3>Performance durable</h3>
                            <p>Solutions à long terme</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="cta-section">
                <h2>Prêt à optimiser vos installations?</h2>
                <p>Nos experts sont à votre disposition pour étudier vos besoins et vous proposer des solutions sur mesure.</p>
                <a href="contact.php" class="btn btn-primary">Contactez-nous pour une étude personnalisée</a>
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

/* Additional styles for sustainability section */
.sustainability-section {
    background: var(--background-light);
    padding: 4rem 0;
    margin: 4rem 0;
}

.sustainability-content {
    text-align: center;
    max-width: 900px;
    margin: 0 auto;
}

.sustainability-features {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    margin-top: 3rem;
}

.feature-item {
    background: var(--white);
    padding: 2rem;
    border-radius: 8px;
    box-shadow: var(--shadow-sm);
}

.feature-item i {
    font-size: 2.5rem;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

.partner-logo {
    margin-top: 1.5rem;
    padding-top: 1.5rem;
    border-top: 1px solid #eee;
}

.partner-logo img {
    max-height: 40px;
    width: auto;
}

/* CTA Section styles */
.cta-section {
    text-align: center;
    padding: 4rem 0;
    background: var(--primary-color);
    color: var(--white);
    border-radius: 8px;
    margin: 4rem 0;
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
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
}

@media (max-width: 768px) {
    .sustainability-features {
        grid-template-columns: 1fr;
    }
}
</style>

<?php include 'includes/footer.php'; ?> 
<?php
$page_title = "Contact";
$current_page = "contact";
include 'includes/header.php';

$message = '';
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $subject = mysqli_real_escape_string($con, $_POST['subject']);
    $message_text = mysqli_real_escape_string($con, $_POST['message']);
    
    // Simple email validation
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // You can add your email sending logic here
        // For now, we'll just show a success message
        $message = '<div class="alert">Votre message a été envoyé avec succès!</div>';
    } else {
        $message = '<div class="alert alert-danger">Veuillez entrer une adresse email valide.</div>';
    }
}
?>

<main>
    <section class="page-header">
        <div class="container">
            <h1>Contactez-nous</h1>
            <p>Nous sommes à votre écoute pour répondre à vos besoins</p>
        </div>
    </section>

    <section class="contact-content">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info">
                    <h2>Nos Coordonnées</h2>
                    <div class="info-items">
                        <div class="info-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h3>Adresse</h3>
                                <p>123 Rue Example<br>75000 Paris, France</p>
                            </div>
                        </div>

                        <div class="info-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <h3>Téléphone</h3>
                                <p>+33 1 23 45 67 89</p>
                            </div>
                        </div>

                        <div class="info-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h3>Email</h3>
                                <p>contact@mpcgroup.com</p>
                            </div>
                        </div>

                        <div class="info-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <h3>Horaires d'Ouverture</h3>
                                <p>Lundi - Vendredi: 9h00 - 18h00<br>
                                Samedi - Dimanche: Fermé</p>
                            </div>
                        </div>
                    </div>

                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>

                <div class="contact-form-wrapper">
                    <div class="form-card">
                        <h2>Envoyez-nous un Message</h2>
                        <?php if($message) echo $message; ?>
                        
                        <form method="POST" class="contact-form">
                            <div class="form-group">
                                <label for="name">Nom Complet</label>
                                <input type="text" id="name" name="name" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="subject">Sujet</label>
                                <input type="text" id="subject" name="subject" required>
                            </div>

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" rows="6" required></textarea>
                            </div>

                            <button type="submit" name="submit" class="btn">Envoyer le Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="map-section">
        <div class="container">
            <div class="map-wrapper">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.94722687619!2d2.277019841665155!3d48.85883773941345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis%2C%20France!5e0!3m2!1sen!2s!4v1635959481843!5m2!1sen!2s" 
                    width="100%" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </section>
</main>

<style>
.contact-content {
    padding: 4rem 0;
}

.contact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
}

.contact-info h2 {
    margin-bottom: 2rem;
    color: var(--text-dark);
}

.info-items {
    display: grid;
    gap: 2rem;
}

.info-item {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
}

.info-item i {
    width: 40px;
    height: 40px;
    background: var(--primary-color);
    color: var(--white);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    flex-shrink: 0;
}

.info-item h3 {
    margin-bottom: 0.5rem;
    color: var(--text-dark);
}

.info-item p {
    color: var(--text-light);
    line-height: 1.6;
}

.social-links {
    display: flex;
    gap: 1rem;
    margin-top: 2rem;
}

.social-link {
    width: 40px;
    height: 40px;
    background: var(--text-dark);
    color: var(--white);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    transition: var(--transition);
}

.social-link:hover {
    background: var(--primary-color);
    transform: translateY(-3px);
}

.form-card {
    background: var(--white);
    padding: 2rem;
    border-radius: 8px;
    box-shadow: var(--shadow-md);
}

.form-card h2 {
    margin-bottom: 2rem;
    color: var(--text-dark);
}

.contact-form {
    display: grid;
    gap: 1.5rem;
}

.form-group {
    display: grid;
    gap: 0.5rem;
}

.form-group label {
    color: var(--text-dark);
    font-weight: 500;
}

.form-group input,
.form-group textarea {
    padding: 0.75rem;
    border: 1px solid #ddd;
    border-radius: 4px;
    transition: var(--transition);
}

.form-group input:focus,
.form-group textarea:focus {
    border-color: var(--primary-color);
    outline: none;
    box-shadow: 0 0 0 3px rgba(237, 28, 37, 0.1);
}

.map-section {
    padding-bottom: 4rem;
}

.map-wrapper {
    border-radius: 8px;
    overflow: hidden;
    box-shadow: var(--shadow-sm);
}

@media (max-width: 768px) {
    .contact-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    .info-items {
        gap: 1.5rem;
    }
}
</style>

<?php include 'includes/footer.php'; ?>
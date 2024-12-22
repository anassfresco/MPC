<?php 
$page_title = "Actualités";
$current_page = "news";
include 'includes/header.php';
include 'include/connect.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h1>Actualités</h1>
            <p>Restez informé des dernières nouvelles de MPC Group</p>
        </div>
    </section>

    <section class="news-grid">
        <div class="container">
            <div class="grid-3">
                <?php
                if ($con) {
                    $result = mysqli_query($con, "SELECT * FROM news ORDER BY date_created DESC");
                    if ($result && mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)):
                        ?>
                        <article class="news-card">
                            <div class="news-image">
                                <img src="img/news/<?php echo $row['img']; ?>" alt="<?php echo htmlspecialchars($row['title']); ?>">
                            </div>
                            <div class="news-content">
                                <h3><?php echo htmlspecialchars($row['title']); ?></h3>
                                <p><?php echo strip_tags(substr($row['description'], 0, 150)) . '...'; ?></p>
                                <a href="news-detail.php?slug=<?php echo $row['slug']; ?>" class="btn-link">Lire la suite</a>
                            </div>
                        </article>
                        <?php 
                        endwhile;
                    } else {
                        echo '<div class="alert">Aucun article disponible pour le moment.</div>';
                    }
                } else {
                    echo '<div class="alert alert-danger">Erreur de connexion à la base de données.</div>';
                }
                ?>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?> 
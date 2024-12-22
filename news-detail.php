<?php 
$page_title = "Article";
$current_page = "news";
include 'includes/header.php';
include 'include/connect.php';

// Get article by slug
$slug = mysqli_real_escape_string($con, $_GET['slug'] ?? '');
$result = mysqli_query($con, "SELECT * FROM news WHERE slug = '$slug'");
$article = mysqli_fetch_assoc($result);

// If article not found, redirect to news page
if (!$article) {
    header("Location: news.php");
    exit();
}

// Update page title with article title
$page_title = $article['title'];
?>

<main>
    <section class="page-header">
        <div class="container">
            <h1><?php echo htmlspecialchars($article['title']); ?></h1>
            <p class="article-date">Publié le <?php echo date('d/m/Y', strtotime($article['date_created'])); ?></p>
        </div>
    </section>

    <section class="article-content">
        <div class="container">
            <div class="article-main">
                <div class="article-image">
                    <img src="img/news/<?php echo $article['img']; ?>" alt="<?php echo htmlspecialchars($article['title']); ?>">
                </div>
                
                <div class="article-text">
                    <?php echo $article['description']; ?>
                </div>

                <div class="article-actions">
                    <a href="news.php" class="btn btn-outline">← Retour aux actualités</a>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
.article-content {
    padding: 4rem 0;
}

.article-main {
    max-width: 800px;
    margin: 0 auto;
}

.article-image {
    margin-bottom: 2rem;
}

.article-image img {
    width: 100%;
    height: auto;
    border-radius: 8px;
}

.article-text {
    line-height: 1.8;
    color: var(--text-dark);
}

.article-text p {
    margin-bottom: 1.5rem;
}

.article-text img {
    max-width: 100%;
    height: auto;
    margin: 1.5rem 0;
    border-radius: 4px;
}

.article-date {
    color: var(--text-gray);
    margin-top: 0.5rem;
}

.article-actions {
    margin-top: 3rem;
    padding-top: 2rem;
    border-top: 1px solid #eee;
}
</style>

<?php include 'includes/footer.php'; ?> 
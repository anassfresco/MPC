<?php
session_start();
include("../include/connect.php");

// Basic admin authentication
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header("Location: login.php");
    exit();
}

$message = '';

// Handle form submission for new article
if (isset($_POST['add_news'])) {
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $description = mysqli_real_escape_string($con, $_POST['description-hidden']);
    
    // Generate slug from title
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title)));
    
    // Create upload directory if it doesn't exist
    $upload_dir = "../img/news";
    if (!file_exists($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }
    
    // Handle image upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['image']['name'];
        // Add timestamp to filename to make it unique
        $image = time() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $image);
        $temp_image = $_FILES['image']['tmp_name'];
        $image_path = $upload_dir . "/" . $image;
        
        // Check if it's a valid image
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
        if (!in_array($_FILES['image']['type'], $allowed_types)) {
            $message = "Type de fichier non autorisé. Utilisez JPG, PNG, GIF ou WEBP.";
        } else if (move_uploaded_file($temp_image, $image_path)) {
            $query = "INSERT INTO news (title, description, img, slug) VALUES ('$title', '$description', '$image', '$slug')";
            
            if(mysqli_query($con, $query)) {
                $message = "Article ajouté avec succès!";
            } else {
                $message = "Erreur lors de l'ajout de l'article.";
            }
        } else {
            $message = "Erreur lors du téléchargement de l'image.";
        }
    } else {
        $message = "Veuillez sélectionner une image.";
    }
}

// Handle delete
if (isset($_GET['delete'])) {
    $nid = (int)$_GET['delete'];
    mysqli_query($con, "DELETE FROM news WHERE nid = $nid");
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - MPC Group</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="admin.css">
    <!-- CKEditor 5 -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
</head>
<body>
    <div class="admin-container">
        <aside class="admin-sidebar">
            <div class="admin-logo">
                <img src="../img/logo.png" alt="MPC Group">
            </div>
            <nav class="admin-nav">
                <a href="index.php" class="active">Actualités</a>
                <a href="logout.php">Déconnexion</a>
            </nav>
        </aside>

        <main class="admin-main">
            <h1>Gestion des Actualités</h1>
            
            <?php if($message): ?>
                <div class="alert"><?php echo $message; ?></div>
            <?php endif; ?>

            <!-- Add News Form -->
            <div class="admin-card">
                <h2>Ajouter un Article</h2>
                <form method="POST" enctype="multipart/form-data" class="admin-form" id="newsForm">
                    <div class="form-group">
                        <label for="title">Titre</label>
                        <input type="text" id="title" name="title" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Contenu de l'Article</label>
                        <textarea id="description" name="description"></textarea>
                        <input type="hidden" id="description-hidden" name="description-hidden">
                    </div>
                    
                    <div class="form-group">
                        <label for="image">Image Principale</label>
                        <input type="file" id="image" name="image" accept="image/*" required>
                        <small class="form-text">Cette image sera utilisée comme aperçu de l'article. Pour ajouter des images dans le contenu, utilisez le bouton image de l'éditeur.</small>
                    </div>
                    
                    <button type="submit" name="add_news" class="btn">Publier</button>
                </form>
            </div>

            <!-- News List -->
            <div class="admin-card">
                <h2>Articles Existants</h2>
                <div class="news-list">
                    <?php
                    $result = mysqli_query($con, "SELECT * FROM news ORDER BY date_created DESC");
                    while($row = mysqli_fetch_assoc($result)):
                    ?>
                    <div class="news-item">
                        <img src="../img/news/<?php echo $row['img']; ?>" alt="<?php echo $row['title']; ?>">
                        <div class="news-content">
                            <h3><?php echo $row['title']; ?></h3>
                            <p><?php echo strip_tags(substr($row['description'], 0, 150)) . '...'; ?></p>
                            <div class="news-actions">
                                <a href="edit.php?nid=<?php echo $row['nid']; ?>" class="btn btn-outline">Modifier</a>
                                <a href="?delete=<?php echo $row['nid']; ?>" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article?')">Supprimer</a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </main>
    </div>

    <script>
        class MyUploadAdapter {
            constructor(loader) {
                this.loader = loader;
            }

            upload() {
                return this.loader.file
                    .then(file => new Promise((resolve, reject) => {
                        const formData = new FormData();
                        formData.append('file', file);

                        fetch('upload.php', {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.location) {
                                resolve({
                                    default: data.location
                                });
                            } else {
                                reject(data.error || 'Upload failed');
                            }
                        })
                        .catch(error => {
                            reject('Upload failed');
                            console.error('Upload failed:', error);
                        });
                    }));
            }

            abort() {
                // Abort upload if needed
            }
        }

        function MyCustomUploadAdapterPlugin(editor) {
            editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
                return new MyUploadAdapter(loader);
            };
        }

        let editor;
        
        ClassicEditor
            .create(document.querySelector('#description'), {
                extraPlugins: [MyCustomUploadAdapterPlugin],
                toolbar: {
                    items: [
                        'heading',
                        '|',
                        'bold',
                        'italic',
                        'link',
                        'bulletedList',
                        'numberedList',
                        '|',
                        'outdent',
                        'indent',
                        '|',
                        'imageUpload',
                        'blockQuote',
                        'insertTable',
                        'undo',
                        'redo'
                    ]
                },
                image: {
                    toolbar: [
                        'imageTextAlternative',
                        'imageStyle:inline',
                        'imageStyle:block',
                        'imageStyle:side'
                    ]
                }
            })
            .then(newEditor => {
                editor = newEditor;
            })
            .catch(error => {
                console.error(error);
            });

        // Handle form submission
        document.getElementById('newsForm').addEventListener('submit', function(e) {
            // Get CKEditor content
            const editorData = editor.getData();
            
            // Set the content to hidden input
            document.getElementById('description-hidden').value = editorData;
        });
    </script>
</body>
</html> 
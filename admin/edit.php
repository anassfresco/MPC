<?php
session_start();
include("../include/connect.php");

// Basic admin authentication
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header("Location: login.php");
    exit();
}

$message = '';
$nid = isset($_GET['nid']) ? (int)$_GET['nid'] : 0;

// Fetch existing article data
$result = mysqli_query($con, "SELECT * FROM news WHERE nid = $nid");
$article = mysqli_fetch_assoc($result);

if (!$article) {
    header("Location: index.php");
    exit();
}

// Handle form submission for updating article
if (isset($_POST['update_news'])) {
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $description = mysqli_real_escape_string($con, $_POST['description-hidden']);
    
    // Generate new slug from title
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title)));
    
    // Handle image upload if new image is provided
    if ($_FILES['image']['size'] > 0) {
        // Create upload directory if it doesn't exist
        $upload_dir = "../img/news";
        if (!file_exists($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        
        $image = $_FILES['image']['name'];
        // Add timestamp to filename to make it unique
        $image = time() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $image);
        $temp_image = $_FILES['image']['tmp_name'];
        $image_path = $upload_dir . "/" . $image;
        
        // Check if it's a valid image
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
        if (!in_array($_FILES['image']['type'], $allowed_types)) {
            $message = "Type de fichier non autorisé. Utilisez JPG, PNG, GIF ou WEBP.";
        } else {
            // Delete old image if exists
            if ($article['img'] && file_exists($upload_dir . "/" . $article['img'])) {
                unlink($upload_dir . "/" . $article['img']);
            }
            
            if (move_uploaded_file($temp_image, $image_path)) {
                $query = "UPDATE news SET title = '$title', description = '$description', img = '$image', slug = '$slug' WHERE nid = $nid";
            } else {
                $message = "Erreur lors du téléchargement de l'image.";
                $query = "UPDATE news SET title = '$title', description = '$description', slug = '$slug' WHERE nid = $nid";
            }
        }
    } else {
        // Update without changing the image
        $query = "UPDATE news SET title = '$title', description = '$description', slug = '$slug' WHERE nid = $nid";
    }
    
    if(!isset($message) && mysqli_query($con, $query)) {
        $message = "Article mis à jour avec succès!";
        // Refresh article data
        $result = mysqli_query($con, "SELECT * FROM news WHERE nid = $nid");
        $article = mysqli_fetch_assoc($result);
    } else if(!isset($message)) {
        $message = "Erreur lors de la mise à jour de l'article.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier l'Article - MPC Group</title>
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
                <a href="index.php">Actualités</a>
                <a href="logout.php">Déconnexion</a>
            </nav>
        </aside>

        <main class="admin-main">
            <h1>Modifier l'Article</h1>
            
            <?php if($message): ?>
                <div class="alert"><?php echo $message; ?></div>
            <?php endif; ?>

            <div class="admin-card">
                <form method="POST" enctype="multipart/form-data" class="admin-form" id="editForm">
                    <div class="form-group">
                        <label for="title">Titre</label>
                        <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($article['title']); ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Contenu de l'Article</label>
                        <textarea id="description" name="description"><?php echo htmlspecialchars($article['description']); ?></textarea>
                        <input type="hidden" id="description-hidden" name="description-hidden">
                    </div>
                    
                    <div class="form-group">
                        <label>Image Principale Actuelle</label>
                        <img src="../img/news/<?php echo $article['img']; ?>" alt="Current Image" style="max-width: 200px; margin: 10px 0;">
                    </div>
                    
                    <div class="form-group">
                        <label for="image">Nouvelle Image Principale (laisser vide pour conserver l'image actuelle)</label>
                        <input type="file" id="image" name="image" accept="image/*">
                        <small class="form-text">Cette image sera utilisée comme aperçu de l'article. Pour ajouter des images dans le contenu, utilisez le bouton image de l'éditeur.</small>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" name="update_news" class="btn">Mettre à jour</button>
                        <a href="index.php" class="btn btn-outline">Annuler</a>
                    </div>
                </form>
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
        document.getElementById('editForm').addEventListener('submit', function(e) {
            // Get CKEditor content
            const editorData = editor.getData();
            
            // Set the content to hidden input
            document.getElementById('description-hidden').value = editorData;
        });
    </script>
</body>
</html> 
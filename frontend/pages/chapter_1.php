<!DOCTYPE html>
<html>
<head>
    <title>Galeri Komik</title>
    <link rel="stylesheet" href="chapter_1.css">
</head>
<body>
<div class="container">
    <a href="portofolio.php" class="back-arrow">←</a>
    <h1>Baca Komik Online</h1>
    <?php
    $folder = '../image/Solev 1/';
    $files = scandir($folder);

    // Filter hanya file gambar yang valid
    $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
    foreach ($files as $file) {
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if (in_array($ext, $allowed_extensions)) {
            echo "<img src='$folder$file' class='gambar-komik' alt='gambar'>";
        }
    }
    ?>
</div>
</body>
</html>

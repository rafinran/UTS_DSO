<!DOCTYPE html>
<html>
<head>
    <title>Galeri Komik</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            box-shadow: 0px 0px 8px rgba(0,0,0,0.1);
        }
        .gambar-komik {
            width: 100%;
            margin-bottom: 0;
            border: 1px solid #ccc;
        }
        h1 {
            margin-bottom: 30px;
        }
        a.kembali {
            display: inline-block;
            margin-bottom: 20px;
            text-decoration: none;
            background: #2ecc71;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
<div class="container">
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

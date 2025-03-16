<?php
$site_name = "Nama Situs Anda";
$title = "Judul Halaman";
$description = "Deskripsi singkat halaman ini.";
$image = "https://s26378.pcdn.co/wp-content/uploads/sat-or-act-test-1030x519.jpg"; // Ganti dengan URL gambar yang valid
$url = "https://www.instagram.com/tsgcsurabaya/"; // Ganti dengan URL halaman yang sesuai
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:image" content="<?php echo $image; ?>">
    <meta property="og:url" content="<?php echo $url; ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?php echo $site_name; ?>">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $title; ?>">
    <meta name="twitter:description" content="<?php echo $description; ?>">
    <meta name="twitter:image" content="<?php echo $image; ?>">
</head>
<body>
    <h1>Selamat datang di <?php echo $site_name; ?></h1>
    <p><?php echo $description; ?></p>
</body>
</html>

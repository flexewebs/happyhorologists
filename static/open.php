<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pagetitle) ? $pagetitle . " | " . SITE_NAME : SITE_NAME; ?></title>
    <meta name="description" content="<?php echo isset($pagedescription) ? $pagedescription : SITE_TAGLINE; ?>">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Helvetica+Neue&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    <link rel="stylesheet" href="bulma.min.css">
</head>
<body class="<?php echo isset($pageclass) ? $pageclass : ''; ?>">
<header>
    <?php include 'static/navigation.php'; ?>
</header>
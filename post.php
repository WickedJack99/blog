<?php
include 'includes/header.php';
require_once 'Parsedown.php';

$slug = $_GET['slug'] ?? '';
$filepath = "posts/$slug.md";

if (!preg_match('/^[a-zA-Z0-9\-]+$/', $slug) || !file_exists($filepath)) {
    echo "<p>Post not found.</p>";
    include 'includes/footer.php';
    exit;
}

$md = file_get_contents($filepath);
$Parsedown = new Parsedown();
echo $Parsedown->text($md);

include 'includes/footer.php';

<?php
include 'includes/header.php';
$posts = glob('posts/*.md');
rsort($posts);
?>

<h1>Jacks Blog</h1>
<ul>
<?php foreach ($posts as $post): 
    $slug = basename($post, '.md');
    $firstLine = fgets(fopen($post, 'r'));
    $title = trim(str_replace('#', '', $firstLine));
?>
    <li><a href="post.php?slug=<?= urlencode($slug) ?>"><?= htmlspecialchars($title) ?></a></li>
<?php endforeach; ?>
</ul>

<?php include 'includes/footer.php'; ?>

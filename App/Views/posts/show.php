<?php
\Core\View::render('parts/header.php', ['title' => 'Show Posts']);

echo $title;
echo '<pre>';
echo $content;

?>



<?php
\Core\View::render('parts/footer.php');


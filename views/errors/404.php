<?php

use App\Services\Page;

?>

<!doctype html>
<html lang="ru">
<?php
    Page::part('head');
?>
<body>

<?php
    Page::part('navbar');
?>

<div class="container" class="mt-4">
    <h1>404 — Page not found</h1>
</div>

</body>
</html>
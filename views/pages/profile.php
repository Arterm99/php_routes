<?php

use App\Services\Page;

if (!$_SESSION["user"]) {
    \App\Services\Router::redirect('login');
}

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
    <h2 class="mt-4">Страница Пользователя <?= $_SESSION["user"]["full_name"] ?></h2>
    <div class="card" style="width: 28rem;">
        <div class="card-body">
            <img src="<?= $_SESSION["user"]["avatar"] ?>" alt="" style="width: 300px; height:300px" >
        </div>
    </div>
</div>

</body>
</html>
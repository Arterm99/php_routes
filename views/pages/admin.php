<?php
use App\Services\Page;

if (isset($_SESSION["user"]) && $_SESSION['user']["group"] != 2) {
    \App\Services\Router::redirect('/profile');
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

<div class="container">
    <h2 class="mt-4">Admin Panel</h2>
</div>

</body>
</html>
<?php
use App\Services\Page;

if ($_SESSION["user"]) {
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

<div class="container" class="mt-4">
    <h2 class="mt-4">Sign Up</h2>
<!--    enctype="multipart/form-data - для Фото-->
    <form class="ье-4" method="post" action="/auth/register" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="username">
        </div>
        <div class="mb-3">
            <label for="full_name" class="form-label">Full Name</label>
            <input type="text" name="full_name" class="form-control" id="full_name">
        </div>
        <div class="mb-3">
            <label for="avatar" class="form-label">Avatar</label>
            <input type="file" name="avatar" class="form-control" id="avatar">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <div class="mb-3">
            <label for="password_confirm" class="form-label">Password Confirmation</label>
            <input type="password" name="password_confirm" class="form-control" id="password_confirm">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
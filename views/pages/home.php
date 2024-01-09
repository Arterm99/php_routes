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
        <h2 class="mt-4">Home</h2>
        <div class="card" style="width: 28rem;">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="/login" class="btn btn-primary">Sign In</a>
            </div>
        </div>
    </div>

</body>
</html>
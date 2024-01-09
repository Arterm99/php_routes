<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Мой Сайт</a>
        <div class="collapse navbar-collapse">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
        </div>
        <?php if(isset($_SESSION['user'])) {
            ?>
            <div class="d-flex">
                <div class="me-3 collapse navbar-collapse">
                    <a class="nav-link" aria-current="page" href="/profile">Account</a>
                </div>
                <form action="/logout" method="post">
                    <div class="collapse navbar-collapse">
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </div>
                </form>
            </div>

        <?php  } else {
        ?>
            <div class="d-flex">
                <div class="me-3 collapse navbar-collapse">
                    <a class="nav-link active" aria-current="page" href="/login">Login</a>
                </div>
                <div class="collapse navbar-collapse">
                    <a class="nav-link" aria-current="page" href="/register">Register</a>
                </div>
            </div>


        <?php  }  ?>

    </div>
</nav>
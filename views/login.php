<?php
$pageTitle = 'Login';
require_once __DIR__ . '/../include/header.php';
?>
<main class="container min-vh-100 d-flex align-items-center justify-content-center py-5">
    <div class="row justify-content-center w-100">
        <div class="col-12 col-sm-10 col-md-8 col-lg-5">
            <div class="card shadow-sm border-0 rounded-2">
                <div class="card-body p-4 p-md-5">
                    <h1 class="h3 text-center mb-4">Login Form</h1>

                    <form action="#" method="post">
                        <div class="mb-3">
                            <label for="login_identity" class="form-label">Username or Email</label>
                            <input type="text" class="form-control" id="login_identity" name="login_identity" placeholder="Enter username or email">
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>

                    <p class="text-center text-secondary mt-4 mb-0">
                        New account?
                        <a href="register.php" class="link-primary text-decoration-none">Register</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once __DIR__ . '/../include/footer.php'; ?>

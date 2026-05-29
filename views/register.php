<?php
$pageTitle = 'Register';
require_once __DIR__ . '/../include/header.php';
?>
<main class="container min-vh-100 d-flex align-items-center justify-content-center py-5">
    <div class="row justify-content-center w-100">
        <div class="col-12 col-sm-10 col-md-8 col-lg-5">
            <div class="card shadow-sm border-0 rounded-2">
                <div class="card-body p-4 p-md-5">
                    <h1 class="h3 text-center mb-4">Registration Form</h1>

                    <form id="Register" action="#" method="post">
                        <div class="mb-3">
                            <label for="full_name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter full name">
                        </div>

                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                        </div>

                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone_number" name="phone_number" placeholder="Enter phone number">
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Register</button>
                    </form>

                    <p class="text-center text-secondary mt-4 mb-0">
                        Already have an account?
                        <a href="login.php" class="link-primary text-decoration-none">Login</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    
</script>

<?php require_once __DIR__ . '/../include/footer.php'; ?>

<?php include('components/header.php') ?>

<header class="auth py-5">
    <div class="container">
        <h2 class="text-primary text-center mb-4">
            Register
        </h2>
        <form action="php/register.php" method= "post">
                <div class=" mb-3">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name">
                </div>
                <div class=" mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email">
                </div>
                <div class=" mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter Your password">
                </div>
                <button type="submit" class="btn btn-primary w-100" name="submit">Register</button>
                <p class="mt-3 text-secondary text-center">Sudah Punya Akun?<a href="login.php" class="text-primary"> Login!</a></p>
            </form>
    </div>
</header>
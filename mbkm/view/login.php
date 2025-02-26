<?php
include "../function/proses-login.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Login Page</title>   

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <link href="../assets/css/style-login.css" rel="stylesheet" />
</head>

<body>
    <div class="overlay">
        <div class="login-container">
            <img src="../assets/img/Logo MBKM.png" alt="Logo MBKM" class="img-fluid" />
            <h3 class="text-center">Login</h3>

            <!-- Form Login -->
            <form method="POST">
                <div class="mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Username" required />
                </div>
                <div class="mb-3 position-relative">
                    <input type="password" name="password" class="form-control" placeholder="Password" required />
                    <i class="fas fa-eye toggle-password" onclick="togglePassword()"></i>
                </div>
                <?php if (isset($error)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= htmlspecialchars($error) ?>
                    </div>
                <?php endif; ?>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" /> Ingat Aku
                    </label>
                    <a href="#" class="text-decoration-none text-primary">Lupa Password? </a>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
                <a href="registrasi.php" class="d-block text-center mt-3 text-decoration-none text-primary">Belum Punya Akun? Daftar</a>
            </form>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/script-login.js"></script>
</body>

</html>

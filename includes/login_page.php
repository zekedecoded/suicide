<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GJC EduPay Login</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="login-body">

    <div class="login-container">

        <div class="login-card">

            <!-- HEADER -->
            <div class="text-center login-header">
                <h1 class="login-title mb-1">GJC EduPay</h1>

                <p class="login-subtitle mb-0">
                    General de Jesus College<br>
                    San Isidro, Nueva Ecija · Cashless Payment System
                </p>
            </div>

            <!-- FORM -->
            <form>

                <!-- STUDENT ID -->
                <div class="mb-4">
                    <label class="d-block mb-2 login-label">
                        STUDENT ID OR EMAIL
                    </label>

                    <input name="student_id" type="text" class="form-control login-input"
                        placeholder="STU-2024-001 or you@school.edu">
                </div>

                <!-- PASSWORD -->
                <div class="mb-2">
                    <label class="d-block mb-2 login-label">
                        PASSWORD
                    </label>

                    <div class="position-relative">

                        <input id="password" name="password" type="password"
                            class="form-control login-input login-input-password" placeholder="Enter your Password">

                        <i class="bi bi-lock login-icon-left"></i>

                        <button type="button" id="togglePassword" class="login-toggle-btn"
                            aria-label="Toggle password visibility">
                            <i class="bi bi-eye-slash"></i>
                        </button>
                    </div>
                </div>

                <!-- FORGOT PASSWORD -->
                <div class="text-end login-forgot-wrap">
                    <a href="forgotpassword.php" class="login-link">
                        Forgot Password?
                    </a>
                </div>

                <!-- SIGN IN -->
                <div class="d-grid login-signin-wrap">
                    <a href="./includes/verification_page.php" class="btn login-btn">
                        SIGN IN
                    </a>
                </div>

                <!-- SIGN UP TEXT LINK -->
                <div class="text-center login-footer-text">
                    <span>Doesn't have an account yet?</span>
                    <a href="./includes/registration.php" class="login-signup-text-link">
                        Click here to Sign Up
                    </a>
                </div>

            </form>

        </div>

    </div>

    <!-- TOGGLE PASSWORD SCRIPT -->
    <script>
    const passwordInput = document.getElementById('password');
    const togglePassword = document.getElementById('togglePassword');
    const toggleIcon = togglePassword.querySelector('i');

    togglePassword.addEventListener('click', function() {
        const isHidden = passwordInput.type === 'password';

        passwordInput.type = isHidden ? 'text' : 'password';

        if (isHidden) {
            toggleIcon.classList.remove('bi-eye-slash');
            toggleIcon.classList.add('bi-eye');
        } else {
            toggleIcon.classList.remove('bi-eye');
            toggleIcon.classList.add('bi-eye-slash');
        }
    });
    </script>

</body>

</html>
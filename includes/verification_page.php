<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Page</title>
    <link href="../Css/bootstrap.min.css" rel="stylesheet">
    <link href="../Css/style.css" rel="stylesheet">
</head>

<body class="main-gradient">

    <div class="verification-wrapper">
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <form class="w-100 d-flex justify-content-center">
                <div class="verification-card">

                    <h1 class="verification-title">Verify your OTP</h1>

                    <p class="verification-subtext">
                        For your security, please enter the code we sent
                        to your number.
                    </p>

                    <div class="mb-4">
                        <input type="text" inputmode="numeric" maxlength="6"
                            class="form-control verification-input text-center" placeholder="">
                    </div>

                    <div class="text-center mb-4">
                        <a href="student/student.php" class="btn verification-btn">
                            Confirm
                        </a>
                    </div>

                    <p class="verification-resend">
                        Didn’t receive the code?
                        <a href="#" class="resend-link">Resend OTP</a>
                    </p>

                </div>
            </form>
        </div>
    </div>

</body>

</html>
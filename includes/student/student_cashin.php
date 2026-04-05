<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/student.css" rel="stylesheet">
</head>

<body class="student-body">

    <?php include 'header.php'; ?>

    <div class="student-wrapper">
        <div class="container student-container">

            <!-- TOP -->
            <div class="student-top-row">
                <div class="student-title-group">
                    <h1 class="student-page-title">Cash In</h1>
                    <p class="student-page-subtitle">Generate QR code to add balance</p>
                </div>
            </div>

            <!-- CASH IN CARD -->
            <div class="student-table-shell">

                <p class="mb-3">To cash in, click the button below to generate a QR code.</p>

                <!-- BUTTON -->
                <button id="generateBtn" class="student-submit-btn">
                    Generate QR Code
                </button>

                <!-- QR -->
                <div id="qrcode" class="mt-4"></div>

                <!-- BACK -->
                <div class="pt-4">
                    <a href="student.php" class="student-back-btn">
                        Back
                    </a>
                </div>

            </div>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

</body>
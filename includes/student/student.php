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
                    <h1 class="student-page-title">Student Dashboard</h1>
                    <p class="student-page-subtitle">Manage your account</p>
                </div>

                <div class="student-top-actions">
                    <div class="student-date-chip">APR 05, 2026</div>
                </div>
            </div>

            <!-- USER CARD -->
            <div class="student-table-shell mb-4">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

                    <div>
                        <h5 class="mb-1 fw-bold">Michael G. Bañez</h5>
                        <small class="text-muted">Student Account</small>
                    </div>

                    <a href="student_profile.php" class="student-see-all-btn">
                        View Profile
                    </a>

                </div>
            </div>

            <!-- BALANCE -->
            <div class="student-table-shell mb-4">
                <p class="text-muted small mb-1">CURRENT BALANCE</p>
                <h2 class="fw-bold text-success">₱4,850.00</h2>
            </div>

            <!-- ACTIONS -->
            <div class="row g-4">

                <div class="col-md-4">
                    <a href="student_transactionHistory.php" class="action-box action-box-green">
                        <div class="action-box-icon">📄</div>
                        <div class="action-box-content">
                            <h4>Transactions</h4>
                            <p>View your history</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="student_qrcodepay.php" class="action-box action-box-blue">
                        <div class="action-box-icon">💳</div>
                        <div class="action-box-content">
                            <h4>E-Payment</h4>
                            <p>Pay using QR</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="student_cashin.php" class="action-box action-box-yellow">
                        <div class="action-box-icon">💰</div>
                        <div class="action-box-content">
                            <h4>Cash In</h4>
                            <p>Add balance</p>
                        </div>
                    </a>
                </div>

            </div>

        </div>
    </div>
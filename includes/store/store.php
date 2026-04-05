<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/store.css" rel="stylesheet">
</head>

<?php include 'header.php'; ?>

<body class="store-body">

    <div class="store-wrapper">
        <div class="container store-container">

            <!-- Top Header -->
            <div class="store-top-row">
                <div class="store-title-group">
                    <span class="store-section-badge">Store Dashboard</span>
                    <h1 class="store-page-title">Merchant Overview</h1>
                    <p class="store-page-subtitle">
                        Manage your QR payments, transactions, and merchant account in one place.
                    </p>
                </div>

                <div class="store-top-actions">
                    <span class="store-date-chip"><?php echo date("F d, Y"); ?></span>
                </div>
            </div>

            <!-- Store Balance Card -->
            <div class="store-balance-card mb-4">
                <div class="row align-items-center gy-3">
                    <div class="col-12 col-md-8">
                        <p class="store-balance-label mb-1">Merchant Name</p>
                        <h2 class="store-page-title mb-1" style="font-size: 1.8rem;">KEITH GARCIA</h2>
                        <p class="store-page-subtitle mb-3">BURGER SHOP</p>

                        <p class="store-balance-label mb-1">Current Balance</p>
                        <h3 class="store-balance-amount">₱139.00</h3>
                    </div>

                    <div class="col-12 col-md-4 text-md-end">
                        <a href="store_profile.php" class="store-profile-btn">
                            View Profile
                        </a>
                    </div>
                </div>
            </div>

            <!-- Quick Stats -->
            <div class="row g-4 store-stats-row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="store-stat-card store-stat-green">
                        <div class="store-stat-icon">
                            <img src="../../img/store_wallet.png" class="store-stat-icon-img">
                        </div>
                        <div class="store-stat-number">₱139.00</div>
                        <div class="store-stat-label">Available Balance</div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="store-stat-card store-stat-yellow">
                        <div class="store-stat-icon">
                            <img src="../../img/store_qr.png" class="store-stat-icon-img">
                        </div>
                        <div class="store-stat-number">01</div>
                        <div class="store-stat-label">QR Payment Option</div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="store-stat-card store-stat-blue">
                        <div class="store-stat-icon">
                            <img src="../../img/store_transactions.png" class="store-stat-icon-img">
                        </div>
                        <div class="store-stat-number">01</div>
                        <div class="store-stat-label">Transaction History Page</div>
                    </div>
                </div>
            </div>

            <!-- Action Boxes -->
            <div class="row g-4">
                <div class="col-12 col-lg-6">
                    <a href="store_generateqr.php" class="store-action-box store-action-box-green">
                        <div class="store-stat-icon">
                            <img src="../../img/store_generate.png" class="store-stat-icon-img">
                        </div>
                        <div class="store-action-box-content">
                            <h4>Generate QR Code</h4>
                            <p>
                                Create a payment QR code for student transactions and make payments faster and easier.
                            </p>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="store_transactionHistory.php" class="store-action-box store-action-box-yellow">
                        <div class="store-stat-icon">
                            <img src="../../img/store_view_transactions.png" class="store-stat-icon-img">
                        </div>
                        <div class="store-action-box-content">
                            <h4>View Transaction History</h4>
                            <p>
                                Check your previous payment records and monitor store transaction activity anytime.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>
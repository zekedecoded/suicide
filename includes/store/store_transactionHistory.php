<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/store.css" rel="stylesheet">
</head>

<body class="store-body">

    <?php include 'header.php'; ?>

    <div class="store-wrapper">
        <div class="container store-container">

            <!-- TOP HEADER -->
            <div class="store-top-row">
                <div class="store-title-group">
                    <span class="store-section-badge">Transactions</span>
                    <h1 class="store-page-title">Transaction History</h1>
                    <p class="store-page-subtitle">
                        View all your store payment records and activities.
                    </p>
                </div>
            </div>

            <!-- TABLE CARD -->
            <div class="store-table-shell">

                <!-- TABLE HEADER -->
                <div class="store-table-head">
                    <div>
                        <h3 class="store-table-title">Recent Transactions</h3>
                        <p class="store-table-subtitle">List of all payments and cash-ins</p>
                    </div>
                </div>

                <!-- TABLE -->
                <table class="store-transaction-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Type</th>
                            <th>Date</th>
                            <th>To / From</th>
                            <th>Amount</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><span class="store-transaction-pill store-pay-pill">PAY</span></td>
                            <td>April 4, 2025</td>
                            <td>Otto</td>
                            <td class="store-amount-cell">₱50</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td><span class="store-transaction-pill store-pay-pill">PAY</span></td>
                            <td>April 5, 2025</td>
                            <td>Thornton</td>
                            <td class="store-amount-cell">₱100</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td><span class="store-transaction-pill store-cashin-pill">CASH IN</span></td>
                            <td>April 3, 2025</td>
                            <td>Admin</td>
                            <td class="store-amount-cell">₱5,000</td>
                        </tr>
                    </tbody>
                </table>

                <!-- BUTTON -->
                <div class="pt-4">
                    <a href="store.php" class="store-back-btn">
                        Back
                    </a>
                </div>

            </div>

        </div>
    </div>

</body>
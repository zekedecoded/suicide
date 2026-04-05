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
                    <h1 class="student-page-title">Transaction History</h1>
                    <p class="student-page-subtitle">View all your transactions</p>
                </div>
            </div>

            <!-- TABLE -->
            <div class="student-table-shell">

                <div class="student-table-head">
                    <div>
                        <h3 class="student-table-title">Transactions</h3>
                        <p class="student-table-subtitle">Payment and cash-in records</p>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table admin-transaction-table align-middle mb-0">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Date</th>
                                <th>To / From</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="transaction-pill pay-pill">PAY</span></td>
                                <td>4/4/2025</td>
                                <td>Otto</td>
                                <td class="amount-cell">₱50</td>
                            </tr>
                            <tr>
                                <td><span class="transaction-pill pay-pill">PAY</span></td>
                                <td>4/5/2025</td>
                                <td>Thornton</td>
                                <td class="amount-cell">₱100</td>
                            </tr>
                            <tr>
                                <td><span class="transaction-pill cashin-pill">CASH IN</span></td>
                                <td>4/3/2025</td>
                                <td>ADMIN</td>
                                <td class="amount-cell">₱5,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- BACK -->
                <div class="pt-4">
                    <a href="student.php" class="student-back-btn">
                        Back
                    </a>
                </div>

            </div>

        </div>
    </div>

</body>
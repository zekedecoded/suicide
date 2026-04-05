// jastine
<?php
    require '../../Project1.php';
    $transactions = $Project->getTransactions();
    $data0 = $Project->countStudents();
    $data1 = $Project->countMerchant();
    $data2 = $Project->countTransactions();
    $data3 = $Project->todayVolume();
    $todayVolume = $data3['totalVolume'];
?>
// jastine

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GJC EduPay - Transactions</title>
    <link href="../../Css/bootstrap.min.css" rel="stylesheet">
    <link href="../../Css/style.css" rel="stylesheet">
    <link href="../../Css/admin.css" rel="stylesheet">
</head>

<body class="admin-body">

    <!-- NAVBAR -->
    <?php include 'header.php'; ?>

    <div class="admin-wrapper">
        <div class="container admin-container">

            <!-- TOP -->
            <div class="admin-top-row">
                <div class="admin-title-group">
                    <h1 class="admin-page-title">Transactions</h1>
                    <p class="admin-page-subtitle">View all transaction records</p>
                </div>

                <div class="admin-top-actions">
                    <div class="admin-date-chip">APR 04, 2026</div>
                    <a href="../index.php" class="admin-logout-top-btn">Logout</a>
                </div>
            </div>

            <!-- TABS -->
            <div class="row g-3 admin-tabs-row">
                <div class="col-md-4">
                    <a href="admin.php" class="admin-tab-card">
                        <span class="tab-title">Dashboard</span>
                        <span class="tab-desc">Overview of admin data</span>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="admin_actions.php" class="admin-tab-card">
                        <span class="tab-title">Actions</span>
                        <span class="tab-desc">Manage admin processes</span>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="admin_transactions.php" class="admin-tab-card active-tab">
                        <span class="tab-title">Transactions</span>
                        <span class="tab-desc">View transaction records</span>
                    </a>
                </div>
            </div>

            <!-- TABLE -->
            <div class="admin-table-shell">
                <div class="admin-table-head">
                    <div>
                        <h3 class="admin-table-title">Transaction History</h3>
                        <p class="admin-table-subtitle">All payment and cash-in activities</p>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table admin-transaction-table align-middle mb-0">
                        <thead>
                            <tr>
                                <!-- <th>Type</th> -->
                                <th>Date</th>
                                <th>To</th>
                                <th>From</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($transactions as $ts): ?>
                            <tr>
                                <!-- <td><span class="transaction-pill pay-pill">PAY</span></td> -->
                                <td><?php echo $ts['date_time']; ?></td>
                                <td><?php echo $ts['merchant_name']; ?></td>
                                <td><?php echo $ts['student_firstname'] . ' ' . $ts['student_lastname'] ?? 'ADMIN' ?></td>
                                <td class="amount-cell">₱<?php echo number_format($ts['amount'], 2); ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <!-- BACK -->
                <div class="mt-4">
                    <a href="admin.php" class="admin-back-btn">Back to Dashboard</a>
                </div>

            </div>

        </div>
    </div>

</body>

</html>
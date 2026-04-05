<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GJC EduPay - Admin Dashboard</title>
    <link href="../../Css/bootstrap.min.css" rel="stylesheet">
    <link href="../../Css/style.css" rel="stylesheet">
    <link href="../../Css/admin.css" rel="stylesheet">
</head>

<body class="admin-body">

    <div class="admin-header-wrap">
        <?php include 'header.php'; ?>
    </div>

    <div class="admin-wrapper">
        <div class="container admin-container">

            <div class="admin-top-row">
                <div class="admin-title-group">
                    <span class="admin-section-badge">ADMIN PANEL</span>
                    <h1 class="admin-page-title">Admin Dashboard</h1>
                    <p class="admin-page-subtitle">System overview and recent transactions</p>
                </div>

                <div class="admin-top-actions">
                    <div class="admin-date-chip">APR 04, 2026</div>
                    <a href="../index.php" class="admin-logout-top-btn">Logout</a>
                </div>
            </div>

            <div class="row g-4 admin-stats-row">
                <div class="col-md-6 col-xl-3">
                    <div class="admin-stat-card stat-green">
                        <div class="admin-stat-icon">🎓</div>
                        <div class="admin-stat-number">10</div>
                        <div class="admin-stat-label">Students</div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="admin-stat-card stat-yellow">
                        <div class="admin-stat-icon">🏪</div>
                        <div class="admin-stat-number">10</div>
                        <div class="admin-stat-label">Merchant</div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="admin-stat-card stat-blue">
                        <div class="admin-stat-icon">🧾</div>
                        <div class="admin-stat-number">10</div>
                        <div class="admin-stat-label">Transactions</div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="admin-stat-card stat-orange">
                        <div class="admin-stat-icon">💵</div>
                        <div class="admin-stat-number">₱10</div>
                        <div class="admin-stat-label">Today's Volume</div>
                    </div>
                </div>
            </div>

            <div class="row g-3 admin-tabs-row">
                <div class="col-md-4">
                    <a href="admin.php" class="admin-tab-card active-tab">
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
                    <a href="admin_transactions.php" class="admin-tab-card">
                        <span class="tab-title">Transactions</span>
                        <span class="tab-desc">View transaction records</span>
                    </a>
                </div>
            </div>

            <div class="admin-table-shell">
                <div class="admin-table-head">
                    <div>
                        <h3 class="admin-table-title">Recent Transactions</h3>
                        <p class="admin-table-subtitle">Latest payment and cash-in records</p>
                    </div>

                    <a href="admin_transactions.php" class="admin-see-all-btn">See All</a>
                </div>

                <div class="table-responsive">
                    <table class="table admin-transaction-table align-middle mb-0">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Date</th>
                                <th>To</th>
                                <th>From</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="transaction-pill pay-pill">PAY</span></td>
                                <td>4/4/2025</td>
                                <td>Otto</td>
                                <td>Michael</td>
                                <td class="amount-cell">₱50</td>
                            </tr>
                            <tr>
                                <td><span class="transaction-pill pay-pill">PAY</span></td>
                                <td>4/5/2025</td>
                                <td>Thornton</td>
                                <td>Michael</td>
                                <td class="amount-cell">₱100</td>
                            </tr>
                            <tr>
                                <td><span class="transaction-pill cashin-pill">CASH IN</span></td>
                                <td>4/3/2025</td>
                                <td>Michael</td>
                                <td>ADMIN</td>
                                <td class="amount-cell">₱5,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
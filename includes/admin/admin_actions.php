<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GJC EduPay - Admin Actions</title>
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
                    <h1 class="admin-page-title">Admin Actions</h1>
                    <p class="admin-page-subtitle">Manage admin tools and account-related actions</p>
                </div>

                <div class="admin-top-actions">
                    <div class="admin-date-chip">APR 04, 2026</div>
                    <a href="../index.php" class="admin-logout-top-btn">Logout</a>
                </div>
            </div>

            <div class="row g-3 admin-tabs-row">
                <div class="col-md-4">
                    <a href="admin.php" class="admin-tab-card">
                        <span class="tab-title">Dashboard</span>
                        <span class="tab-desc">Overview of admin data</span>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="admin_actions.php" class="admin-tab-card active-tab">
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
                        <h3 class="admin-table-title">Available Actions</h3>
                        <p class="admin-table-subtitle">Choose an action to continue</p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-6">
                        <a href="admin_addStudent.php" class="action-box action-box-green">
                            <div class="action-box-icon">🎓</div>
                            <div class="action-box-content">
                                <h4>Add Student</h4>
                                <p>Create a new student account in the system.</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6">
                        <a href="admin_addStore.php" class="action-box action-box-yellow">
                            <div class="action-box-icon">🏪</div>
                            <div class="action-box-content">
                                <h4>Add Store</h4>
                                <p>Register a new merchant or store account.</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6">
                        <a href="admin_manager.php" class="action-box action-box-blue">
                            <div class="action-box-icon">👥</div>
                            <div class="action-box-content">
                                <h4>Manage User</h4>
                                <p>View and manage existing user accounts.</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6">
                        <a href="admin_accountrequest.php" class="action-box action-box-orange">
                            <div class="action-box-icon">📩</div>
                            <div class="action-box-content">
                                <h4>Account Creation Requests</h4>
                                <p>Review pending requests for account creation.</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="mt-4">
                    <a href="admin.php" class="admin-back-btn">Back to Dashboard</a>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
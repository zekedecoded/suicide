<?php
include '../../Record.php';
$Record->AddMerchant();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GJC EduPay - Add Store</title>
    <link href="../../Css/bootstrap.min.css" rel="stylesheet">
    <link href="../../Css/style.css" rel="stylesheet">
    <link href="../../Css/admin.css" rel="stylesheet">
</head>

<body class="admin-body">

    <?php include 'header.php'; ?>

    <div class="admin-wrapper">
        <div class="container admin-container">

            <!-- TOP -->
            <div class="admin-top-row">
                <div class="admin-title-group">
                    <h1 class="admin-page-title">Add Store</h1>
                    <p class="admin-page-subtitle">Register a new merchant account</p>
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

            <!-- FORM -->
            <form method="POST" class="admin-table-shell">
                <div class="admin-table-head">
                    <div>
                        <h3 class="admin-table-title">Store Profile</h3>
                        <p class="admin-table-subtitle">Enter merchant details</p>
                    </div>
                </div>

                <!-- PERSONAL -->
                <div class="row gx-4 gy-3 pb-4">
                    <div class="col-12">
                        <h4 class="admin-form-section-title">Owner Information</h4>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="admin-form-label">First Name</label>
                        <input name="firstname" type="text" class="form-control admin-form-input mt-2"
                            placeholder="Michael">
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="admin-form-label">Last Name</label>
                        <input name="lastname" type="text" class="form-control admin-form-input mt-2"
                            placeholder="Garcia">
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="admin-form-label">Middle Name</label>
                        <input name="middlename" type="text" class="form-control admin-form-input mt-2"
                            placeholder="Bañez">
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="admin-form-label">Suffix</label>
                        <input name="suffix" type="text" class="form-control admin-form-input mt-2"
                            placeholder="Jr.">
                    </div>
                </div>

                <!-- STORE -->
                <div class="row gx-4 gy-3 pb-4">
                    <div class="col-12">
                        <h4 class="admin-form-section-title">Store Information</h4>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4">
                        <label class="admin-form-label">Store Name</label>
                        <input name="storename" type="text" class="form-control admin-form-input mt-2"
                            placeholder="My Store">
                    </div>
                </div>

                <!-- CONTACT -->
                <div class="row gx-4 gy-3 pb-2">
                    <div class="col-12">
                        <h4 class="admin-form-section-title">Contact Information</h4>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="admin-form-label">Contact Number</label>
                        <input name="contact" type="text" class="form-control admin-form-input mt-2"
                            placeholder="09123456789">
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="admin-form-label">Email</label>
                        <input name="email" type="text" class="form-control admin-form-input mt-2"
                            placeholder="michael.garcia@example.com">
                    </div>
                </div>

                <!-- BUTTONS -->
                <div class="d-flex justify-content-between flex-wrap gap-3 pt-4">
                    <a href="admin_actions.php" class="admin-back-btn">
                        Back
                    </a>

                    <button name="AddMerchant" class="admin-submit-btn">
                        Submit Information
                    </button>
                </div>

            </form>

        </div>
    </div>

</body>

</html>
<?php
include '../../Record.php';

if (isset($_GET['id'])) {
    $row = $Record->viewStore($_GET['id']);
} else {
    //redirect
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GJC EduPay - View Store</title>
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
                    <h1 class="admin-page-title">Store Profile</h1>
                    <p class="admin-page-subtitle">View store and owner details</p>
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

            <!-- CONTENT -->
            <div class="admin-table-shell">
                <div class="admin-table-head">
                    <div>
                        <h3 class="admin-table-title">Store Information</h3>
                        <p class="admin-table-subtitle">Read-only details of the store</p>
                    </div>
                </div>

                <!-- OWNER -->
                <div class="row gx-4 gy-3 pb-4">
                    <div class="col-12">
                        <h4 class="admin-form-section-title">Owner Information</h4>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="admin-form-label">First Name</label>
                        <input type="text" class="form-control admin-form-input mt-2" disabled value="<?= $row[
                            'first_name'
                        ] ?>">
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="admin-form-label">Middle Name</label>
                        <input type="text" class="form-control admin-form-input mt-2" disabled value="<?= $row[
                            'middle_name'
                        ] ?>">
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="admin-form-label">Last Name</label>
                        <input type="text" class="form-control admin-form-input mt-2" disabled value="<?= $row[
                            'last_name'
                        ] ?>">
                    </div>


                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="admin-form-label">Suffix</label>
                        <input type="text" class="form-control admin-form-input mt-2" disabled value="<?= $row[
                            'suffix'
                        ] ?>">
                    </div>
                </div>

                <!-- STORE -->
                <div class="row gx-4 gy-3 pb-4">
                    <div class="col-12">
                        <h4 class="admin-form-section-title">Store Information</h4>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4">
                        <label class="admin-form-label">Store Name</label>
                        <input type="text" class="form-control admin-form-input mt-2" disabled value="<?= $row[
                            'stall_name'
                        ] ?>">
                    </div>
                </div>

                <!-- CONTACT -->
                <div class="row gx-4 gy-3 pb-2">
                    <div class="col-12">
                        <h4 class="admin-form-section-title">Contact Information</h4>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="admin-form-label">Contact Number</label>
                        <input type="text" class="form-control admin-form-input mt-2" disabled
                            value="<?= $row['contact_number'] ?>">
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="admin-form-label">Email</label>
                        <input type="text" class="form-control admin-form-input mt-2" disabled
                            value="<?= $row['email'] ?>">
                    </div>
                </div>

                <!-- BUTTONS -->
                <div class="d-flex justify-content-between flex-wrap gap-3 pt-4">
                    <a href="admin_manager.php" class="admin-back-btn">
                        Back
                    </a>

                    <a href="admin_action_edit_studentinfo.php" class="admin-submit-btn">
                        Edit Information
                    </a>
                </div>

            </div>

        </div>
    </div>

</body>

</html>
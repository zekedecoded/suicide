<?php
require '../../Record.php';
$data = $Record->getAll();
$data1 = $Record->getMerchants();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GJC EduPay - Manage Users</title>
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
                    <h1 class="admin-page-title">Manage Users</h1>
                    <p class="admin-page-subtitle">View and manage all users</p>
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

                <!-- STUDENTS -->
                <div class="admin-table-head">
                    <div>
                        <h3 class="admin-table-title">Student Users</h3>
                        <p class="admin-table-subtitle">List of all registered students</p>
                    </div>
                </div>

                <div class="table-responsive mb-5">
                    <table class="table admin-transaction-table align-middle mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Year Level & Program</th>
                                <th>Email</th>
                                <!-- <th>Phone No.</th> -->
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $number = 0;
                            foreach ($data as $row) {
                                $number++; ?>
                                <tr>
                                    <td><?= $number ?></td>
                                    <td><?= $row['first_name'] .
                                        ' ' .
                                        $row['middle_name'] .
                                        ' ' .
                                        $row['last_name'] .
                                        ' ' .
                                        $row['suffix'] ?></td>
                                    <td><?= $row['yr_lvl'] .
                                        ' — ' .
                                        $row['course_code'] ?></td>
                                    <td><?= $row['email'] ?></td>
                                    <!-- <td><?= $row[
                                        'contact_number'
                                    ] ?></td> -->
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="admin_view_student_info.php?id=<?= $row[
                                                'userID'
                                            ] ?>" class="admin-view-btn">
                                                View
                                            </a>
                                            <a href="admin_topup_wallet.php?id=<?= $row[
                                                'userID'
                                            ] ?>" class="admin-topup-btn">
                                                Top-up
                                            </a>
                                            <a href="admin_delete.php?id=<?= $row[
                                                'userID'
                                            ] ?>" class="admin-delete-btn"
                                                onclick="return confirm('Are you sure you want to delete this student?')">
                                                Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <!-- STORES -->
                <div class="admin-table-head">
                    <div>
                        <h3 class="admin-table-title">Store Users</h3>
                        <p class="admin-table-subtitle">List of all registered merchants</p>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table admin-transaction-table align-middle mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Store Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $number = 0;
                            foreach ($data1 as $row) {
                                $number++; ?>
                            <tr>
                                <td><?= $number ?></td>
                                <td><?= $row['first_name'] .
                                    ' ' .
                                    $row['middle_name'] .
                                    ' ' .
                                    $row['last_name'] .
                                    $row['suffix'] ?></td>
                                <td><?= $row['stall_name'] ?></td>
                                <td><?= $row['email'] ?></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="admin_view_store_info.php?id=<?= $row[
                                            'userID'
                                        ] ?>" class="admin-view-btn">
                                            View
                                        </a>
                                        <a href="admin_topup_store_wallet.php" class="admin-topup-btn">
                                            Top-up
                                        </a>
                                        <a href="#" class="admin-delete-btn">
                                            Delete
                                        </a>
                                    </div>
                                </td>
                            </tr>
                                 <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <!-- BACK -->
                <div class="mt-4">
                    <a href="admin_actions.php" class="admin-back-btn">Back</a>
                </div>

            </div>

        </div>
    </div>

</body>

</html>
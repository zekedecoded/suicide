<?php
include '../../Record.php';

if (isset($_GET['id'])) {
    $row = $Record->view($_GET['id']);
    $courses = $Record->getCourses();
} else {
    header('Location: ./admin_manager.php');
    exit();
}

if (isset($_POST['edit'])) {
    $Record->edit($_GET['id']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GJC EduPay - Edit Student Info</title>
    <link href="../../Css/bootstrap.min.css" rel="stylesheet">
    <link href="../../Css/style.css" rel="stylesheet">
    <link href="../../Css/admin.css" rel="stylesheet">
</head>

<body class="admin-body">

    <?php include 'header.php'; ?>

    <div class="admin-wrapper">
        <div class="container admin-container">

            <div class="admin-top-row">
                <div class="admin-title-group">
                    <h1 class="admin-page-title">Student Profile</h1>
                    <p class="admin-page-subtitle">Edit and update student information</p>
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

            <form method="POST" class="admin-table-shell">
                <div class="admin-table-head">
                    <div>
                        <h3 class="admin-table-title">Student Information</h3>
                        <p class="admin-table-subtitle">Update the student's personal, academic, and contact details</p>
                    </div>
                </div>

                <!-- PERSONAL -->
                <div class="row gx-4 gy-3 pb-4">
                    <div class="col-12">
                        <h4 class="admin-form-section-title">Personal Information</h4>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="admin-form-label">First Name</label>
                        <input name="first_name" type="text" class="form-control admin-form-input mt-2"
                            value="<?= $row['first_name'] ?>">
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="admin-form-label">Middle Name</label>
                        <input name="middle_name" type="text" class="form-control admin-form-input mt-2"
                            value="<?= $row['middle_name'] ?>">
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="admin-form-label">Last Name</label>
                        <input name="last_name" type="text" class="form-control admin-form-input mt-2"
                            value="<?= $row['last_name'] ?>">
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="admin-form-label">Suffix</label>
                        <input name="suffix" type="text" class="form-control admin-form-input mt-2"
                            value="<?= $row['suffix'] ?>">
                    </div>
                </div>

                <!-- YEAR LEVEL & PROGRAM -->
                <div class="row gx-4 gy-3 pb-4">
                    <div class="col-12">
                        <h4 class="admin-form-section-title">Year Level & Program</h4>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="admin-form-label" for="yr_lvl">Year Level</label>
                        <select id="yr_lvl" name="yr_lvl" class="form-control admin-form-input mt-2">
                            <?php
                            $levels = [
                                '1st Year',
                                '2nd Year',
                                '3rd Year',
                                '4th Year',
                            ];
                            foreach ($levels as $level): ?>
                                <option value="<?= $level ?>"
                                    <?= $row['yr_lvl'] === $level
                                        ? 'selected'
                                        : '' ?>>
                                    <?= $level ?>
                                </option>
                            <?php endforeach;
                            ?>
                        </select>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="admin-form-label" for="courseID">Program</label>
                        <select id="courseID" name="courseID" class="form-control admin-form-input mt-2">
                            <?php foreach ($courses as $course): ?>
                                <option value="<?= $course['courseID'] ?>"
                                    <?= $row['courseID'] == $course['courseID']
                                        ? 'selected'
                                        : '' ?>>
                                    <?= $course['course_code'] ?> - <?= $course[
     'course_name'
 ] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <!-- CONTACT -->
                <div class="row gx-4 gy-3 pb-2">
                    <div class="col-12">
                        <h4 class="admin-form-section-title">Contact Information</h4>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="admin-form-label">Contact Number</label>
                        <input name="contact_number" type="text" class="form-control admin-form-input mt-2"
                            value="<?= $row['contact_number'] ?>">
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="admin-form-label">Email</label>
                        <input name="email" type="text" class="form-control admin-form-input mt-2"
                            value="<?= $row['email'] ?>">
                    </div>
                </div>

                <!-- BUTTONS -->
                <div class="d-flex justify-content-between flex-wrap gap-3 pt-4">
                    <a href="admin_manager.php" class="admin-back-btn">
                        Back
                    </a>

                    <button name="edit" class="admin-submit-btn">
                        Save Changes
                    </button>
                </div>

            </form>

        </div>
    </div>

</body>

</html>
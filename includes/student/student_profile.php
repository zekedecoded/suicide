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
                    <h1 class="student-page-title">Student Profile</h1>
                    <p class="student-page-subtitle">View your personal information</p>
                </div>
            </div>

            <!-- PROFILE CARD -->
            <div class="student-table-shell">

                <!-- PERSONAL -->
                <div class="row gx-4 gy-3 pb-4">
                    <div class="col-12">
                        <h4 class="student-form-section-title">Personal Information</h4>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="student-form-label">First Name</label>
                        <input type="text" class="form-control student-form-input mt-2" disabled placeholder="Michael">
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="student-form-label">Last Name</label>
                        <input type="text" class="form-control student-form-input mt-2" disabled placeholder="Garcia">
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="student-form-label">Middle Name</label>
                        <input type="text" class="form-control student-form-input mt-2" disabled placeholder="Bañez">
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="student-form-label">Suffix</label>
                        <input type="text" class="form-control student-form-input mt-2" disabled placeholder="Jr.">
                    </div>
                </div>

                <!-- YEAR -->
                <div class="row gx-4 gy-3 pb-4">
                    <div class="col-12">
                        <h4 class="student-form-section-title">Year Level & Program</h4>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="student-form-label">Year Level</label>
                        <input type="text" class="form-control student-form-input mt-2" disabled placeholder="3rd Year">
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="student-form-label">Program</label>
                        <input type="text" class="form-control student-form-input mt-2" disabled
                            placeholder="Computer Science">
                    </div>
                </div>

                <!-- CONTACT -->
                <div class="row gx-4 gy-3 pb-4">
                    <div class="col-12">
                        <h4 class="student-form-section-title">Contact Information</h4>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="student-form-label">Contact Number</label>
                        <input type="text" class="form-control student-form-input mt-2" disabled
                            placeholder="09123456789">
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="student-form-label">Email</label>
                        <input type="text" class="form-control student-form-input mt-2" disabled
                            placeholder="michael.garcia@example.com">
                    </div>
                </div>

                <!-- BUTTONS -->
                <div class="d-flex justify-content-between pt-3">
                    <a href="student.php" class="student-back-btn">
                        Back
                    </a>

                    <a href="student_updateinfo.php" class="student-submit-btn">
                        Edit Information
                    </a>
                </div>

            </div>

        </div>
    </div>

</body>
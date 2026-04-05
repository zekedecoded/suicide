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
                    <span class="store-section-badge">Store Profile</span>
                    <h1 class="store-page-title">Merchant Information</h1>
                    <p class="store-page-subtitle">
                        View your personal and store details.
                    </p>
                </div>
            </div>

            <!-- PROFILE CARD -->
            <div class="store-table-shell">

                <!-- PERSONAL INFO -->
                <h4 class="store-form-section-title mb-3">Personal Information</h4>

                <div class="row gy-3 mb-4">
                    <div class="col-12 col-md-3">
                        <label class="store-form-label">First Name</label>
                        <input type="text" class="form-control store-form-input mt-2" disabled placeholder="Michael">
                    </div>

                    <div class="col-12 col-md-3">
                        <label class="store-form-label">Last Name</label>
                        <input type="text" class="form-control store-form-input mt-2" disabled placeholder="Garcia">
                    </div>

                    <div class="col-12 col-md-3">
                        <label class="store-form-label">Middle Name</label>
                        <input type="text" class="form-control store-form-input mt-2" disabled placeholder="Bañez">
                    </div>

                    <div class="col-12 col-md-3">
                        <label class="store-form-label">Suffix</label>
                        <input type="text" class="form-control store-form-input mt-2" disabled placeholder="Jr.">
                    </div>
                </div>

                <!-- STORE INFO -->
                <h4 class="store-form-section-title mb-3">Store Information</h4>

                <div class="row gy-3 mb-4">
                    <div class="col-12 col-md-4">
                        <label class="store-form-label">Store Name</label>
                        <input type="text" class="form-control store-form-input mt-2" disabled
                            placeholder="Burger Shop">
                    </div>
                </div>

                <!-- CONTACT INFO -->
                <h4 class="store-form-section-title mb-3">Contact Information</h4>

                <div class="row gy-3 mb-4">
                    <div class="col-12 col-md-4">
                        <label class="store-form-label">Contact Number</label>
                        <input type="text" class="form-control store-form-input mt-2" disabled
                            placeholder="09123456789">
                    </div>

                    <div class="col-12 col-md-4">
                        <label class="store-form-label">Email</label>
                        <input type="text" class="form-control store-form-input mt-2" disabled
                            placeholder="michael.garcia@example.com">
                    </div>
                </div>

                <!-- BUTTONS -->
                <div class="d-flex justify-content-between flex-wrap gap-3 pt-3">
                    <a href="store.php" class="store-back-btn">
                        Back
                    </a>

                    <a href="store_updateinfo.php" class="store-submit-btn">
                        Edit Information
                    </a>
                </div>

            </div>

        </div>
    </div>

</body>
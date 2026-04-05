<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top-Up Store Wallet</title>

    <link href="../../Css/bootstrap.min.css" rel="stylesheet">
    <link href="../../Css/style.css" rel="stylesheet">
    <link href="../../Css/admin.css" rel="stylesheet">
</head>

<body class="admin-body">

    <?php include 'header.php'; ?>

    <div class="admin-wrapper">
        <div class="container admin-container">

            <!-- TITLE -->
            <div class="mb-4">
                <h4 class="fw-bold">← Top-Up Store Wallet</h4>
            </div>

            <!-- FIND STORE -->
            <div class="admin-table-shell mb-4">
                <label class="admin-form-label">Find Store</label>

                <div class="d-flex gap-2 mt-2">
                    <input type="text" class="form-control admin-form-input" placeholder="Enter Store ID">
                    <button class="admin-topup-btn">🔍 Find</button>
                </div>
            </div>

            <!-- STORE CARD -->
            <div class="admin-table-shell mb-4">

                <div class="d-flex align-items-center gap-3 mb-3">
                    <div
                        style="width:45px;height:45px;border-radius:12px;background:#e9f7ec;display:flex;align-items:center;justify-content:center;">
                        🏪
                    </div>

                    <div>
                        <strong>Store Name</strong><br>
                        <small>STORE-0000</small><br>
                        <span style="color:#159947;font-weight:700;">Current: ₱0.00</span>
                    </div>
                </div>

                <!-- AMOUNT -->
                <div class="mb-3">
                    <label class="admin-form-label">Top-Up Amount (₱)</label>
                    <input type="number" class="form-control admin-form-input mt-2" placeholder="0.00">
                </div>

                <!-- NOTE -->
                <div class="mb-3">
                    <label class="admin-form-label">Note / Reason</label>
                    <input type="text" class="form-control admin-form-input mt-2" placeholder="Admin Top-Up">
                </div>

                <!-- QUICK AMOUNT -->
                <div class="d-flex gap-2 flex-wrap mb-3">
                    <button class="btn btn-light">+₱50</button>
                    <button class="btn btn-light">+₱100</button>
                    <button class="btn btn-light">+₱200</button>
                    <button class="btn btn-light">+₱500</button>
                </div>

                <!-- SUBMIT -->
                <button class="admin-submit-btn w-100">
                    Confirm Top-Up
                </button>

            </div>

            <!-- RECENT (BLANK MUNA) -->
            <div class="admin-table-shell">
                <h6 class="fw-bold mb-3">Recent Top-Ups</h6>

                <div class="text-muted">
                    No transactions yet.
                </div>
            </div>

        </div>
    </div>

</body>

</html>
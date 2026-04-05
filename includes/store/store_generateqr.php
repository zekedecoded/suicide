<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/store.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
</head>

<body class="store-body">

    <?php include 'header.php'; ?>

    <div class="store-wrapper">
        <div class="container store-container">

            <!-- TOP HEADER -->
            <div class="store-top-row">
                <div class="store-title-group">
                    <span class="store-section-badge">QR Payment</span>
                    <h1 class="store-page-title">Generate QR Code</h1>
                    <p class="store-page-subtitle">
                        Enter amount and description to create a payment QR.
                    </p>
                </div>
            </div>

            <!-- QR CARD -->
            <div class="store-table-shell text-center">

                <!-- AMOUNT -->
                <h4 class="store-form-section-title mb-2">Enter Amount</h4>
                <input type="number" id="amountInput" class="form-control store-form-input mt-2 mb-3 text-center"
                    placeholder="Enter amount">

                <!-- QUICK AMOUNTS -->
                <div class="d-flex justify-content-center flex-wrap gap-2 mb-4">
                    <button class="store-topup-btn" onclick="setAmount(100)">100</button>
                    <button class="store-topup-btn" onclick="setAmount(150)">150</button>
                    <button class="store-topup-btn" onclick="setAmount(200)">200</button>
                    <button class="store-topup-btn" onclick="setAmount(250)">250</button>
                </div>

                <!-- DESCRIPTION -->
                <h4 class="store-form-section-title mb-2">Item Description</h4>
                <input type="text" id="descInput" class="form-control store-form-input mt-2 mb-4 text-center"
                    placeholder="Enter item">

                <!-- QR OUTPUT -->
                <div id="qrcode" class="mb-4 d-flex justify-content-center"></div>

                <!-- BUTTONS -->
                <div class="d-flex flex-wrap gap-3 justify-content-center">
                    <button onclick="generateQR()" class="store-submit-btn">
                        Generate QR Code
                    </button>

                    <a href="store.php" class="store-back-btn" style="background:#dc3545;">
                        Back
                    </a>
                </div>

            </div>

        </div>
    </div>

    <script>
    function setAmount(value) {
        document.getElementById("amountInput").value = value;
    }

    function generateQR() {
        let amount = document.getElementById("amountInput").value;
        let desc = document.getElementById("descInput").value;

        if (!amount) {
            alert("Enter amount first!");
            return;
        }

        let qrData = "Amount: " + amount + " | Item: " + desc;

        let qrContainer = document.getElementById("qrcode");
        qrContainer.innerHTML = ""; // clear previous QR

        new QRCode(qrContainer, {
            text: qrData,
            width: 200,
            height: 200
        });
    }
    </script>

</body>
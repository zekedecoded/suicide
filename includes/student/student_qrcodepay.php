<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Payment</title>
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
                    <h1 class="student-page-title">QR Payment</h1>
                    <p class="student-page-subtitle">Scan or enter code to pay</p>
                </div>
            </div>

            <!-- QR CARD -->
            <div class="student-table-shell text-center">

                <p class="fw-bold mb-3">Scan the QR Code to Pay</p>

                <!-- QR BOX -->
                <div class="bg-white rounded-3 mb-4 mx-auto" style="width:200px; height:200px;" id="qr-reader"></div>

                <!-- MANUAL -->
                <p class="small mb-2">Can't Use Camera? Enter Code</p>

                <input type="text" class="form-control student-form-input text-center mb-4" placeholder="KFEH098D">

                <!-- BUTTONS -->
                <div class="d-flex gap-3 justify-content-center">
                    <a href="student.php" class="student-back-btn">
                        Back
                    </a>

                    <button type="button" class="student-submit-btn">
                        Confirm
                    </button>
                </div>

            </div>

        </div>
    </div>

</body>
<script src="../../js/html5-qrcode.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
    const manualInput = document.querySelector('.student-form-input');
    const confirmBtn = document.querySelector('.student-submit-btn');

    const html5QrCode = new Html5Qrcode("qr-reader");

    function onScanSuccess(decodedText){
        sendQR(decodedText);
        html5QrCode.stop();
    }

   Html5Qrcode.getCameras().then(cameras => {
    if (cameras.length === 0) {
        alert("No camera found");
        return;
    }

    // Try to find back camera by label first
    const backCamera = cameras.find(c =>
        c.label.toLowerCase().includes('back') ||
        c.label.toLowerCase().includes('rear') ||
        c.label.toLowerCase().includes('environment')
    );

    // If found by label use it, otherwise take the last camera
    // (on most phones: index 0 = front, last index = back)
    const selectedCamera = backCamera || cameras[cameras.length - 1];

    console.log("Using camera:", selectedCamera.label, selectedCamera.id);

    html5QrCode.start(
        selectedCamera.id,
        {
            fps: 10,
            qrbox: { width: 250, height: 250 }
        },
        onScanSuccess
    ).catch(err => {
        console.error("Camera start failed:", err);
        alert("Could not start camera: " + err);
    });

}).catch(err => {
    console.error("getCameras failed:", err);
    alert("Camera access denied. Please allow camera permission.");
});
});
</script>
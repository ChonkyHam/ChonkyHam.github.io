<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ensure the path to remixicon is correct and accessible -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    
    <!-- Verify that these paths are correct relative to your HTML file's location -->
    <link rel="stylesheet" href="../css/colorsTailwind.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/stylePayment.css">
    
    <style>
        .payment-header-icon img {
            width: 80px;
            /* Atur lebar logo sesuai kebutuhan */
            height: 80px;
            /* Atur tinggi logo sesuai kebutuhan */
        }
    </style>
    <title>MindEffect</title>
    <link href="../img/resize.png" rel="icon">
</head>

<body class="body">

    <!-- start: Payment -->
    <section class="payment-section">
        <div class="container1">
            <div class="payment-wrapper">
                <div class="payment-left">
                    <div class="payment-header">
                        <div class="payment-header-icon">
                            <img src="../img/logoME.png" alt="Logo MindEffect">
                        </div>
                        <div class="payment-header-title">Order Summary</div>
                        <p class="payment-header-description">Selesaikan pembayaran Anda dengan aman dan mudah melalui proses checkout kami yang efisien.</p>
                    </div>
                    <div class="payment-content">
                        <div class="payment-body">
                            <div class="payment-summary">
                                <!-- Bagian Additional fee dihapus -->
                                <div class="payment-summary-item">
                                    <div class="payment-summary-name">MindEffect</div>
                                </div>
                                <div class="payment-summary-divider"></div>
                                <div class="payment-summary-item payment-summary-total">
                                    <div class="payment-summary-name">Bayar sesuai paket, lalu kirim bukti pembayaran melalui whatsapp</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="payment-right">
                    <form action="https://api.whatsapp.com/send" method="get" target="_blank" class="payment-form">
                        <h1 class="payment-title">Payment Details</h1>
                        <div class="payment-method">
                            <input type="radio" name="payment-method" id="method-1" checked>
                            <label for="method-1" class="payment-method-item">
                                <img src="../img/bca.png" alt="BCA">
                            </label>
                            <p class="payment-method-info">6891087834 a.n Rayhan Anugrah Ramadhan (BCA)</p>
                        </div>
                        <div class="payment-method">
                            <input type="radio" name="payment-method" id="method-2">
                            <label for="method-2" class="payment-method-item">
                                <img src="../img/bni.png" alt="BNI">
                            </label>
                            <p class="payment-method-info">1556925890 a.n Rayhan Anugrah Ramadhan (BNI)</p>
                        </div>
                        <input type="hidden" name="phone" value="6281289846595">
                        <button type="submit" class="payment-form-submit-button"><i class="ri-wallet-line"></i> Tekan Untuk Menuju Whatsapp</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Payment -->

</body>

</html>

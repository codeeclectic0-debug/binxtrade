<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Deposit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Segoe UI, Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #151a20, #0b0f14 65%, #050608);
            color: #fff;
            cursor: default;
            user-select: none;
        }

        .app {
            padding: 20px 34px 140px;
        }

        /* HEADER */
        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-bottom: 14px;
            border-bottom: 1px solid rgba(255, 200, 60, .25);
        }

        .topbar h1 {
            font-size: 20px;
            font-weight: 600;
        }

        .icon-btn {
            font-size: 22px;
            cursor: pointer;
            opacity: .8;
        }

        /* MAIN LAYOUT */
        .main {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-top: 40px;
        }

        /* LEFT ILLUSTRATION */
        .illustration {
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: .95;
        }

        .illustration-box {
            width: 420px;
            height: 360px;
            border-radius: 20px;
            background: linear-gradient(145deg, #20262e, #14191f);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #f2b705;
            font-size: 22px;
        }

        /* RIGHT FORM */
        .form-box {
            max-width: 480px;
        }

        .label {
            font-size: 14px;
            opacity: .7;
            margin-bottom: 6px;
        }

        .value {
            font-size: 22px;
            margin-bottom: 18px;
        }

        .value span {
            color: #f2b705;
            font-size: 14px;
        }

        .rate {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(255, 255, 255, .04);
            border: 1px solid rgba(255, 255, 255, .15);
            border-radius: 12px;
            padding: 14px;
            margin-bottom: 18px;
        }

        .rate span {
            color: #f2b705;
        }

        input,
        select {
            width: 100%;
            background: rgba(255, 255, 255, .04);
            border: 1px solid rgba(255, 255, 255, .15);
            border-radius: 12px;
            padding: 14px;
            color: #fff;
            margin-bottom: 18px;
        }

        .receive {
            text-align: right;
            font-size: 14px;
            margin-bottom: 18px;
        }

        .receive span {
            color: #f2b705;
            font-weight: 600;
        }

        .deposit-btn {
            width: 100%;
            background: #f2b705;
            border: none;
            border-radius: 12px;
            padding: 16px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            color: #000;
        }

        /* INSTRUCTIONS */
        .instructions {
            margin-top: 40px;
            border: 1px solid rgba(255, 200, 60, .35);
            border-radius: 14px;
            padding: 18px;
        }

        .instructions h3 {
            color: #f2b705;
            margin-bottom: 12px;
        }

        .instructions ul {
            padding-left: 18px;
            line-height: 1.7;
        }

        .instructions b {
            color: #f2b705;
        }

        /* BOTTOM NAV */
        .nav {
            position: fixed;
            bottom: 18px;
            left: 50%;
            transform: translateX(-50%);
            background: #161b22;
            border-radius: 26px;
            padding: 14px 26px;
            display: flex;
            gap: 28px;
            box-shadow: 0 0 22px rgba(0, 0, 0, .7);
        }

        .nav span {
            font-size: 20px;
            opacity: .8;
        }

        .nav .active {
            color: #f2b705;
        }

        /* RESPONSIVE */
        @media(max-width:900px) {
            .main {
                grid-template-columns: 1fr;
            }

            .illustration {
                display: none;
            }
        }

        select {
            color: #fff;
            /* selected text */
            background: #1e252c;
        }

        select option {
            color: #000;
            /* dropdown list text */
            background: #fff;
        }
    </style>
</head>

<body>

    <div class="app">

        <!-- HEADER -->
        <div class="topbar">
            <div class="icon-btn">‹</div>
            <h1>Deposit</h1>
            <div class="icon-btn">⟳</div>
        </div>

        <!-- MAIN -->
        <div class="main">

            <!-- LEFT -->
            <div class="illustration">
                <div class="illustration-box">
                    <img src="../../images/deposit-p3B_rvAj.svg" alt="Illustration">
                </div>
            </div>

            <!-- RIGHT -->
            <div class="form-box">

                <div class="label">Current Wallet</div>
                <div class="value">0.00 <span>INR</span></div>

                <div class="label">Conversion Rate</div>
                <div class="rate">
                    <div>1.00 USDTBSC</div>
                    <span>→</span>
                    <div>95.00 INR</div>
                </div>

                <div class="label">Currency</div>
                <select>
                    <option>Select a currency</option>
                    <option value="1">USDTBSC Tether USD (BEP20)</option>
                    <option value="2">USDTPOLYGON Tether USD (polygon)</option>
                </select>

                <div class="label">Amount</div>
                <input type="number" placeholder="0.00">

                <div class="receive">
                    Will receive ≈ <span>0.00 INR</span>
                </div>

                <button class="deposit-btn">Deposit</button>

            </div>

        </div>

        <!-- INSTRUCTIONS -->
        <div class="instructions">
            <h3>Deposit Instructions</h3>
            <ul>
                <li>Deposit timing is <b>24/7</b>.</li>
                <li>The minimum deposit amount is <b>9.89 USDTBSC</b>.</li>
                <li>If you have any issues, please contact our support team.</li>
            </ul>
        </div>

    </div>

    <!-- BOTTOM NAV -->
    <?php
    $page = 'wallet';
    include 'bottom-button.php';
    ?>
</body>

</html>
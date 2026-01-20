<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>P2P Transfer</title>
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

        /* MAIN */
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
        }

        .illustration-box {
            width: 420px;
            height: 380px;
            border-radius: 20px;
            background: linear-gradient(145deg, #20262e, #14191f);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #f2b705;
            font-size: 18px;
        }

        /* FORM */
        .form-box {
            max-width: 480px;
        }

        .label {
            font-size: 14px;
            opacity: .7;
            margin-bottom: 6px;
        }

        .balance {
            font-size: 22px;
            margin-bottom: 18px;
        }

        .balance span {
            color: #f2b705;
            font-size: 14px;
        }

        input {
            width: 100%;
            background: rgba(255, 255, 255, .04);
            border: 1px solid rgba(255, 255, 255, .15);
            border-radius: 12px;
            padding: 14px;
            color: #fff;
            margin-bottom: 18px;
        }

        .password {
            position: relative;
        }

        .eye {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            opacity: .6;
        }

        .transfer-btn {
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
    </style>
</head>

<body>

    <div class="app">

        <!-- HEADER -->
        <div class="topbar">
            <div class="icon-btn back">‹</div>
            <h1>P2P Transfer</h1>
            <div class="icon-btn">⟳</div>
        </div>

        <!-- MAIN -->
        <div class="main">

            <!-- LEFT -->
            <div class="illustration">
                <div class="illustration-box">
                    <img src="../../images/p2p.svg" alt="P2P Transfer Illustration">
                </div>
            </div>

            <!-- RIGHT -->
            <div class="form-box">

                <div class="label">Current Balance</div>
                <div class="balance">0.00 <span>INR</span></div>

                <div class="label">User ID</div>
                <input type="text" value="EW123456">

                <div class="label">Amount</div>
                <input type="number" placeholder="0.00">

                <div class="label">Password</div>
                <div class="password">
                    <input type="password" placeholder="********">
                    <span class="eye">👁️</span>
                </div>

                <button class="transfer-btn">Transfer</button>

            </div>

        </div>

        <!-- INSTRUCTIONS -->
        <div class="instructions">
            <h3>P2P Transfer Instructions</h3>
            <ul>
                <li>P2P transfer timing is <b>24/7</b>.</li>
                <li>The minimum transfer amount is <b>500.00 INR</b>.</li>
                <li>The maximum transfer amount is <b>10,000.00 INR</b>.</li>
                <li>The transfer fee is <b>0%</b> of the total amount.</li>
                <li>You can transfer <b>4 times</b> a day.</li>
                <li>Please ensure the User ID is correct before submitting.</li>
                <li>If you have any issues, please contact support.</li>
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
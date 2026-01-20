<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Offers</title>
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
            background: linear-gradient(135deg, #14181f, #0b0f14 65%, #050608);
            color: #fff;
            cursor: default;
            user-select: none;
        }

        .app {
            padding: 22px 28px 120px;
        }

        /* Header */
        .topbar {
            position: relative;
            text-align: center;
            padding-bottom: 14px;
            border-bottom: 1px solid rgba(255, 200, 60, .25);
        }

        .back {
            position: absolute;
            left: 0;
            font-size: 26px;
            cursor: pointer;
        }

        .topbar h1 {
            font-size: 20px;
            font-weight: 600;
        }

        /* Offer Card */
        .offer-wrap {
            margin-top: 40px;
        }

        .offer-card {
            width: 320px;
            background:
                radial-gradient(circle at right, rgba(0, 120, 255, .35), transparent 60%),
                linear-gradient(180deg, #061a3a, #020b1d);
            border-radius: 18px;
            padding: 26px 22px;
            border: 2px solid #f2b705;
            box-shadow:
                0 0 25px rgba(242, 183, 5, .4),
                inset 0 0 18px rgba(255, 255, 255, .05);
            position: relative;
        }

        /* Inner border glow */
        .offer-card::before {
            content: "";
            position: absolute;
            inset: 10px;
            border: 1px solid rgba(242, 183, 5, .7);
            border-radius: 12px;
            pointer-events: none;
        }

        /* Text styles */
        .offer-title {
            text-align: center;
            color: #f2b705;
            font-size: 22px;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 14px;
        }

        .percent {
            text-align: center;
            font-size: 72px;
            font-weight: 800;
            color: #f2b705;
            margin-bottom: 4px;
        }

        .extra {
            text-align: center;
            font-size: 34px;
            font-weight: 700;
            color: #f2b705;
            margin-bottom: 14px;
        }

        .valid {
            text-align: center;
            font-size: 14px;
            opacity: .9;
            margin-bottom: 6px;
        }

        .min {
            text-align: center;
            font-size: 14px;
            opacity: .9;
            margin-bottom: 26px;
        }

        .brand {
            text-align: center;
            font-size: 24px;
            font-weight: 700;
            color: #f2b705;
            letter-spacing: 1px;
        }

        /* Bottom Nav */
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
    </style>
</head>

<body>
    <div class="app">

        <!-- Header -->
        <div class="topbar">
            <div class="back">‹</div>
            <h1>Offers</h1>
        </div>

        <!-- Offer -->
        <div class="offer-wrap">
            <div class="offer-card">
                <div class="offer-title">DEPOSIT OFFER</div>
                <div class="percent">3%</div>
                <div class="extra">EXTRA</div>
                <div class="valid">Valid from 16 Jan to 25 Jan</div>
                <div class="min">Minimum deposit 1000rs</div>
                <div class="brand">EQURA WORLD</div>
            </div>
        </div>

    </div>

    <!-- Bottom Navigation -->
    <?php
    $page = 'offers';
    include 'bottom-button.php';
    ?>
</body>

</html>
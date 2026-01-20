<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Trending Markets</title>
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
            padding: 24px 26px 120px;
        }

        /* Top Trending Ticker */
        .top-trending {
            display: flex;
            align-items: center;
            gap: 20px;
            overflow: hidden;
        }

        .top-trending .title {
            color: #ffcc33;
            font-weight: 600;
            white-space: nowrap;
        }

        .marquee {
            position: relative;
            overflow: hidden;
            width: 100%;
        }

        .marquee-track {
            display: flex;
            gap: 30px;
            width: max-content;
            animation: scroll 25s linear infinite;
        }

        .marquee-track span {
            white-space: nowrap;
            font-size: 15px;
        }

        .red {
            color: #ff3b5c
        }

        @keyframes scroll {
            from {
                transform: translateX(0)
            }

            to {
                transform: translateX(-50%)
            }
        }

        .ticker {
            display: flex;
            align-items: center;
            gap: 22px;
            opacity: .9;
        }

        .ticker span {
            white-space: nowrap;
        }

        .red {
            color: #ff3b5c
        }

        .green {
            color: #00d18f
        }

        /* Section header */
        .section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 14px;
        }

        .section h2 {
            color: #ffcc33;
            font-size: 20px;
        }

        .section .fire {
            font-size: 20px;
        }

        /* Table card */
        .table-card {
            border-radius: 18px;
            border: 1px solid rgba(255, 255, 255, .08);
            background: rgba(255, 255, 255, .03);
            overflow: hidden;
        }

        .header,
        .row {
            display: grid;
            grid-template-columns: 2fr 2fr 1fr;
            padding: 18px 22px;
        }

        .header {
            background: rgba(255, 255, 255, .05);
            font-weight: 600;
            color: #a9bdd6;
        }

        .row {
            border-top: 1px solid rgba(255, 255, 255, .08);
        }

        .row:hover {
            background: rgba(255, 255, 255, .04);
        }

        /* Name column */
        .name {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .name small {
            opacity: .7;
        }

        /* Price column */
        .price {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .price small {
            opacity: .7;
        }

        /* Change badge */
        .chg {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .badge {
            padding: 7px 14px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 14px;
        }

        .badge.red {
            background: #ff2d55;
        }

        .badge.green {
            background: #12d18e;
            color: #000;
        }

        /* Bottom navigation */
        .nav {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: #161b22;
            border-radius: 26px;
            padding: 14px 24px;
            display: flex;
            gap: 26px;
            box-shadow: 0 0 22px rgba(0, 0, 0, .7);
        }

        .nav span {
            font-size: 20px;
            opacity: .8;
        }

        .nav .active {
            color: #ffcc33;
        }
    </style>
</head>

<body>
    <div class="app">

        <!-- Top Trending -->
        <div class="top-trending">
            <div class="title">Top Trending</div>

            <div class="marquee">
                <div class="marquee-track">
                    <span class="red">−165.25 (−5.18%)</span>
                    <span>SOLUSDT <span class="red">128.54 −3.67%</span></span>
                    <span>PEPEUSDT <span class="red">0.00000514 −2.65%</span></span>
                    <span>DOGEUSDT <span class="red">0.12558 −2.77%</span></span>

                    <!-- duplicate for seamless loop -->
                    <span class="red">−165.25 (−5.18%)</span>
                    <span>SOLUSDT <span class="red">128.54 −3.67%</span></span>
                    <span>PEPEUSDT <span class="red">0.00000514 −2.65%</span></span>
                    <span>DOGEUSDT <span class="red">0.12558 −2.77%</span></span>
                </div>
            </div>
        </div>


        <!-- Trending -->
        <div class="section">
            <h2>Trending</h2>
            <div class="fire">🔥</div>
        </div>

        <!-- Table -->
        <div class="table-card">
            <div class="header">
                <div>Name</div>
                <div>Last Price</div>
                <div style="text-align:right">24h chg%</div>
            </div>

            <div class="row">
                <div class="name">
                    <strong>Bitcoin</strong>
                    <small>BTC/USDT</small>
                </div>
                <div class="price">
                    <strong>90,436.0469</strong>
                    <small>$90436.04689610</small>
                </div>
                <div class="chg">
                    <span class="badge red">−2.7133%</span>
                </div>
            </div>

            <div class="row">
                <div class="name">
                    <strong>Ethereum</strong>
                    <small>ETH/USDT</small>
                </div>
                <div class="price">
                    <strong>3,040.453</strong>
                    <small>$3040.45304748</small>
                </div>
                <div class="chg">
                    <span class="badge red">−5.4956%</span>
                </div>
            </div>

            <div class="row">
                <div class="name">
                    <strong>BNB</strong>
                    <small>BNB/USDT</small>
                </div>
                <div class="price">
                    <strong>902.419</strong>
                    <small>$902.41901171</small>
                </div>
                <div class="chg">
                    <span class="badge red">−2.4449%</span>
                </div>
            </div>

            <div class="row">
                <div class="name">
                    <strong>XRP</strong>
                    <small>XRP/USDT</small>
                </div>
                <div class="price">
                    <strong>1.9247</strong>
                    <small>$1.92468650</small>
                </div>
                <div class="chg">
                    <span class="badge red">−2.8616%</span>
                </div>
            </div>

            <div class="row">
                <div class="name">
                    <strong>USDC</strong>
                    <small>USDC/USDT</small>
                </div>
                <div class="price">
                    <strong>1.0011</strong>
                    <small>$1.00105994</small>
                </div>
                <div class="chg">
                    <span class="badge green">+0.0303%</span>
                </div>
            </div>

            <div class="row">
                <div class="name">
                    <strong>Solana</strong>
                    <small>SOL/USDT</small>
                </div>
                <div class="price">
                    <strong>128.836</strong>
                    <small>$128.83645021</small>
                </div>
                <div class="chg">
                    <span class="badge red">−3.6217%</span>
                </div>
            </div>

        </div>
    </div>

    <!-- Bottom Nav -->
    <?php
    $page = 'market';
    include 'bottom-button.php';
    ?>
</body>

</html>
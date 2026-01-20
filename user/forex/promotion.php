<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Promotion</title>
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
            padding: 26px 28px 120px;
        }

        /* Cards base */
        .card {
            background: rgba(255, 255, 255, .04);
            border: 1px solid rgba(255, 255, 255, .08);
            border-radius: 18px;
            padding: 22px;
        }

        /* Top commission */
        .top-card {
            text-align: center;
            margin-bottom: 22px;
        }

        .top-card h1 {
            font-size: 28px;
            margin: 12px 0 6px;
        }

        .top-card span {
            color: #ffcc33;
            font-size: 14px;
        }

        .top-card p {
            opacity: .8;
            font-size: 14px;
        }

        /* Invitation */
        .invite {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 26px;
        }

        .invite .icon {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            background: #f2b705;
            color: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .invite .text {
            flex: 1;
        }

        .invite .text strong {
            display: block;
            margin-bottom: 4px;
        }

        .invite .link {
            background: #1e252c;
            padding: 12px 14px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
        }

        .invite .copy {
            color: #ff7a00;
        }

        /* Action grid */
        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 22px;
        }

        .item {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .item .left {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .item .ico {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            background: #1e252c;
        }

        .arrow {
            opacity: .5;
            font-size: 20px;
        }

        /* Single row card */
        .single {
            max-width: 32%;
            margin-bottom: 26px;
        }

        /* Promotion data */
        .promo h3 {
            margin-bottom: 16px;
        }

        .stats {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .stat strong {
            font-size: 22px;
        }

        .stat span {
            font-size: 14px;
            opacity: .8;
        }

        .center {
            text-align: center;
        }

        /* Bottom nav */
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
            color: #ffcc33;
        }

        @media(max-width:900px) {
            .grid {
                grid-template-columns: 1fr
            }

            .single {
                max-width: 100%
            }
        }
    </style>
</head>

<body>
    <div class="app">

        <!-- Yesterday Commission -->
        <div class="card top-card">
            🏅 ⭐
            <h1>0.00 <span>INR</span></h1>
            <p>Yesterday's total commission</p>
        </div>

        <!-- Invitation -->
        <div class="card invite">
            <div class="icon">🎁</div>
            <div class="text">
                <strong>Invitation Code</strong>
                <small>Share with friends to earn rewards</small>
            </div>
            <div class="link">
                https://trade.equra.world/auth/sign-up?inviteCode=EW91953115
                <span class="copy">📋</span>
            </div>
        </div>

        <!-- Action Cards -->
        <div class="grid">
            <div class="card item">
                <div class="left">
                    <div class="ico">👥</div>
                    Today Register Team
                </div>
                <div class="arrow">›</div>
            </div>

            <div class="card item">
                <div class="left">
                    <div class="ico">🧑‍🤝‍🧑</div>
                    Direct Team Details
                </div>
                <div class="arrow">›</div>
            </div>

            <div class="card item">
                <div class="left">
                    <div class="ico">💲</div>
                    Income Details
                </div>
                <div class="arrow">›</div>
            </div>
        </div>

        <div class="card item single">
            <div class="left">
                <div class="ico">📈</div>
                Subordinate Data
            </div>
            <div class="arrow">›</div>
        </div>

        <!-- Promotion Data -->
        <div class="card promo">
            <h3>Promotion Data</h3>
            <div class="stats">
                <div class="stat">
                    <strong>0</strong><br>
                    <span>Direct Members</span>
                </div>
                <div class="stat center">
                    <strong>0.00 <span style="color:#ffcc33">INR</span></strong><br>
                    <span>Total commission</span>
                </div>
                <div class="stat">
                    <strong>0</strong><br>
                    <span>Team Members</span>
                </div>
            </div>
        </div>

    </div>

    <!-- Bottom Navigation -->
    <?php
    $page = 'promotion';
    include 'bottom-button.php';
    ?>

</body>

</html>
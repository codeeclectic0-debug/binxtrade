<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Refer2Earn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Segoe UI, Arial, sans-serif
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #151a20, #0b0f14 65%, #050608);
            color: #fff;
            cursor: default;
            user-select: none;
        }

        .app {
            padding: 20px 26px 110px
        }

        .topbar {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            padding-bottom: 14px;
            border-bottom: 1px solid rgba(255, 200, 60, .25)
        }

        .back {
            position: absolute;
            left: 0;
            font-size: 26px;
            opacity: .9
        }

        .topbar h1 {
            font-size: 20px;
            font-weight: 600
        }

        .content {
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            gap: 60px;
            margin-top: 40px;
            align-items: center
        }

        .illustration {
            display: flex;
            align-items: center;
            justify-content: center
        }

        .illustration img {
            max-width: 100%;
            height: auto
        }

        .info h2 {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 12px
        }

        .info p {
            font-size: 15px;
            line-height: 1.6;
            opacity: .9;
            margin-bottom: 12px
        }

        .tag {
            color: #ffcc33;
            font-weight: 600;
            margin-bottom: 26px;
            display: inline-block
        }

        .box {
            background: rgba(255, 255, 255, .05);
            border: 1px solid rgba(255, 255, 255, .08);
            border-radius: 14px;
            padding: 16px 18px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 18px
        }

        .box span {
            font-size: 13px;
            opacity: .8;
            display: block;
            margin-bottom: 6px
        }

        .box strong {
            font-size: 15px;
            word-break: break-all
        }

        .copy {
            font-size: 18px;
            opacity: .8
        }

        .share {
            margin-top: 26px;
            width: 100%;
            background: #f2b705;
            border: none;
            border-radius: 14px;
            padding: 16px;
            font-size: 16px;
            font-weight: 600;
            color: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px
        }

        .nav {
            position: fixed;
            left: 50%;
            bottom: 22px;
            transform: translateX(-50%);
            background: #161b22;
            border-radius: 26px;
            padding: 14px 24px;
            display: flex;
            gap: 26px;
            box-shadow: 0 0 22px rgba(0, 0, 0, .7)
        }

        .nav img {
            width: 22px;
            opacity: .85
        }

        @media(max-width:900px) {
            .content {
                grid-template-columns: 1fr;
                gap: 40px
            }
        }
    </style>
</head>

<body>
    <div class="app">

        <div class="topbar">
            <div class="back">‹</div>
            <h1>Refer2Earn</h1>
        </div>

        <div class="content">
            <div class="illustration">
                <img src="../../images/refer-BbD4DWlj.svg" alt="Refer2Earn Illustration" style="width: 50%;">
            </div>

            <div class="info">
                <h2>WIN UP TO 2,000 USDC!</h2>
                <p>Let's earn together by joining Our Trading Platform's time-limited referral campaign.</p>
                <div class="tag">#EarnTogether</div>

                <div class="box">
                    <div>
                        <span>Referral ID</span>
                        <strong>EW91953115</strong>
                    </div>
                    <div class="copy">⧉</div>
                </div>

                <div class="box">
                    <div>
                        <span>Referral Link</span>
                        <strong>https://trade.equra.world/auth/sign-up?inviteCode=EW91953115</strong>
                    </div>
                    <div class="copy">⧉</div>
                </div>

                <button class="share">⤴ Share</button>
            </div>
        </div>

    </div>

    <?php
    include 'bottom-button.php';
    ?>
</body>

</html>
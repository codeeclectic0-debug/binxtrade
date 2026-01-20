<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Equra World</title>
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
            display: flex;
            align-items: center;
            justify-content: center;
            background: radial-gradient(circle at top right, #0b1734 0%, #020408 65%, #000 100%);
            color: #fff;
            cursor: default;
            user-select: none;
        }

        .main {
            width: 92%;
            max-width: 1100px;
            padding: 55px 50px 65px;
            border-radius: 22px;
            background: linear-gradient(180deg, rgba(255, 196, 60, .12), rgba(0, 0, 0, .9));
            border: 1px solid rgba(255, 196, 60, .45);
            box-shadow: 0 0 35px rgba(255, 196, 60, .2), inset 0 0 25px rgba(255, 196, 60, .08)
        }

        .header {
            text-align: center;
            margin-bottom: 45px
        }

        .header img {
            width: 78px;
            margin-bottom: 12px
        }

        .header h1 {
            font-size: 48px;
            font-weight: 700;
            color: #ffcc33;
            margin-bottom: 10px
        }

        .header p {
            font-size: 18px;
            opacity: .9
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 35px
        }

        .card {
            position: relative;
            padding: 32px 26px 40px;
            border-radius: 18px;
            background: linear-gradient(180deg, rgba(255, 196, 60, .14), rgba(0, 0, 0, .92));
            border: 1px solid rgba(255, 196, 60, .4);
            box-shadow: 0 0 22px rgba(255, 196, 60, .18), inset 0 0 18px rgba(255, 196, 60, .06);
            text-align: center
        }

        .card img {
            width: 56px;
            margin-bottom: 18px
        }

        .card h2 {
            font-size: 24px;
            margin-bottom: 6px
        }

        .card span {
            font-size: 14px;
            opacity: .85
        }

        .badge {
            position: absolute;
            bottom: 16px;
            left: 50%;
            transform: translateX(-50%);
            background: #ffcc33;
            color: #000;
            font-size: 12px;
            font-weight: 600;
            padding: 6px 16px;
            border-radius: 18px;
            box-shadow: 0 0 12px rgba(255, 196, 60, .8)
        }

        .fab {
            position: fixed;
            right: 28px;
            bottom: 28px;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: linear-gradient(135deg, #2cc7ff, #007bff);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 0 22px rgba(0, 140, 255, .7)
        }

        .fab img {
            width: 26px
        }

        @media(max-width:900px) {
            .cards {
                grid-template-columns: 1fr
            }

            .header h1 {
                font-size: 38px
            }
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="header">
            <img src="https://i.imgur.com/1R8ZQ1Y.png">
            <h1>Equra World</h1>
            <p>Choose your trading universe</p>
        </div>
        <div class="cards">
            <a href="crypto/home.php" style="text-decoration:none;color:white;">
                <div class="card">
                    <img src="https://i.imgur.com/BnQ9ZzY.png">
                    <h2>Crypto</h2>
                    <span>Digital currencies and blockchain assets</span>
                </div>
            </a>
            <a href="forex/home.php" style="text-decoration:none;color:white;">
                <div class="card">
                    <img src="https://i.imgur.com/6uZ8FqT.png">
                    <h2>Forex</h2>
                    <span>Foreign exchange currency pairs</span>
                </div>
            </a>
            <div class="card">
                <img src="https://i.imgur.com/9s9KQpF.png">
                <h2>Stocks</h2>
                <span>Equity markets and securities</span>
                <div class="badge">Coming Soon</div>
            </div>
        </div>
    </div>
    <div class="fab">
        <img src="https://i.imgur.com/6XcZJ7w.png">
    </div>
</body>

</html>
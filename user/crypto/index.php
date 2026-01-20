<?php
// Dummy data – replace with DB or API data as needed
$walletBalance = 0.00;
$trending = [
    ["name" => "Bitcoin", "pair" => "BTC/USDT", "price" => "93,342.2941", "usd" => "93342.2941378", "change" => "+0.8616%"],
    ["name" => "Ethereum", "pair" => "ETH/USDT", "price" => "3,219.2283", "usd" => "3219.2287751", "change" => "+1.9409%"],
    ["name" => "XRP", "pair" => "XRP/USDT", "price" => "2.354", "usd" => "2.35399867", "change" => "+10.4175%"],
    ["name" => "BNB", "pair" => "BNB/USDT", "price" => "905.6024", "usd" => "905.60242519", "change" => "+0.7421%"],
    ["name" => "Solana", "pair" => "SOL/USDT", "price" => "137.0073", "usd" => "137.0073121", "change" => "+2.3511%"],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Crypto Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: radial-gradient(circle at top, #1b1f27, #0e1117 60%);
            color: #ffffff;
            cursor: default;
            user-select: none;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }

        /* Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 700;
            font-size: 18px;
            color: #f5c542;
        }

        .profile-icon {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #2a2f3a;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }

        /* Wallet Card */
        .wallet-card {
            background: linear-gradient(180deg, #151922, #10141c);
            border: 1px solid rgba(245, 197, 66, 0.3);
            border-radius: 16px;
            padding: 20px;
            margin-bottom: 25px;
        }

        .wallet-title {
            color: #a0a4ab;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .wallet-amount {
            font-size: 32px;
            font-weight: 700;
        }

        .wallet-amount span {
            color: #f5c542;
            font-size: 16px;
            margin-left: 6px;
        }

        /* Quick Actions */
        .actions {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin-bottom: 30px;
        }

        .action-card {
            background: linear-gradient(180deg, #151922, #10141c);
            border: 1px solid rgba(245, 197, 66, 0.3);
            border-radius: 14px;
            padding: 20px 10px;
            text-align: center;
            transition: 0.3s;
            cursor: pointer;
        }

        .action-card:hover {
            border-color: #f5c542;
            transform: translateY(-3px);
        }

        .action-icon {
            width: 42px;
            height: 42px;
            margin: 0 auto 10px;
            border-radius: 50%;
            border: 1px solid #f5c542;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #f5c542;
            font-size: 18px;
        }

        .action-text {
            font-size: 14px;
            font-weight: 500;
        }

        /* Trending */
        .section-title {
            font-size: 20px;
            font-weight: 600;
            color: #f5c542;
            margin-bottom: 15px;
        }

        .table-wrapper {
            background: linear-gradient(180deg, #151922, #10141c);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 16px;
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: rgba(255, 255, 255, 0.03);
        }

        th,
        td {
            padding: 14px 16px;
            text-align: left;
        }

        th {
            font-size: 13px;
            color: #a0a4ab;
            font-weight: 500;
        }

        tr {
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        tr:last-child {
            border-bottom: none;
        }

        .coin-name {
            font-weight: 600;
            font-size: 15px;
        }

        .coin-pair {
            font-size: 12px;
            color: #a0a4ab;
            margin-top: 2px;
        }

        .price-main {
            font-weight: 600;
            font-size: 15px;
        }

        .price-usd {
            font-size: 12px;
            color: #a0a4ab;
            margin-top: 2px;
        }

        .change-positive {
            background: #0bbf7a;
            color: #ffffff;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            display: inline-block;
        }

        /* Bottom Nav (mobile style) */
        
    </style>
</head>

<body>

    <div class="container">

        <!-- Header -->
        <div class="header">
            <div class="logo">
                <div>⚡</div>
                <div>E QURA</div>
            </div>
            <div class="profile-icon">👤</div>
        </div>

        <!-- Wallet -->
        <div class="wallet-card">
            <div class="wallet-title">Est. Total Wallet</div>
            <div class="wallet-amount">
                <?php echo number_format($walletBalance, 2); ?>
                <span>INR</span>
            </div>
        </div>

        <!-- Actions -->
        <div class="actions">
            <a href="refer.php" style="text-decoration:none;color:white;">
                <div class="action-card">
                    <div class="action-icon">👥</div>
                    <div class="action-text">Refer2Earn</div>
                </div>
            </a>
            <div class="action-card">
                <div class="action-icon">🎁</div>
                <div class="action-text">Rewards</div>
            </div>
            <a href="trades.php" style="text-decoration:none;color:white;">
                <div class="action-card">
                    <div class="action-icon">📈</div>
                    <div class="action-text">Trades</div>
                </div>
            </a>
            <a href="support.php" style="text-decoration:none;color:white;">
                <div class="action-card">
                    <div class="action-icon">❓</div>
                    <div class="action-text">Support</div>
                </div>
            </a>
        </div>

        <!-- Trending -->
        <div class="section-title">Trending</div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Last Price</th>
                        <th style="text-align:right;">24h chg%</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($trending as $coin): ?>
                        <tr onclick="window.location.href='trade.php';" style="cursor:pointer;">
                            <td>
                                <div class="coin-name"><?php echo $coin['name']; ?></div>
                                <div class="coin-pair"><?php echo $coin['pair']; ?></div>
                            </td>
                            <td>
                                <div class="price-main"><?php echo $coin['price']; ?></div>
                                <div class="price-usd">$<?php echo $coin['usd']; ?></div>
                            </td>
                            <td style="text-align:right;">
                                <span class="change-positive"><?php echo $coin['change']; ?></span>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>

    <?php
    $page = 'crypto';
    include 'bottom-button.php';
    ?>
</body>

</html>
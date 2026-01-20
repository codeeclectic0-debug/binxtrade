<?php
$topTrending = [
    ["symbol"=>"ETHUSDT","price"=>"3,213.40","change"=>"-11.59 (-0.36%)"],
    ["symbol"=>"SOLUSDT","price"=>"137.52","change"=>"-0.38 (-0.28%)"],
    ["symbol"=>"PEPEUSDT","price"=>"0.00000680","change"=>"-0.00000020 (-2.86%)"],
];

$coins = [
    ["name"=>"Bitcoin","pair"=>"BTC/USDT","price"=>"93,382.0802","usd"=>"93382.08017806","change"=>"+0.9049%"],
    ["name"=>"Ethereum","pair"=>"ETH/USDT","price"=>"3,217.4661","usd"=>"3217.46609388","change"=>"+1.8971%"],
    ["name"=>"XRP","pair"=>"XRP/USDT","price"=>"2.3494","usd"=>"2.34935259","change"=>"+10.2430%"],
    ["name"=>"BNB","pair"=>"BNB/USDT","price"=>"905.5396","usd"=>"905.53962885","change"=>"+0.7763%"],
    ["name"=>"Solana","pair"=>"SOL/USDT","price"=>"137.7901","usd"=>"137.79005122","change"=>"+1.7713%"],
    ["name"=>"USDC","pair"=>"USDC/USDT","price"=>"1","usd"=>"0.99996495","change"=>"0.00%"],
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Trending</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            margin:0;
            background:radial-gradient(circle at top,#1b1f27,#0e1117 60%);
            font-family:Inter,system-ui;
            color:#fff;
        }
        .container{padding:20px 20px 90px 20px;max-width:1200px;margin:auto;}
        .top-title{color:#f5c542;font-weight:600;margin-bottom:12px;}
        .top-bar{display:flex;gap:30px;font-size:14px;margin-bottom:20px;}
        .neg{color:#ff4d4f;}
        .section-title{color:#f5c542;font-size:18px;font-weight:600;margin-bottom:10px;}
        .table-box{background:linear-gradient(180deg,#151922,#10141c);border-radius:16px;border:1px solid rgba(255,255,255,0.08);overflow:hidden;}
        table{width:100%;border-collapse:collapse;}
        th,td{padding:14px 16px;text-align:left;}
        th{color:#a0a4ab;font-size:13px;}
        tr{border-bottom:1px solid rgba(255,255,255,0.05);}
        tr:last-child{border:none;}
        .coin-name{font-weight:600;}
        .coin-pair{font-size:12px;color:#a0a4ab;margin-top:2px;}
        .price-main{font-weight:600;}
        .price-usd{font-size:12px;color:#a0a4ab;margin-top:2px;}
        .badge-green{background:#0bbf7a;padding:6px 12px;border-radius:20px;font-size:13px;font-weight:600;}
        .badge-red{background:#ff4d4f;padding:6px 12px;border-radius:20px;font-size:13px;font-weight:600;}
        .bottom-nav{
            position:fixed;bottom:15px;left:50%;transform:translateX(-50%);
            background:#151922;border-radius:30px;padding:10px 22px;
            display:flex;gap:28px;box-shadow:0 10px 30px rgba(0,0,0,0.4);
        }
        .nav-item{color:#a0a4ab;font-size:18px;text-decoration:none;}
        .nav-item.active{color:#f5c542;}
    </style>
</head>
<body>

<div class="container">

    <!-- Top Trending Strip -->
    <div class="top-title">Top Trending</div>
    <div class="top-bar">
        <?php foreach($topTrending as $t): ?>
            <div>
                <strong><?= $t['symbol'] ?></strong>
                <span class="neg"> <?= $t['price'] ?> <?= $t['change'] ?></span>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Trending Table -->
    <div class="section-title">Trending</div>

    <div class="table-box">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Last Price</th>
                    <th style="text-align:right;">24h chg%</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($coins as $c): ?>
                <tr>
                    <td>
                        <div class="coin-name"><?= $c['name'] ?></div>
                        <div class="coin-pair"><?= $c['pair'] ?></div>
                    </td>
                    <td>
                        <div class="price-main"><?= $c['price'] ?></div>
                        <div class="price-usd">$<?= $c['usd'] ?></div>
                    </td>
                    <td style="text-align:right;">
                        <span class="badge-green"><?= $c['change'] ?></span>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

<!-- Bottom Navigation -->
<div class="bottom-nav">
    <a href="new.php" class="nav-item">🏠</a>
    <a href="trending.php" class="nav-item active">📊</a>
    <a href="diamond.php" class="nav-item">💎</a>
    <a href="offers.php" class="nav-item">🏷️</a>
    <a href="wallet.php" class="nav-item">👛</a>
</div>

</body>
</html>

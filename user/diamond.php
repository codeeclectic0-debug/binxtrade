<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Refer & Earn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Force consistent font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #0e1117;
            color: #ffffff;
        }

        .page-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 30px 20px 110px;
        }

        /* ===== Top Card ===== */
        .top-card {
            background: linear-gradient(180deg, #1a1f2b, #141824);
            border-radius: 22px;
            padding: 30px 20px;
            text-align: center;
            margin-bottom: 25px;
        }

        .top-icons {
            display: flex;
            justify-content: center;
            gap: 12px;
            color: #f5c542;
            font-size: 18px;
            margin-bottom: 8px;
        }

        .top-amount {
            font-size: 28px;
            font-weight: 700;
        }

        .top-amount span {
            font-size: 14px;
            color: #f5c542;
            margin-left: 4px;
        }

        .top-sub {
            margin-top: 6px;
            font-size: 14px;
            color: #9aa0ab;
        }

        /* ===== Invitation Card ===== */
        .invite-card {
            background: linear-gradient(180deg, #1a1f2b, #141824);
            border-radius: 18px;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 30px;
        }

        .invite-left {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .gift-icon {
            width: 46px;
            height: 46px;
            border-radius: 12px;
            background: #f5c542;
            color: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .invite-title {
            font-size: 16px;
            font-weight: 600;
        }

        .invite-sub {
            font-size: 13px;
            color: #9aa0ab;
            margin-top: 2px;
        }

        .invite-link {
            background: #222837;
            border-radius: 10px;
            padding: 10px 12px;
            display: flex;
            align-items: center;
            gap: 10px;
            max-width: 60%;
        }

        .invite-link span {
            font-size: 13px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .copy-btn {
            cursor: pointer;
            color: #ff8c2a;
            font-size: 18px;
        }

        /* ===== Grid Cards ===== */
        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }

        .grid-card {
            background: linear-gradient(180deg, #1a1f2b, #141824);
            border-radius: 18px;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
            transition: all 0.25s ease;
        }

        .grid-card:hover {
            transform: translateY(-3px);
            background: linear-gradient(180deg, #20263a, #161b2a);
        }

        .grid-left {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .icon-box {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: #222837;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .grid-title {
            font-size: 15px;
            font-weight: 600;
        }

        .arrow {
            font-size: 22px;
            color: #9aa0ab;
        }

        /* ===== Bottom Nav ===== */
        .bottom-nav {
            position: fixed;
            bottom: 18px;
            left: 50%;
            transform: translateX(-50%);
            background: #1a1f2b;
            padding: 12px 26px;
            border-radius: 32px;
            display: flex;
            gap: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }

        .nav-item {
            font-size: 20px;
            color: #9aa0ab;
            text-decoration: none;
        }

        .nav-item.active {
            color: #f5c542;
        }

        /* ===== Responsive ===== */
        @media (max-width: 900px) {
            .grid {
                grid-template-columns: 1fr;
            }

            .invite-card {
                flex-direction: column;
                align-items: flex-start;
            }

            .invite-link {
                width: 100%;
                max-width: 100%;
            }
        }
    </style>
</head>

<body>

<div class="page-wrapper">

    <!-- Top Commission -->
    <div class="top-card">
        <div class="top-icons">🏅 ⭐</div>
        <div class="top-amount">0.00 <span>INR</span></div>
        <div class="top-sub">Yesterday's total commission</div>
    </div>

    <!-- Invitation -->
    <div class="invite-card">
        <div class="invite-left">
            <div class="gift-icon">🎁</div>
            <div>
                <div class="invite-title">Invitation Code</div>
                <div class="invite-sub">Share with friends to earn rewards</div>
            </div>
        </div>

        <div class="invite-link">
            <span id="inviteText">https://trade.equra.world/auth/sign-up?inviteCode=EW91953115</span>
            <div class="copy-btn" onclick="copyLink()">📋</div>
        </div>
    </div>

    <!-- Cards -->
    <div class="grid">
        <div class="grid-card" onclick="location.href='today_team.php'">
            <div class="grid-left">
                <div class="icon-box">👤+</div>
                <div class="grid-title">Today Register Team</div>
            </div>
            <div class="arrow">›</div>
        </div>

        <div class="grid-card" onclick="location.href='direct_team.php'">
            <div class="grid-left">
                <div class="icon-box">👥</div>
                <div class="grid-title">Direct Team Details</div>
            </div>
            <div class="arrow">›</div>
        </div>

        <div class="grid-card" onclick="location.href='income.php'">
            <div class="grid-left">
                <div class="icon-box">💲</div>
                <div class="grid-title">Income Details</div>
            </div>
            <div class="arrow">›</div>
        </div>

        <div class="grid-card" onclick="location.href='subordinate.php'">
            <div class="grid-left">
                <div class="icon-box">📈</div>
                <div class="grid-title">Subordinate Data</div>
            </div>
            <div class="arrow">›</div>
        </div>
    </div>

</div>

<!-- Bottom Nav -->
<div class="bottom-nav">
    <a href="new.php" class="nav-item">🏠</a>
    <a href="trending.php" class="nav-item">📊</a>
    <a href="refer.php" class="nav-item active">💎</a>
    <a href="offers.php" class="nav-item">🏷️</a>
    <a href="wallet.php" class="nav-item">👛</a>
</div>

<script>
function copyLink() {
    const text = document.getElementById("inviteText").innerText;
    navigator.clipboard.writeText(text);
    alert("Invitation link copied");
}
</script>

</body>
</html>

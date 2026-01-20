<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Live Trading</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Inter', sans-serif;
            background: radial-gradient(circle at top, #1b1f27, #0e1117 60%);
            color: #fff;
            cursor: default;
            user-select: none;
        }

        .top-bar {
            background: linear-gradient(180deg, #151922, #10141c);
            padding: 14px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }

        .live-info {
            font-size: 14px;
            color: #0bbf7a;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .balance {
            font-size: 14px;
            color: #a0a4ab;
        }

        .balance span {
            color: #f5c542;
            font-weight: 600;
        }

        .main-wrapper {
            display: flex;
            padding: 15px;
            gap: 15px;
        }

        .chart-section {
            flex: 3;
            background: #000;
            border-radius: 12px;
            overflow: hidden;
        }

        .chart-section iframe {
            width: 100%;
            height: 520px;
            border: none;
        }

        .trade-panel {
            flex: 1.2;
            background: linear-gradient(180deg, #151922, #10141c);
            border-radius: 14px;
            padding: 16px;
            border: 1px solid rgba(255,255,255,0.08);
        }

        .panel-title {
            font-size: 13px;
            color: #a0a4ab;
            margin-bottom: 6px;
        }

        .period-id {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .quick-amounts {
            display: flex;
            gap: 8px;
            margin-bottom: 12px;
        }

        .quick-amounts button {
            flex: 1;
            padding: 8px;
            border-radius: 8px;
            background: #1f2430;
            border: 1px solid rgba(255,255,255,0.08);
            color: #fff;
            cursor: pointer;
            font-size: 13px;
        }

        .quick-amounts button.active {
            background: #f5c542;
            color: #000;
            font-weight: 600;
        }

        .quantity-box {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 12px;
        }

        .quantity-box button {
            width: 36px;
            height: 36px;
            border-radius: 8px;
            border: none;
            background: #f5c542;
            color: #000;
            font-size: 18px;
            cursor: pointer;
        }

        .quantity-box input {
            flex: 1;
            height: 36px;
            background: #1f2430;
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 8px;
            color: #fff;
            text-align: center;
            font-size: 14px;
        }

        .multipliers {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 15px;
        }

        .multipliers button {
            flex: 1 1 30%;
            padding: 8px;
            border-radius: 8px;
            background: #1f2430;
            border: 1px solid rgba(255,255,255,0.08);
            color: #fff;
            cursor: pointer;
            font-size: 12px;
        }

        .multipliers button.active {
            background: #f5c542;
            color: #000;
            font-weight: 600;
        }

        .total-amount {
            background: #0e1117;
            border: 1px solid #f5c542;
            border-radius: 10px;
            padding: 10px;
            text-align: center;
            color: #f5c542;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .btn-up {
            flex: 1;
            padding: 12px;
            border-radius: 10px;
            background: #0bbf7a;
            color: #000;
            font-weight: 600;
            text-align: center;
            cursor: pointer;
        }

        .btn-down {
            flex: 1;
            padding: 12px;
            border-radius: 10px;
            background: #e54848;
            color: #fff;
            font-weight: 600;
            text-align: center;
            cursor: pointer;
        }

        .history-section {
            padding: 15px;
        }

        .history-title {
            font-size: 14px;
            color: #f5c542;
            margin-bottom: 10px;
        }

        .history-item {
            background: #151922;
            border-radius: 10px;
            padding: 10px 12px;
            margin-bottom: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
        }

        .history-item .down {
            color: #e54848;
            font-weight: 600;
        }

        .history-item .up {
            color: #0bbf7a;
            font-weight: 600;
        }

        @media(max-width: 900px) {
            .main-wrapper {
                flex-direction: column;
            }

            .chart-section iframe {
                height: 360px;
            }
        }
    </style>
</head>
<body>

<!-- TOP BAR -->
<div class="top-bar">
    <div class="live-info">● Live &nbsp; <span id="time"></span></div>
    <div class="balance">BALANCE: <span id="walletBalance">0.00 INR</span></div>
</div>

<!-- MAIN -->
<div class="main-wrapper">

    <!-- CHART -->
    <div class="chart-section">
        <iframe
            src="https://s.tradingview.com/widgetembed/?symbol=BINANCE:BTCUSDT&interval=1&theme=dark&style=1&timezone=Asia%2FKolkata&hideideas=1&withdateranges=1">
        </iframe>
    </div>

    <!-- TRADE PANEL -->
    <div class="trade-panel">

        <div class="panel-title">PERIOD ID</div>
        <div class="period-id" id="periodId"></div>

        <div class="panel-title">Balance</div>
        <div class="quick-amounts">
            <button class="active">1</button>
            <button>5</button>
            <button>10</button>
            <button>100</button>
        </div>

        <div class="panel-title">Quantity</div>
        <div class="quantity-box">
            <button id="qtyMinus">-</button>
            <input type="text" id="qtyInput" value="1">
            <button id="qtyPlus">+</button>
        </div>

        <div class="multipliers">
            <button class="active">X1</button>
            <button>X5</button>
            <button>X10</button>
            <button>X20</button>
            <button>X50</button>
            <button>X100</button>
        </div>

        <div class="total-amount" id="totalAmount">Total amount ₹1.00</div>

        <div class="action-buttons">
            <div class="btn-up" id="btnUp">Up ↑</div>
            <div class="btn-down" id="btnDown">Down ↓</div>
        </div>

    </div>
</div>

<!-- HISTORY -->
<div class="history-section" id="historySection">
    <div class="history-title">All History</div>
</div>

<script>
    // ===== LIVE TIME =====
    function updateTime() {
        const now = new Date();
        const options = { timeZone: 'Asia/Kolkata', hour12: false };
        document.getElementById('time').innerText =
            now.toLocaleTimeString('en-GB', options) + ' Asia/Kolkata';
    }
    setInterval(updateTime, 1000);
    updateTime();

    // ===== PERIOD ID =====
    document.getElementById('periodId').innerText = Date.now();

    // ===== VARIABLES =====
    let baseAmount = 1;
    let quantity = 1;
    let multiplier = 1;
    let walletBalance = 0.00;

    const amountButtons = document.querySelectorAll('.quick-amounts button');
    const qtyInput = document.getElementById('qtyInput');
    const qtyMinus = document.getElementById('qtyMinus');
    const qtyPlus = document.getElementById('qtyPlus');
    const multiplierButtons = document.querySelectorAll('.multipliers button');
    const totalAmountBox = document.getElementById('totalAmount');
    const upBtn = document.getElementById('btnUp');
    const downBtn = document.getElementById('btnDown');
    const historySection = document.getElementById('historySection');

    // ===== UPDATE TOTAL =====
    function updateTotal() {
        const total = baseAmount * quantity * multiplier;
        totalAmountBox.innerText = 'Total amount ₹' + total.toFixed(2);
    }

    // ===== BALANCE BUTTONS =====
    amountButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            amountButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            baseAmount = parseInt(btn.innerText);
            updateTotal();
        });
    });

    // ===== QUANTITY CONTROLS =====
    qtyMinus.addEventListener('click', () => {
        if (quantity > 1) {
            quantity--;
            qtyInput.value = quantity;
            updateTotal();
        }
    });

    qtyPlus.addEventListener('click', () => {
        quantity++;
        qtyInput.value = quantity;
        updateTotal();
    });

    qtyInput.addEventListener('input', () => {
        let val = parseInt(qtyInput.value);
        if (isNaN(val) || val < 1) val = 1;
        quantity = val;
        qtyInput.value = quantity;
        updateTotal();
    });

    // ===== MULTIPLIERS =====
    multiplierButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            multiplierButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            multiplier = parseInt(btn.innerText.replace('X', ''));
            updateTotal();
        });
    });

    // ===== TRADE ACTIONS =====
    upBtn.addEventListener('click', () => {
        executeTrade('UP');
    });

    downBtn.addEventListener('click', () => {
        executeTrade('DOWN');
    });

    function executeTrade(type) {
        const total = baseAmount * quantity * multiplier;

        addHistory(type, total);
    }

    // ===== ADD HISTORY =====
    function addHistory(type, total) {
        const item = document.createElement('div');
        item.className = 'history-item';

        const now = new Date();
        const timeStr = now.toLocaleString('en-IN', { timeZone: 'Asia/Kolkata' });

        item.innerHTML = `
            <div class="${type === 'UP' ? 'up' : 'down'}">${type}</div>
            <div>${timeStr}</div>
            <div>₹${total.toFixed(2)}</div>
        `;

        historySection.appendChild(item);
    }

    // INITIAL
    updateTotal();
</script>

</body>
</html>

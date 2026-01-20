<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Wallet Settings</title>
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
            padding: 26px 34px 120px;
        }

        /* HEADER */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 26px;
        }

        .wallet h4 {
            opacity: .7
        }

        .wallet h1 {
            margin-top: 6px;
            font-size: 26px
        }

        .wallet span {
            color: #f2b705;
            font-size: 14px
        }

        /* ACTIONS */
        .actions {
            display: flex;
            gap: 40px;
        }

        .action {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            color: #fff;
            cursor: pointer;
            transition: .2s;
        }

        .action:hover {
            color: #f2b705
        }

        .icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, .25);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        /* TABS */
        .tabs {
            display: flex;
            gap: 26px;
            margin-bottom: 18px;
        }

        .tab {
            padding-bottom: 6px;
            opacity: .6;
            cursor: pointer;
        }

        .tab.active {
            opacity: 1;
            color: #f2b705;
            border-bottom: 2px solid #f2b705;
        }

        .divider {
            height: 1px;
            background: rgba(255, 255, 255, .12);
            margin-bottom: 26px;
        }

        /* TAB CONTENT */
        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        /* FORM */
        .group {
            margin-bottom: 22px
        }

        .group label {
            display: block;
            margin-bottom: 8px
        }

        .input {
            position: relative
        }

        .input input {
            width: 100%;
            background: rgba(255, 255, 255, .04);
            border: 1px solid rgba(255, 255, 255, .15);
            border-radius: 12px;
            padding: 14px 46px 14px 16px;
            color: #fff;
        }

        .eye {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            opacity: .6;
        }

        .btn {
            margin-top: 18px;
            width: 100%;
            background: #f2b705;
            border: none;
            border-radius: 12px;
            padding: 16px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
        }

        /* WALLET TAB */
        .wallet-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 12px;
        }

        .wallet-header h2 {
            font-size: 22px;
        }

        .add-btn {
            background: #f2b705;
            border: none;
            padding: 10px 18px;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
        }

        .empty {
            margin-top: 16px;
            opacity: .7;
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
            color: #f2b705
        }

        /* MODAL */
        .modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, .6);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }

        .modal-overlay.active {
            display: flex;
        }

        .modal {
            width: 420px;
            background: linear-gradient(135deg, #1b2027, #0f141a);
            border-radius: 16px;
            padding: 22px;
            box-shadow: 0 0 30px rgba(0, 0, 0, .8);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 18px;
        }

        .modal-header h2 {
            font-size: 20px;
        }

        .close {
            cursor: pointer;
            opacity: .7;
            font-size: 18px;
        }

        .modal-body label {
            display: block;
            margin: 12px 0 6px;
            font-size: 14px;
            opacity: .8;
        }

        .modal-body input,
        .modal-body select {
            width: 100%;
            background: rgba(255, 255, 255, .05);
            border: 1px solid rgba(255, 255, 255, .15);
            border-radius: 10px;
            padding: 12px;
            color: #fff;
        }

        .otp-row {
            display: flex;
            gap: 10px;
        }

        .send-btn {
            background: transparent;
            border: 1px solid #f2b705;
            color: #f2b705;
            border-radius: 10px;
            padding: 0 18px;
            cursor: pointer;
        }

        .submit-btn {
            width: 100%;
            margin-top: 20px;
            background: #f2b705;
            border: none;
            border-radius: 12px;
            padding: 14px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
        }

        select {
            color: #fff;
            /* selected text */
            background: #1e252c;
        }

        select option {
            color: #000;
            /* dropdown list text */
            background: #fff;
        }
    </style>
</head>

<body>

    <div class="app">

        <!-- HEADER -->
        <div class="header">
            <div class="wallet">
                <h4>Est. Total Wallet</h4>
                <h1>0.00 <span>INR</span></h1>
            </div>

            <div class="actions">
                <a href="deposit.php" class="action">
                    <div class="icon">💳</div>Deposit
                </a>
                <a href="withdraw.php" class="action">
                    <div class="icon">🏧</div>Withdraw
                </a>
                <a href="p2p.php" class="action">
                    <div class="icon">🔁</div>P2P
                </a>
                <a href="#" class="action">
                    <div class="icon">➡️</div>Sign Out
                </a>
            </div>
        </div>

        <!-- TABS -->
        <div class="tabs">
            <div class="tab active" data-tab="password">Change Password</div>
            <div class="tab" data-tab="wallet">Manage Crypto Wallet</div>
        </div>

        <div class="divider"></div>

        <!-- CHANGE PASSWORD TAB -->
        <div id="password" class="tab-content active">
            <div class="group">
                <label>Current Password</label>
                <div class="input">
                    <input type="password">
                    <span class="eye">👁️</span>
                </div>
            </div>

            <div class="group">
                <label>New Password</label>
                <div class="input">
                    <input type="password">
                    <span class="eye">👁️</span>
                </div>
            </div>

            <div class="group">
                <label>Confirm Password</label>
                <div class="input">
                    <input type="password">
                    <span class="eye">👁️</span>
                </div>
            </div>

            <button class="btn">Change Password</button>
        </div>

        <!-- MANAGE CRYPTO WALLET TAB -->
        <div id="wallet" class="tab-content">
            <div class="wallet-header">
                <h2>Crypto Wallets</h2>
                <button class="add-btn" onclick="openModal()">Add</button>
            </div>
            <p class="empty">No crypto wallets</p>

            <!-- ADD WALLET MODAL -->
            <div id="walletModal" class="modal-overlay">
                <div class="modal">

                    <div class="modal-header">
                        <h2>Wallet Details</h2>
                        <span class="close" onclick="closeModal()">✕</span>
                    </div>

                    <div class="modal-body">

                        <label>Currency</label>
                        <select>
                            <option>Select a currency</option>
                            <option value="1">USDTBSC Tether USD (BEP20)</option>
                            <option value="2">USDTPOLYGON Tether USD (polygon)</option>
                        </select>

                        <label>Wallet Address</label>
                        <input type="text" placeholder="Wallet Address">

                        <label>OTP</label>
                        <div class="otp-row">
                            <input type="text" placeholder="e.g. 123456">
                            <button class="send-btn">Send</button>
                        </div>

                        <button class="submit-btn">Add Crypto Wallet</button>

                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- BOTTOM NAV -->
    <?php
    $page = 'wallet';
    include 'bottom-button.php';
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {

            document.querySelectorAll(".tab").forEach(tab => {
                tab.addEventListener("click", function () {

                    document.querySelectorAll(".tab").forEach(t => t.classList.remove("active"));
                    document.querySelectorAll(".tab-content").forEach(c => c.classList.remove("active"));

                    this.classList.add("active");
                    document.getElementById(this.dataset.tab).classList.add("active");

                });
            });

        });
    </script>

    <script>
        function openModal() {
            document.getElementById("walletModal").classList.add("active");
        }

        function closeModal() {
            document.getElementById("walletModal").classList.remove("active");
        }

        document.getElementById("walletModal").addEventListener("click", function (e) {
            if (e.target === this) {
                closeModal();
            }
        });

        document.addEventListener("keydown", function (e) {
            if (e.key === "Escape") {
                closeModal();
            }
        });
    </script>

</body>

</html>
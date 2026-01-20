<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Trades History</title>
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
            padding: 22px 28px;
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

        /* Filters */
        .filters {
            display: flex;
            align-items: center;
            gap: 16px;
            margin: 22px 0;
        }

        .input {
            background: rgba(255, 255, 255, .04);
            border: 1px solid rgba(255, 255, 255, .1);
            padding: 10px 14px;
            border-radius: 10px;
            min-width: 220px;
            color: #fff;
        }

        .status {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px 14px;
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, .1);
            background: rgba(255, 255, 255, .04);
        }

        .view {
            margin-left: auto;
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px 14px;
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, .1);
            background: rgba(255, 255, 255, .04);
        }

        /* Table */
        .table-wrap {
            border-radius: 14px;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, .08);
            background: rgba(255, 255, 255, .03);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: rgba(255, 255, 255, .05);
        }

        th,
        td {
            padding: 14px 16px;
            text-align: left;
            font-size: 14px;
            border-bottom: 1px solid rgba(255, 255, 255, .08);
        }

        th {
            color: #cfd8e3;
            font-weight: 600;
        }

        tbody tr:hover {
            background: rgba(255, 255, 255, .03);
        }

        .center {
            text-align: center;
        }

        .right {
            text-align: right;
        }

        /* Status badges */
        .badge {
            padding: 6px 12px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 600;
            display: inline-block;
        }

        .win {
            background: #12d18e;
            color: #000
        }

        .loss {
            background: #ff2d55
        }

        /* Footer */
        .footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 18px;
            font-size: 14px;
        }

        .pagination {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .page-btn {
            width: 34px;
            height: 34px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, .15);
            opacity: .6;
        }

        /* No results */
        .no-results {
            text-align: center;
            padding: 40px;
            opacity: .7;
        }
    </style>
</head>

<body>
    <div class="app">

        <!-- Header -->
        <div class="topbar">
            <div class="back">‹</div>
            <h1>Trades History</h1>
        </div>

        <!-- Filters -->
        <div class="filters">
            <div class="input">Pair</div>
            <div class="status">＋ Status</div>
            <div class="view">☰ View</div>
        </div>

        <!-- Table -->
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Pair</th>
                        <th>Price Direction</th>
                        <th>Start Price</th>
                        <th>End Price</th>
                        <th>CryptoTrade Amount</th>
                        <th>Win Amount</th>
                        <th>Tax</th>
                        <th>Net Amount</th>
                        <th>Status</th>
                        <th>Date & Time</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- Dummy Data Row -->
                    <tr>
                        <td>1</td>
                        <td>BTC/USDT</td>
                        <td>UP</td>
                        <td>95,120.50</td>
                        <td>95,241.20</td>
                        <td>$100</td>
                        <td>$180</td>
                        <td>$18</td>
                        <td>$162</td>
                        <td><span class="badge win">WIN</span></td>
                        <td>2026-01-20 14:32</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>ETH/USDT</td>
                        <td>DOWN</td>
                        <td>3,360.40</td>
                        <td>3,342.47</td>
                        <td>$80</td>
                        <td>$0</td>
                        <td>$0</td>
                        <td>$0</td>
                        <td><span class="badge loss">LOSS</span></td>
                        <td>2026-01-19 18:10</td>
                    </tr>

                    <!-- Empty State (remove rows above to show this only) -->
                    <!--
        <tr>
          <td colspan="11" class="no-results">No results.</td>
        </tr>
        -->
                </tbody>
            </table>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div>Showing 2 results</div>

            <div class="pagination">
                <span>Rows per page</span>
                <div class="input" style="min-width:60px;text-align:center">10</div>
                <span>Page 1 of 1</span>
                <div class="page-btn">«</div>
                <div class="page-btn">‹</div>
                <div class="page-btn">›</div>
                <div class="page-btn">»</div>
            </div>
        </div>

        <?php
        include 'bottom-button.php';
        ?>

    </div>
</body>

</html>
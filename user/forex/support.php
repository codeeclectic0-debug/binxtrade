<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Support Tickets</title>
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

        /* Top bar */
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
            gap: 14px;
            margin: 22px 0;
        }

        .filter {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px 14px;
            border-radius: 10px;
            border: 1px dashed rgba(255, 255, 255, .18);
            background: rgba(255, 255, 255, .03);
            font-size: 14px;
        }

        .actions {
            margin-left: auto;
            display: flex;
            gap: 12px;
        }

        .new-btn {
            background: #f2b705;
            color: #000;
            border: none;
            border-radius: 10px;
            padding: 10px 16px;
            font-weight: 600;
        }

        .view-btn {
            padding: 10px 14px;
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, .18);
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
            font-size: 14px;
            text-align: left;
            border-bottom: 1px solid rgba(255, 255, 255, .08);
        }

        th {
            font-weight: 600;
            color: #cfd8e3;
        }

        tbody tr:hover {
            background: rgba(255, 255, 255, .03);
        }

        .center {
            text-align: center
        }

        /* Empty */
        .no-results {
            padding: 40px;
            text-align: center;
            opacity: .7;
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
            gap: 10px;
        }

        .select {
            padding: 8px 12px;
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, .15);
            background: rgba(255, 255, 255, .04);
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
    </style>
</head>

<body>
    <div class="app">

        <!-- Header -->
        <div class="topbar">
            <div class="back">‹</div>
            <h1>Support Tickets</h1>
        </div>

        <!-- Filters -->
        <div class="filters">
            <div class="filter">＋ Status</div>
            <div class="filter">📅 Start date</div>
            <div class="filter">📅 End date</div>

            <div class="actions">
                <button class="new-btn">＋ New</button>
                <div class="view-btn">☰ View</div>
            </div>
        </div>

        <!-- Table -->
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>Ticket ID</th>
                        <th>Subject</th>
                        <th>Issue</th>
                        <th>Attachment</th>
                        <th>Response</th>
                        <th>Status</th>
                        <th>Date & Time</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- Empty state -->
                    <tr>
                        <td colspan="7" class="no-results">No results.</td>
                    </tr>

                    <!-- Dummy row (enable if needed) -->
                    <!--
        <tr>
          <td>#TK10231</td>
          <td>Withdrawal Issue</td>
          <td>Funds not credited</td>
          <td>—</td>
          <td>Pending</td>
          <td>Open</td>
          <td>2026-01-18 15:42</td>
        </tr>
        -->
                </tbody>
            </table>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div>Showing 0 results</div>

            <div class="pagination">
                <span>Rows per page</span>
                <div class="select">10</div>
                <span>Page 1 of 0</span>
                <div class="page-btn">«</div>
                <div class="page-btn">‹</div>
                <div class="page-btn">›</div>
                <div class="page-btn">»</div>
            </div>
        </div>

    </div>
</body>

</html>
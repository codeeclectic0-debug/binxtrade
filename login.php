<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Inter', sans-serif;
            background: radial-gradient(circle at top, #1b1f27, #0e1117 60%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
        }

        .login-card {
            width: 100%;
            max-width: 380px;
            background: linear-gradient(180deg, #151922, #10141c);
            border-radius: 16px;
            padding: 30px 25px;
            border: 1px solid rgba(255,255,255,0.08);
            box-shadow: 0 10px 40px rgba(0,0,0,0.4);
        }

        .login-title {
            text-align: center;
            font-size: 22px;
            font-weight: 600;
            color: #f5c542;
            margin-bottom: 5px;
        }

        .login-subtitle {
            text-align: center;
            font-size: 13px;
            color: #a0a4ab;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-size: 13px;
            color: #a0a4ab;
            display: block;
            margin-bottom: 6px;
        }

        .form-group input {
            width: 100%;
            height: 42px;
            background: #1f2430;
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 8px;
            color: #fff;
            padding: 0 12px;
            font-size: 14px;
            outline: none;
        }

        .form-group input::placeholder {
            color: #777;
        }

        .login-btn {
            width: 100%;
            height: 44px;
            background: #f5c542;
            border: none;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            color: #000;
            margin-top: 10px;
        }

        .login-btn:hover {
            background: #ffcf5c;
        }

        .footer-text {
            text-align: center;
            font-size: 12px;
            color: #777;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="login-card">
    <div class="login-title">Welcome Back</div>
    <div class="login-subtitle">Login to continue</div>

    <div class="form-group">
        <label>Email</label>
        <input type="text" placeholder="Enter your email">
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" placeholder="Enter your password">
    </div>

    <button class="login-btn" onclick="login()">Login</button>

    <div class="footer-text">
        © 2026 Binxtrade
    </div>
</div>

<script>
    function login() {
        // Static redirect – no validation
        window.location.href = "user/select-panel.php";
    }
</script>

</body>
</html>

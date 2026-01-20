<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Equra World</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      min-height: 100vh;
      background: radial-gradient(circle at top right, #0b1630, #000000 70%);
      display: flex;
      align-items: center;
      justify-content: center;
      color: #ffffff;
      cursor: default;
      user-select: none;
    }

    /* Main container */
    .container {
      width: 90%;
      max-width: 1000px;
      background: linear-gradient(180deg,
          rgba(255, 200, 60, 0.08),
          rgba(0, 0, 0, 0.85));
      border-radius: 20px;
      padding: 50px 40px 60px;
      border: 1px solid rgba(255, 200, 60, 0.4);
      box-shadow:
        0 0 30px rgba(255, 200, 60, 0.15),
        inset 0 0 20px rgba(255, 200, 60, 0.08);
      text-align: center;
    }

    /* Logo */
    .logo {
      margin-bottom: 20px;
    }

    .logo img {
      width: 70px;
      height: auto;
    }

    .brand {
      font-size: 14px;
      letter-spacing: 1px;
      opacity: 0.8;
      margin-top: 6px;
    }

    /* Title */
    h1 {
      font-size: 48px;
      font-weight: 700;
      color: #ffcc33;
      margin-top: 20px;
    }

    .subtitle {
      margin-top: 10px;
      font-size: 18px;
      opacity: 0.9;
    }

    /* Cards wrapper */
    .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 30px;
      margin-top: 50px;
    }

    /* Card */
    .card {
      position: relative;
      background: linear-gradient(180deg,
          rgba(255, 200, 60, 0.10),
          rgba(0, 0, 0, 0.9));
      border-radius: 18px;
      padding: 35px 25px;
      border: 1px solid rgba(255, 200, 60, 0.35);
      box-shadow:
        0 0 20px rgba(255, 200, 60, 0.12),
        inset 0 0 15px rgba(255, 200, 60, 0.05);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
    }

    .card:hover {
      transform: translateY(-6px);
      box-shadow:
        0 0 30px rgba(255, 200, 60, 0.25),
        inset 0 0 20px rgba(255, 200, 60, 0.1);
    }

    /* Disabled card */
    .card.disabled {
      opacity: 0.55;
      cursor: not-allowed;
    }

    .card.disabled:hover {
      transform: none;
      box-shadow:
        0 0 20px rgba(255, 200, 60, 0.12),
        inset 0 0 15px rgba(255, 200, 60, 0.05);
    }

    /* Icon */
    .icon {
      width: 60px;
      height: 60px;
      margin: 0 auto 20px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 14px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .icon img {
      width: 34px;
    }

    /* Card text */
    .card h2 {
      font-size: 24px;
      margin-bottom: 8px;
    }

    .card p {
      font-size: 14px;
      opacity: 0.85;
    }

    /* Coming soon badge */
    .badge {
      position: absolute;
      bottom: 18px;
      left: 50%;
      transform: translateX(-50%);
      background: #ffcc33;
      color: #000;
      font-size: 12px;
      font-weight: 600;
      padding: 6px 14px;
      border-radius: 20px;
      box-shadow: 0 0 10px rgba(255, 200, 60, 0.7);
    }

    /* Floating support button */
    .support {
      position: fixed;
      bottom: 25px;
      right: 25px;
      width: 52px;
      height: 52px;
      background: linear-gradient(135deg, #2bbcff, #0077ff);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 0 20px rgba(0, 150, 255, 0.6);
      cursor: pointer;
    }

    .support span {
      font-size: 22px;
    }

    @media (max-width: 600px) {
      h1 {
        font-size: 36px;
      }
    }
  </style>
</head>

<body>

  <div class="container">
    <!-- Logo -->
    <div class="logo">
      <!-- Replace with your actual logo -->
      <img src="https://dummyimage.com/100x100/00cfff/ffffff&text=E" alt="Equra Logo" />
      <div class="brand">E Q U R A<br><small>TRADE THE FUTURE</small></div>
    </div>

    <!-- Title -->
    <h1>Equra World</h1>
    <div class="subtitle">Choose your investment path</div>

    <!-- Cards -->
    <div class="cards">
      <!-- Trading -->
      <a href="select-market.php" style="text-decoration:none;color:white;">
        <div class="card">
          <div class="icon">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135706.png" alt="Trading" />
          </div>
          <h2>Trading</h2>
          <p>Crypto, Forex, and more</p>
        </div>
      </a>

      <!-- Fixed Deposit -->
      <div class="card disabled">
        <div class="icon">
          <img src="https://cdn-icons-png.flaticon.com/512/3135/3135706.png" alt="Fixed Deposit" />
        </div>
        <h2>Fixed Deposit</h2>
        <p>Secure, low-risk returns</p>
        <div class="badge">Coming Soon</div>
      </div>
    </div>
  </div>

  <!-- Support Button -->
  <div class="support">
    <span>✉️</span>
  </div>

</body>

</html>
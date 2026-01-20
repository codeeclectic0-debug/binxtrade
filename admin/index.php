<?php
session_start();

/* ---------------- ROLE SET (DUMMY LOGIN) ---------------- */
/*
 roles:
 superadmin
 doctor1
 doctor2
 doctor3
*/
$_SESSION['role'] = 'doctor2'; // change to test

$role = $_SESSION['role'];

/* ---------------- PERMISSIONS ---------------- */
$permissions = [
  "superadmin" => ["dashboard","users","doctors","reports","settings"],
  "doctor1"    => ["dashboard","patients","reports"],
  "doctor2"    => ["dashboard","patients"],
  "doctor3"    => ["dashboard"]
];

/* ---------------- STATS (DUMMY) ---------------- */
$stats = [
  "users" => 1245,
  "doctors" => 86,
  "patients" => 642,
  "reports" => 37
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>HBTS Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Inter',sans-serif;
}
body{
  background:#f4f6fb;
}

/* LAYOUT */
.dashboard{
  display:flex;
  min-height:100vh;
}

/* SIDEBAR */
.sidebar{
  width:250px;
  background:#fff;
  padding:24px;
  border-right:1px solid #eee;
}
.sidebar h2{
  color:#6c63ff;
  margin-bottom:30px;
}
.sidebar a{
  display:block;
  padding:12px 14px;
  margin-bottom:10px;
  border-radius:8px;
  color:#555;
  text-decoration:none;
  font-weight:500;
}
.sidebar a:hover,
.sidebar a.active{
  background:#f0f1ff;
  color:#6c63ff;
}

/* MAIN */
.main{
  flex:1;
  padding:24px;
}

/* TOPBAR */
.topbar{
  display:flex;
  justify-content:space-between;
  align-items:center;
  margin-bottom:30px;
}
.topbar h3{
  font-weight:600;
}
.profile{
  background:#6c63ff;
  color:#fff;
  padding:10px 14px;
  border-radius:50px;
  font-size:14px;
}

/* STATS */
.stats{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
  gap:20px;
  margin-bottom:30px;
}
.card{
  background:#fff;
  padding:20px;
  border-radius:14px;
  box-shadow:0 10px 20px rgba(0,0,0,0.05);
}
.card h4{
  color:#888;
  font-size:14px;
}
.card p{
  font-size:26px;
  font-weight:700;
  margin-top:10px;
}

/* CONTENT */
.content{
  display:grid;
  grid-template-columns:2fr 1fr;
  gap:20px;
}

/* TABLE */
table{
  width:100%;
  border-collapse:collapse;
}
table th, table td{
  padding:12px;
  border-bottom:1px solid #eee;
  font-size:14px;
}
table th{
  text-align:left;
  color:#888;
}
.status{
  padding:6px 10px;
  border-radius:20px;
  font-size:12px;
}
.active{
  background:#e6fff1;
  color:#0f9d58;
}
.inactive{
  background:#ffeaea;
  color:#d93025;
}

/* RESPONSIVE */
@media(max-width:900px){
  .content{
    grid-template-columns:1fr;
  }
  .sidebar{
    display:none;
  }
}
</style>
</head>

<body>

<div class="dashboard">

  <!-- SIDEBAR -->
  <aside class="sidebar">
    <h2>HBTS Admin</h2>
    <a class="active">Dashboard</a>
    <a>Users</a>
    <a>Doctors</a>
    <a>Reports</a>
    <a>Settings</a>
    <a>Logout</a>
  </aside>

  <!-- MAIN -->
  <div class="main">

    <!-- TOPBAR -->
    <div class="topbar">
      <h3>Admin Dashboard</h3>
      <div class="profile">Admin</div>
    </div>

    <!-- STATS -->
    <div class="stats">
      <div class="card">
        <h4>Total Users</h4>
        <p><?= $totalUsers ?></p>
      </div>
      <div class="card">
        <h4>Total Doctors</h4>
        <p><?= $totalDoctors ?></p>
      </div>
      <div class="card">
        <h4>Active Patients</h4>
        <p><?= $activePatients ?></p>
      </div>
      <div class="card">
        <h4>Reports</h4>
        <p><?= $reports ?></p>
      </div>
    </div>

    <!-- CONTENT -->
    <div class="content">

      <!-- CHART -->
      <div class="card">
        <h4>User Growth</h4>
        <canvas id="userChart" height="120"></canvas>
      </div>

      <!-- USERS TABLE -->
      <div class="card">
        <h4>Recent Users</h4>
        <table>
          <tr>
            <th>Name</th>
            <th>Status</th>
          </tr>
          <?php foreach($users as $u): ?>
          <tr>
            <td><?= $u['name'] ?></td>
            <td>
              <span class="status <?= strtolower($u['status']) ?>">
                <?= $u['status'] ?>
              </span>
            </td>
          </tr>
          <?php endforeach; ?>
        </table>
      </div>

    </div>

  </div>
</div>

<!-- CHART SCRIPT -->
<script>
const ctx = document.getElementById('userChart');
new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['Jan','Feb','Mar','Apr','May','Jun'],
    datasets: [{
      label: 'Users',
      data: [120,190,300,280,350,420],
      borderWidth: 3,
      fill: true,
      tension: 0.4
    }]
  }
});
</script>

</body>
</html>

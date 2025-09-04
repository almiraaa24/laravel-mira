<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Sederhana</title>
    <style>
        :root {
            --main-color: #DC3C22;
            --sidebar-bg: #DC3C22;
            --sidebar-active: var(--main-color);
            --sidebar-hover: #f5e6e2;
            --sidebar-active-text: #fff;
            --sidebar-text: #fff;
            --card-shadow: 0 2px 8px 0 #d1d9e6;
        }
        body {
            margin: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f7fa;
        }
        .sidebar {
            width: 220px;
            background: var(--sidebar-bg);
            height: 100vh;
            color: var(--sidebar-text);
            position: fixed;
            left: 0;
            top: 0;
            display: flex;
            flex-direction: column;
            transition: background 0.3s;
            box-shadow: 2px 0 8px #e8e8e8;
        }
        .sidebar h2 {
            margin: 0;
            padding: 24px 0 16px 24px;
            font-size: 1.4em;
            font-weight: bold;
            letter-spacing: 1.5px;
            color: var(--main-color);
            background: #fff;
            border-bottom: 1.5px solid #eee;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
            flex: 1;
        }
        .sidebar ul li {
            padding: 16px 24px;
            cursor: pointer;
            transition: background 0.2s, color 0.2s, font-weight 0.2s;
            font-size: 1.1em;
            border-left: 5px solid transparent;
            user-select: none;
        }
        .sidebar ul li:hover {
            background: var(--sidebar-hover);
            color: var(--main-color);
            font-weight: 500;
        }
        .sidebar ul li.active {
            background: var(--sidebar-active);
            color: var(--sidebar-active-text);
            border-left: 5px solid #fff;
            font-weight: bold;
        }
        .main-content {
            margin-left: 220px;
            padding: 32px 24px 32px 32px;
            transition: margin-left 0.3s;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
        }
        .header h1 {
            margin: 0;
            font-size: 2em;
            color: var(--main-color);
            letter-spacing: 1.5px;
        }
        .header span {
            font-size: 1.1em;
            color: #444;
        }
        .cards {
            display: flex;
            gap: 24px;
            margin-bottom: 32px;
            flex-wrap: wrap;
        }
        .card {
            background: #fff;
            border-radius: 12px;
            padding: 24px;
            box-shadow: var(--card-shadow);
            flex: 1;
            min-width: 180px;
            border-bottom: 4px solid var(--main-color);
            transition: transform 0.18s, box-shadow 0.18s;
        }
        .card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 8px 24px 0 #e0c5be;
        }
        .card h3 {
            margin: 0 0 12px 0;
            font-size: 1.1em;
            color: #888;
            font-weight: 500;
        }
        .card .value {
            font-size: 2em;
            font-weight: bold;
            color: var(--main-color);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 1px 4px 0 #e1e1e1;
        }
        th, td {
            padding: 14px 16px;
            text-align: left;
        }
        th {
            background: #f4f7fa;
            color: var(--main-color);
            font-weight: 600;
        }
        tr:nth-child(even) {
            background: #f9fbfd;
        }
        /* Responsive */
        @media (max-width: 900px) {
            .cards { flex-direction: column; }
            .main-content { padding: 16px 6px 16px 16px; }
        }
        @media (max-width: 600px) {
            .sidebar { width: 56px; }
            .sidebar h2 { display: none; }
            .sidebar ul li { padding: 13px 10px; font-size: 1em;}
            .main-content { margin-left: 56px; }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>My Dashboard</h2>
        <ul id="menu">
            <li class="active">Dashboard</li>
            <li>Users</li>
            <li>Reports</li>
            <li>Settings</li>
        </ul>
    </div>
    <div class="main-content">
        <div class="header">
            <h1>Dashboard</h1>
            <span>Welcome, <b>Almira</b>!</span>
        </div>
        <div class="cards">
            <div class="card">
                <h3>Total Users</h3>
                <div class="value" id="usersCount">3</div>
            </div>
            <div class="card">
                <h3>Active Sessions</h3>
                <div class="value" id="sessionsCount">40</div>
            </div>
            <div class="card">
                <h3>Revenue</h3>
                <div class="value">RP.400</div>
            </div>
        </div>
        <h2 style="margin-bottom:16px; color:var(--main-color);">Recent Users</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Registered</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Almira Aulia</td>
                    <td>almira@mail.com</td>
                    <td>2025-09-01</td>
                </tr>
                <tr>
                    <td>Budi Santoso</td>
                    <td>budi.santoso@mail.com</td>
                    <td>2025-09-03</td>
                </tr>
                <tr>
                    <td>Dewi Lestari</td>
                    <td>dewi.lestari@mail.com</td>
                    <td>2025-09-04</td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        // Sidebar menu click logic to change active state
        document.querySelectorAll('#menu li').forEach(function(li) {
            li.addEventListener('click', function() {
                document.querySelectorAll('#menu li').forEach(l => l.classList.remove('active'));
                this.classList.add('active');
            });
        });
        // Demo dynamic data
        document.getElementById('usersCount').textContent = 123;
        document.getElementById('sessionsCount').textContent = 40;
    </script>
</body>
</html>
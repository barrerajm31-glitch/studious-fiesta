<!DOCTYPE html>
<html>
<head>
    <title>About Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #eef2f3, #dfe9f3);
        }

        .about-card {
            max-width: 750px;
            margin: 80px auto;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            background: #fff;
        }

        .about-title {
            font-weight: bold;
        }

        .info-block {
            margin-bottom: 18px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        .label {
            font-weight: 600;
            color: #333;
            font-size: 15px;
        }

        .value {
            color: #555;
            font-size: 14px;
            margin-left: 5px;
        }

        .btn-custom {
            border-radius: 30px;
            padding: 8px 20px;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="card about-card p-4">

        <h2 class="about-title text-center mb-4">About the Project</h2>

        <div class="info-block">
            <span class="label">📌 Project Title:</span><br>
            <span class="value">Contact Management System</span>
        </div>

        <div class="info-block">
            <span class="label">🎯 Purpose:</span><br>
            <span class="value">
                To manage and organize contact records efficiently using a simple and user-friendly system.
            </span>
        </div>

        <div class="info-block">
            <span class="label">⚙️ Features:</span><br>
            <span class="value">
                 • Add new contacts<br>
                •  Edit existing records<br>
                •  Delete contacts<br>
                •  Display and manage contact list
            </span>
        </div>

        <div class="info-block">
            <span class="label">💻 Technologies Used:</span><br>
            <span class="value">
                PHP (Backend), MySQL (Database), Bootstrap (UI Design), XAMPP (Server), Infinity free.com (Development)
            </span>
        </div>

        <div class="text-center">
            <a href="index.php" class="btn btn-primary btn-custom mt-3">
                ← Back
            </a>
        </div>

    </div>
</div>

</body>
</html>
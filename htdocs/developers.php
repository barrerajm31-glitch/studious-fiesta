<!DOCTYPE html>
<html>
<head>
    <title>Developers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #eef2f3, #dfe9f3);
        }

        .dev-container {
            max-width: 1000px;
            margin: 80px auto;
        }

        .dev-card {
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            padding: 40px 25px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: #fff;
        }

        .dev-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.15);
        }

        .dev-img {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 20px;
            border: 5px solid #0d6efd;
        }

        .role {
            color: #6c757d;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .desc {
            font-size: 13px;
            color: #555;
        }
    </style>
</head>

<body>

<div class="container dev-container text-center">

    <h2 class="fw-bold">Developers</h2>
    <p class="text-muted mb-5">Meet the team behind the system</p>

    <div class="row g-5 justify-content-center">

        <!-- Developer 1 -->
        <div class="col-md-4">
            <div class="dev-card">
                <img src="images/gab.jpg" class="dev-img">
                <h5>Gabrielle Christian Aquino</h5>
                <p class="role">Frontend Design</p>
                <p class="desc">
                    Designed the user interface, layout, and styling of the system using HTML, CSS, and Bootstrap to ensure a clean and user-friendly experience.
                </p>
            </div>
        </div>

        <!-- Developer 2 -->
        <div class="col-md-4">
            <div class="dev-card">
                <img src="images/jm.jpeg" class="dev-img">
                <h5>John Michael Barrera</h5>
                <p class="role">Backend / Database</p>
                <p class="desc">
                    Developed the system logic, handled database connections, and ensured proper data processing and storage using backend technologies.
                </p>
            </div>
        </div>

        <!-- Developer 3 -->
        <div class="col-md-4">
            <div class="dev-card">
                <img src="images/jerwin.jpg" class="dev-img">
                <h5>Jerwin Cocole</h5>
                <p class="role">Documentation</p>
                <p class="desc">
                    Prepared system documentation, reports, and user guides, ensuring all of the features and the processes are clearly explained.                                 
                </p>
            </div>
        </div>

    </div>

    <a href="index.php" class="btn btn-primary px-4 py-2 mt-4 shadow-sm">
        ← Back
    </a>

</div>

</body>
</html>
                                        
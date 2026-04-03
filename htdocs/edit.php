<?php
include 'config.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM contacts WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Contact</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
body{
    background-color:#f4f6f9;
}
.card{
    border:none;
    border-radius:12px;
    box-shadow:0 4px 12px rgba(0,0,0,0.08);
}

.form-control{
    background-color:#ffffff;     
    border:2px solid #dee2e6;    
    border-radius:8px;
    padding:10px;
    transition:all 0.25s ease;
}

.form-control:hover{
    border-color:#86b7fe;
}

.form-control:focus{
    border-color:#0d6efd;
    box-shadow:0 0 0 0.2rem rgba(13,110,253,.15);
    background-color:#fff;
}

.form-label{
    font-weight:600;
    color:#495057;
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-primary mb-4">
    <div class="container">
        <span class="navbar-brand fw-bold">
            <i class="bi bi-person-lines-fill"></i>
            Contact Management System
        </span>

        <a href="index.php" class="btn btn-light btn-sm">
            <i class="bi bi-arrow-left"></i> Back
        </a>
    </div>
</nav>

<div class="container">

<!-- EDIT CARD -->
<div class="card">
    <div class="card-header fw-bold">
        <i class="bi bi-pencil-square"></i> Edit Contact
    </div>

    <div class="card-body">

        <form action="update.php" method="POST">

            <input type="hidden" name="id" value="<?= $row['id']; ?>">

            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control"
                        value="<?= $row['name']; ?>" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control"
                        value="<?= $row['email']; ?>" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control"
                        value="<?= $row['phone']; ?>" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Address</label>
                    <input type="text" name="address" class="form-control"
                        value="<?= $row['address']; ?>" required>
                </div>

            </div>

            <!-- BUTTONS -->
            <div class="d-flex gap-2 mt-4 justify-content-end">

                <button type="submit" class="btn btn-success">
                    <i class="bi bi-check-circle"></i> Update
                </button>

                <a href="index.php"
                   class="btn btn-outline-secondary"
                   onclick="return confirm('Discard changes?')">
                    <i class="bi bi-x-circle"></i> Cancel
                </a>

            </div>

        </form>

    </div>
</div>

</div>
</body>
</html>
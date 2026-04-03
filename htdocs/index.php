<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Management System</title>

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

    /* INPUT FIELDS */
    input, textarea {
        background-color: #ffffff;
        border: 1px solid #ced4da;
        border-radius: 8px;
        padding: 10px;
        width: 100%;
        transition: all 0.2s ease-in-out;
        box-shadow: inset 0 1px 2px rgba(0,0,0,0.05);
    }

    input::placeholder, textarea::placeholder {
        color: #999;
    }

    input:focus, textarea:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 6px rgba(13,110,253,0.3);
        outline: none;
    }

    .btn-primary {
        background-color: #0d6efd;
        border: none;
        border-radius: 8px;
        padding: 10px 16px;
        transition: 0.2s;
    }

    .btn-primary:hover {
        background-color: #0b5ed7;
    }
       
.modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.4);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 999;
}

.modal-box {
    background: #fff;
    padding: 20px 25px;
    border-radius: 12px;
    width: 300px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.modal-buttons {
    margin-top: 15px;
    display: flex;
    justify-content: space-between;
}

.btn-danger {
    background: #dc3545;
    color: #fff;
    border: none;
    padding: 8px 15px;
    border-radius: 6px;
}

.btn-secondary {
    background: #6c757d;
    color: #fff;
    border: none;
    padding: 8px 15px;
    border-radius: 6px;
}

.btn-danger:hover {
    background: #bb2d3b;
}

.btn-secondary:hover {
    background: #5a6268;
}
       
       .action-buttons {
    display: flex;
    gap: 6px;
    justify-content: center;
}

/* mobile css option design */
@media (max-width: 576px) {
    .action-buttons {
        flex-direction: column;
        gap: 5px;
    }

    .action-buttons .btn {
        width: 100%;
        padding: 6px;
        font-size: 12px;
    }
}
       
</style>
</head>

<body>

<!-- navigation bar on top -->
<nav class="navbar navbar-dark bg-primary mb-4">
    <div class="container">
        <span class="navbar-brand fw-bold">
            <i class="bi bi-person-lines-fill"></i>
            Contact Management System
        </span>

        <div>
            <i class="fa-regular fa-circle-info"></i>
            <a href="about-project.php" class="btn btn-light btn-sm">About</a>
            <a href="developers.php" class="btn btn-light btn-sm">Developers</a>
        </div>
    </div>
</nav>

<div class="container">

<!-- ADD CONTACT CARD -->
<div class="card mb-4">
    <div class="card-header fw-bold">
        <i class="bi bi-person-plus"></i> Add New Contact
    </div>

    <div class="card-body">
        <form action="add.php" method="POST">
            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" required>
                </div>

                <div class="col-12 text-end">
                    <button class="btn btn-primary px-4">
                        <i class="bi bi-plus-circle"></i> Add Contact
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>


<!-- CONTACT LIST CARD -->
<div class="card">
    <div class="card-header fw-bold">
        <i class="bi bi-table"></i> Contact List
    </div>

    <div class="card-body">
        
		<div class="mb-3">
   			 <input type="text" id="searchInput" class="form-control shadow-sm" placeholder="🔍 Search by name, email, phone...">
		</div>
        
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">

                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                $result = mysqli_query($conn, "SELECT * FROM contacts");

                while($row = mysqli_fetch_assoc($result)){
                    echo "
                    <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['phone']}</td>
                        <td>{$row['address']}</td>
                       <td class='text-center'>
    <div class='action-buttons'>
        <a href='edit.php?id={$row['id']}' class='btn btn-warning btn-sm'>
            <i class='bi bi-pencil'></i>
        </a>
        <a href='delete.php?id={$row['id']}' 
           class='btn btn-danger btn-sm'
           onclick='return confirm(\"Delete this record?\")'>
            <i class='bi bi-trash'></i>
        </a>
    </div>
</td>
                    </tr>";
                }
                ?>
                </tbody>

            </table>
        </div>

    </div>
</div>

</div>
    <div id="deleteModal" class="modal-overlay">
    <div class="modal-box">
        <p>Delete this record?</p>
        <div class="modal-buttons">
            <button id="confirmDelete" class="btn btn-danger">OK</button>
            <button id="cancelDelete" class="btn btn-secondary">Cancel</button>
        </div>
    </div>
</div>
    
    <script>
	document.getElementById("searchInput").addEventListener("keyup", function() {
    let filter = this.value.toLowerCase();
    let rows = document.querySelectorAll("tbody tr");

    rows.forEach(row => {
        let text = row.textContent.toLowerCase();
        row.style.display = text.includes(filter) ? "" : "none";
   		 });
	});
	</script>
    
</body>
</html>
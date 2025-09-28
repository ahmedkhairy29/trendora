<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>

<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center mb-4">Admin Panel</h4>
        <a href="#" class="active"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
        <a href="#"><i class="bi bi-folder-fill me-2"></i> Categories</a>
        <a href="#"><i class="bi bi-box-seam me-2"></i> Products</a>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-outline-light btn-sm"><i class="bi bi-box-arrow-right"></i> Logout</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex-grow-1 content-area">
        <h2 class="fw-bold">👋 Welcome, Admin</h2>
        <p class="lead text-muted">This is your admin dashboard. Use the sidebar to manage categories and products.</p>

        <div class="row mt-4 g-4">
            <!-- Categories Card -->
            <div class="col-md-6">
                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-body text-center">
                        <h5 class="text-primary fw-bold">
                            <i class="bi bi-folder-fill me-2"></i> Categories
                        </h5>
                        <h2 class="fw-bolder text-primary">0</h2>
                        <a href="#" class="btn btn-primary btn-sm mt-2">Manage Categories</a>
                    </div>
                </div>
            </div>

            <!-- Products Card -->
            <div class="col-md-6">
                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-body text-center">
                        <h5 class="text-success fw-bold">
                            <i class="bi bi-box-seam me-2"></i> Products
                        </h5>
                        <h2 class="fw-bolder text-success">0</h2>
                        <a href="#" class="btn btn-success btn-sm mt-2">Manage Products</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

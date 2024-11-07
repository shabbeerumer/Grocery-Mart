<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanban - Create an account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container-fluid vh-100">
        <div class="row h-100">
            <div class="col-md-6 d-flex align-items-center justify-content-center bg-white">
                <img src="path_to_kanban_logo.png" alt="Kanban" class="img-fluid" style="max-width: 300px;">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="w-75 mx-auto">
                    <img src="path_to_small_kanban_logo.png" alt="Kanban" class="mb-4" style="width: 40px;">
                    <h1 class="h3 mb-3">Create an account</h1>
                    <p class="text-muted mb-4">Start your 30-day free trial.</p>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name*</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email*</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password*</label>
                            <input type="password" class="form-control" id="password" placeholder="Create a password" required>
                            <div class="form-text">Must be at least 8 characters.</div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mb-3">Get started</button>
                    </form>
                    <button class="btn btn-outline-secondary w-100 mb-3">
                        <img src="path_to_google_icon.png" alt="Google" class="me-2" style="width: 20px;">
                        Sign up with Google
                    </button>
                    <p class="text-center text-muted">
                        Already have an account? <a href="#" class="text-decoration-none">Log in</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanban - Log in to your account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container-fluid vh-100">
        <div class="row h-100">
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <img src="path_to_kanban_logo.png" alt="Kanban" class="img-fluid" style="max-width: 300px;">
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center bg-white">
                <div class="w-75">
                    <img src="path_to_small_kanban_logo.png" alt="Kanban" class="mb-4" style="width: 40px;">
                    <h1 class="h3 mb-3">Log in to your account</h1>
                    <p class="text-muted mb-4">Welcome back! Please enter your details.</p>
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="••••••••">
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember">
                                <label class="form-check-label" for="remember">Remember for 30 days</label>
                            </div>
                            <a href="#" class="text-primary text-decoration-none">Forgot password</a>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mb-3">Sign in</button>
                        <button type="button" class="btn btn-outline-secondary w-100 d-flex align-items-center justify-content-center">
                            <img src="path_to_google_icon.png" alt="Google" class="me-2" style="width: 20px;">
                            Sign in with Google
                        </button>
                    </form>
                    <p class="text-center mt-4 text-muted">
                        Don't have an account? <a href="#" class="text-primary text-decoration-none">Sign up</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
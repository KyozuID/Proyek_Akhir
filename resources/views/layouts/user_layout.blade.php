<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Your custom CSS -->
    <style>
        /* Add your custom CSS styles here */
        /* Example:
        body {
            background-color: #f8f9fa;
        }
        */
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-home mr-2"></i>User Dashboard</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <!-- Info -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.info') }}"><i class="fas fa-info-circle mr-1"></i>Info</a>
                    </li>
                    <!-- Data Siswa -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.index') }}"><i class="fas fa-users mr-1"></i>Data Siswa</a>
                    </li>
                    <!-- Logout Button -->
                    <li class="nav-item">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link"><i class="fas fa-sign-out-alt mr-1"></i>Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Your custom JavaScript -->
    <script>
        // Add your custom JavaScript code here
        // Example:
        /*
        $(document).ready(function(){
            console.log("Document is ready");
        });
        */
    </script>
</body>
</html>

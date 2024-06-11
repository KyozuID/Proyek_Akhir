<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .register-container {
            background-color: #fff; /* Ubah warna latar belakang ke putih */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        .register-container h1 {
            font-weight: 500;
            margin-bottom: 20px;
        }
        .register-container form {
            display: flex;
            flex-direction: column;
        }
        .register-container input[type="text"],
        .register-container input[type="email"],
        .register-container input[type="password"] {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .register-container button {
            padding: 10px;
            background-color: #4285f4; /* Ubah warna tombol ke biru */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
        }
        .register-container button:hover {
            background-color: #357ae8; /* Ubah warna tombol saat dihover ke biru lebih gelap */
        }
        .register-container .login-link {
            margin-top: 10px;
            font-size: 0.9em;
        }
        .register-container .login-link a {
            color: #4285f4; /* Ubah warna tautan ke biru */
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h1>Register</h1>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            <button type="submit">Register</button>
        </form>
        <div class="login-link">
            <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
        </div>
    </div>
</body>
</html>

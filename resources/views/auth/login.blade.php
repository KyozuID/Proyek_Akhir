<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        .login-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        .login-container h1 {
            font-weight: 500;
            margin-bottom: 20px;
            color: #333; /* Ubah warna judul menjadi abu-abu lebih gelap */
        }
        .login-container form {
            display: flex;
            flex-direction: column;
        }
        .login-container input[type="email"],
        .login-container input[type="password"] {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            color: #333; /* Ubah warna teks input */
        }
        .login-container button {
            padding: 10px;
            background-color: #007bff; /* Ubah warna tombol menjadi biru */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
        }
        .login-container button:hover {
            background-color: #0056b3; /* Ubah warna tombol saat dihover menjadi biru lebih gelap */
        }
        .login-container .register-link {
            margin-top: 10px;
            font-size: 0.9em;
        }
        .login-container .register-link a {
            color: #007bff; /* Ubah warna tautan menjadi biru */
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" name="email" placeholder="Email" required autofocus>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <div class="register-link">
            <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
        </div>
    </div>
</body>
</html>

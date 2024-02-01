<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 700px;
        }

        .logo-container img{
            flex: 1;
            padding: 20px;
            width :100%;
            max-width: 300px; 
            height : auto;
            position: center;
        }

        .form-container {
            flex: 1;
            padding: 20px;
        }

        .upperhead {
            text-align: center;
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            font-size: 14px;
            color: #333;
        }

        input {
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo-container">
            <img src="img/KochengBook.png" alt="Logo">
        </div>

        <div class="form-container">
            <div class="upperhead">
                <h3>Hallo, Selamat Datang</h3>
            </div>

            <form onsubmit="return checkLogin()">
                <label for="Username">Username</label>
                <input type="text" id="username" required>

                <label for="pass">Password</label>
                <input type="password" id="password" required>

                <input type="submit" value="Login">
            </form>
        </div>
    </div>

    <script>
        function checkLogin() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            if (username === 'Rangga' && password === '1234') {
                alert('Anda Berhasil Login');
                window.location.href = 'Perpustakaan.html';
                return false;
            } else {
                alert('Username atau password tidak valid');
                return false;
            }
        }
    </script>
</body>
</html>

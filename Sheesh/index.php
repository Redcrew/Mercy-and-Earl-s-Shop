<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            width: 320px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            text-align: center;
        }

        .name-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .line {
            width: 100%;
            height: 2px;
            background: #4facfe;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"] {
            width: 93%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background: #4facfe;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background: #00c6ff;
        }

        .message {
            margin-top: 15px;
            font-weight: bold;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }
    </style>

</head>
<body>

<div class="login-box">

    <!-- Your Name -->
    <div class="name-title">Earl John S. Parami</div>
    <div class="line"></div>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>

        <input type="submit" name="login" value="Login">
    </form>

    <?php
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $correct_username = "admin";
        $correct_password = "12345";

        if ($username === $correct_username && $password === $correct_password) {
            echo "<div class='message success'>Welcome, Earl John S. Parami!</div>";
        } else {
            echo "<div class='message error'>Invalid username or password.</div>";
        }
    }
    ?>

</div>

</body>
</html>
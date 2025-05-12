<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Precconnect to Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Monda:wght@400..700&family=Tagesschrift&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minion Log-In</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="imgs/favicon.png" type="image/x-icon">
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="processLogin.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
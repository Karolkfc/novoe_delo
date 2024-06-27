<?php
session_start();
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['firstname'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE firstname='$firstname'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['firstname'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['login_success'] = true; // Установка сессионной переменной для успешной авторизации
            header('Location: success.php');
            exit();
        } else {
            echo "Неправильный пароль";
        }
    } else {
        echo "Пользователь с таким именем не найден";
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход - ООО "Новое дело"</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">ООО "Новое дело"</div>
        <nav>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="register.php">Регистрация</a></li>
            </ul>
        </nav>
    </header>
    <section class="login-section">
    <h1>Вход</h1>
    <form action="login.php" method="post" class="login-form">
        <label for="firstname">Имя:</label>
        <input type="text" id="firstname" name="firstname" required><br>
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required><br>
        <button type="submit">Войти</button>
    </form>
</section>
    <footer>
        <div>Контакты: +7 (123) 456-7890</div>
    </footer>
</body>
</html>

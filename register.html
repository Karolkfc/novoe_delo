<?php
session_start();
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $passport = $_POST['passport'];
    $phone = $_POST['phone'];
    $birthdate = $_POST['birthdate'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $birthdate = date('Y-m-d', strtotime($birthdate));

    if ($password == $confirm_password) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $role = 'user'; // Установка роли user
        $query = "INSERT INTO users (lastname, firstname, middlename, passport, phone, birthdate, password, role) VALUES ('$lastname', '$firstname', '$middlename', '$passport', '$phone', '$birthdate', '$hashed_password', '$role')";
        mysqli_query($conn, $query);
        $_SESSION['registration_success'] = true; 
        header('Location: success.php');
        exit();
    } else {
        echo "Пароли не совпадают";
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация - ООО "Новое дело"</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">ООО "Новое дело"</div>
        <nav>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="login.php">Вход</a></li>
            </ul>
        </nav>
    </header>
    <section class="register-section">
    <h1>Регистрация</h1>
    <form action="register.php" method="post" class="register-form">
        <div class="form-row">
            <div class="form-group">
                <label for="lastname">Фамилия:</label>
                <input type="text" id="lastname" name="lastname" required>
            </div>
            <div class="form-group">
                <label for="firstname">Имя:</label>
                <input type="text" id="firstname" name="firstname" required>
            </div>
            <div class="form-group">
                <label for="middlename">Отчество:</label>
                <input type="text" id="middlename" name="middlename" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="passport">Паспортные данные:</label>
                <input type="text" id="passport" name="passport" required>
            </div>
            <div class="form-group">
                <label for="phone">Телефон:</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="birthdate">Дата рождения:</label>
                <input type="date" id="birthdate" name="birthdate" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Повтор пароля:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
        </div>
        <button type="submit">Зарегистрироваться</button>
    </form>
</section>

    <footer>
        <div>Контакты: +7 (123) 456-7890</div>
    </footer>
</body>
</html>

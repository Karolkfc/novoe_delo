<?php
session_start();

$message = '';

if (isset($_SESSION['registration_success'])) {
    $message = 'Вы успешно зарегистрированы';
    unset($_SESSION['registration_success']);
    $redirect = 'login.php';
} elseif (isset($_SESSION['login_success'])) {
    $message = 'Вы успешно авторизированы';
    unset($_SESSION['login_success']);
    $redirect = 'index.php';
} else {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Успешно</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .message-box {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #004d00; /* Темно-зеленый */
            color: white;
            padding: 20px;
            border-radius: 10px;
            z-index: 1000;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            font-size: 18px;
            width: 80%;
            max-width: 400px;
        }
    </style>
</head>
<body>
    <div class="message-box">
        <?php echo $message; ?>
    </div>
    <script>
        setTimeout(function() {
            window.location.href = '<?php echo $redirect; ?>';
        }, 3000);
    </script>
</body>
</html>

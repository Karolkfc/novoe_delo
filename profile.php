<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет - ООО "Новое дело"</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">ООО "Новое дело"</div>
        <nav>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="about.php">О компании</a></li>
                <li><a href="news.php">Новости</a></li>
                <li><a href="contact.php">Контакты</a></li>
                <li><a href="logout.php">Выход</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <h1>Личный кабинет</h1>
        <p>Добро пожаловать, <?php echo $_SESSION['username']; ?>!</p>

        <?php if ($_SESSION['role'] == 'admin'): ?>
            <h2>Административные функции</h2>
            <ul class="admin-list">
                <li><a href="failures.php">Контроль устранения сбоев</a></li>
                <li><a href="training.php">Обучение сотрудников</a></li>
                <li><a href="archive.php">Ведение архива</a></li>
                <li><a href="inventory.php">Планирование запасов</a></li>
                <li><a href="equipment.php">Прием оборудования</a></li>
            </ul>
        <?php elseif ($_SESSION['role'] == 'user'): ?>
            <h2>Пользовательские функции</h2>
            <ul class="admin-list">
                <li><a href="create_course.php">Создание образовательных курсов</a></li>
                <li><a href="order_services.php">Заказ образовательных услуг</a></li>
            </ul>
        <?php else: ?>
            <p>У вас нет доступа к административным функциям.</p>
        <?php endif; ?>

    </section>
    <footer>
        <div>Контакты: +7 (123) 456-7890</div>
    </footer>
</body>
</html>

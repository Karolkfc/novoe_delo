<?php
session_start();
include('config.php');

// Проверка роли пользователя
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'user') {
    header('Location: login.php');
    exit();
}

// Обработка формы
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $service_name = $_POST['service_name'];
    $description = $_POST['description'];

    $query = "INSERT INTO services (service_name, description) VALUES ('$service_name', '$description')";
    mysqli_query($conn, $query);
    echo "Услуга успешно заказана.";
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заказ услуг - ООО "Новое дело"</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">ООО "Новое дело"</div>
        <nav>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="profile.php">Личный кабинет</a></li>
                <li><a href="logout.php">Выход</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <h1>Заказ услуг</h1>
        <form action="order_services.php" method="post">
            <label for="service_name">Название услуги:</label>
            <input type="text" id="service_name" name="service_name" required><br>
            <label for="description">Описание:</label>
            <textarea id="description" name="description" required></textarea><br>
            <button type="submit">Заказать услугу</button>
        </form>
        <h2>Список заказанных услуг</h2>
        <?php
        $query = "SELECT * FROM services";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<p>ID: " . $row['id'] . " | Название услуги: " . $row['service_name'] . " | Описание: " . $row['description'] . "</p>";
        }
        ?>
    </section>
    <footer>
        <div>Контакты: +7 (123) 456-7890</div>
    </footer>
</body>
</html>

<?php
session_start();
include('config.php');

// Проверка роли пользователя
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$username = $_SESSION['username'];
$query = "SELECT role FROM users WHERE firstname='$username'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);
$role = $user['role'];

if ($role != 'admin' && $role != 'user') {
    echo "У вас нет доступа к этой странице.";
    exit();
}

// Обработка формы
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $topic = $_POST['topic'];
    $date = $_POST['date'];

    $query = "INSERT INTO training (topic, date) VALUES ('$topic', '$date')";
    mysqli_query($conn, $query);
    echo "Обучение успешно добавлено.";
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обучение сотрудников - ООО "Новое дело"</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">ООО "Новое дело"</div>
        <nav>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="training.php">Обучение сотрудников</a></li>
                <li><a href="logout.php">Выход</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <h1>Обучение сотрудников</h1>
        <form action="training.php" method="post">
            <label for="topic">Тема:</label>
            <input type="text" id="topic" name="topic" required><br>
            <label for="date">Дата:</label>
            <input type="date" id="date" name="date" required><br>
            <button type="submit">Добавить обучение</button>
        </form>
        <h2>Список обучений</h2>
        <?php
        $query = "SELECT * FROM training";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<p>ID: " . $row['id'] . " | Тема: " . $row['topic'] . " | Дата: " . $row['date'] . "</p>";
        }
        ?>
    </section>
    <footer>
        <div>Контакты: +7 (123) 456-7890</div>
    </footer>
</body>
</html>

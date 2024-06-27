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
    $description = $_POST['description'];
    $status = 'Новое';

    $query = "INSERT INTO failures (description, status) VALUES ('$description', '$status')";
    mysqli_query($conn, $query);
    echo "Заявка успешно добавлена.";
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контроль устранения сбоев - ООО "Новое дело"</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">ООО "Новое дело"</div>
        <nav>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="failures.php">Устранение сбоев</a></li>
                <li><a href="logout.php">Выход</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <h1>Контроль устранения сбоев</h1>
        <form action="failures.php" method="post">
            <label for="description">Описание сбоя:</label>
            <textarea id="description" name="description" required></textarea><br>
            <button type="submit">Добавить заявку</button>
        </form>
        <h2>Список заявок</h2>
        <?php
        $query = "SELECT * FROM failures";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<p>ID: " . $row['id'] . " | Описание: " . $row['description'] . " | Статус: " . $row['status'] . "</p>";
        }
        ?>
    </section>
    <footer>
        <div>Контакты: +7 (123) 456-7890</div>
    </footer>
</body>
</html>

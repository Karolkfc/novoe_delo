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
    $name = $_POST['name'];
    $description = $_POST['description'];

    $query = "INSERT INTO archive (name, description) VALUES ('$name', '$description')";
    mysqli_query($conn, $query);
    echo "Архив успешно добавлен.";
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ведение архива - ООО "Новое дело"</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">ООО "Новое дело"</div>
        <nav>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="archive.php">Ведение архива</a></li>
                <li><a href="logout.php">Выход</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <h1>Ведение архива</h1>
        <form action="archive.php" method="post">
            <label for="name">Название:</label>
            <input type="text" id="name" name="name" required><br>
            <label for="description">Описание:</label>
            <textarea id="description" name="description" required></textarea><br>
            <button type="submit">Добавить в архив</button>
        </form>
        <h2>Список архивов</h2>
        <?php
        $query = "SELECT * FROM archive";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<p>ID: " . $row['id'] . " | Название: " . $row['name'] . " | Описание: " . $row['description'] . "</p>";
        }
        ?>
    </section>
    <footer>
        <div>Контакты: +7 (123) 456-7890</div>
    </footer>
</body>
</html>

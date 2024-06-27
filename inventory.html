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
    $item = $_POST['item'];
    $quantity = $_POST['quantity'];

    $query = "INSERT INTO inventory (item, quantity) VALUES ('$item', '$quantity')";
    mysqli_query($conn, $query);
    echo "Запас успешно добавлен.";
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Планирование запасов - ООО "Новое дело"</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">ООО "Новое дело"</div>
        <nav>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="inventory.php">Планирование запасов</a></li>
                <li><a href="logout.php">Выход</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <h1>Планирование запасов</h1>
        <form action="inventory.php" method="post">
            <label for="item">Название предмета:</label>
            <input type="text" id="item" name="item" required><br>
            <label for="quantity">Количество:</label>
            <input type="number" id="quantity" name="quantity" required><br>
            <button type="submit">Добавить в запас</button>
        </form>
        <h2>Список запасов</h2>
        <?php
        $query = "SELECT * FROM inventory";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<p>ID: " . $row['id'] . " | Название предмета: " . $row['item'] . " | Количество: " . $row['quantity'] . "</p>";
        }
        ?>
    </section>
    <footer>
        <div>Контакты: +7 (123) 456-7890</div>
    </footer>
</body>
</html>

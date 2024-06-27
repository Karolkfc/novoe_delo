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
    $course_name = $_POST['course_name'];
    $description = $_POST['description'];

    $query = "INSERT INTO courses (course_name, description) VALUES ('$course_name', '$description')";
    mysqli_query($conn, $query);
    echo "Курс успешно создан.";
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание курсов - ООО "Новое дело"</title>
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
        <h1>Создание курсов</h1>
        <form action="create_course.php" method="post">
            <label for="course_name">Название курса:</label>
            <input type="text" id="course_name" name="course_name" required><br>
            <label for="description">Описание:</label>
            <textarea id="description" name="description" required></textarea><br>
            <button type="submit">Создать курс</button>
        </form>
        <h2>Список курсов</h2>
        <?php
        $query = "SELECT * FROM courses";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<p>ID: " . $row['id'] . " | Название курса: " . $row['course_name'] . " | Описание: " . $row['description'] . "</p>";
        }
        ?>
    </section>
    <footer>
        <div>Контакты: +7 (123) 456-7890</div>
    </footer>
</body>
</html>

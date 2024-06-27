<?php
session_start();
include('config.php');

// Проверка роли пользователя
$is_logged_in = isset($_SESSION['username']);
$is_admin = $is_logged_in && ($_SESSION['role'] === 'admin');

// Обработка формы добавления новости
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $is_admin) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_POST['image'];

    $stmt = $conn->prepare("INSERT INTO news (title, description, image) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $description, $image);
    $stmt->execute();

    header('Location: news.php');
    exit;
}

// Получение новостей из базы данных
$query = "SELECT * FROM news";
$result = mysqli_query($conn, $query);

if (!$result) {
    die('Ошибка запроса: ' . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости - ООО "Новое дело"</title>
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
                <?php if ($is_logged_in): ?>
                    <li><a href="profile.php">Личный кабинет</a></li>
                    <li><a href="logout.php">Выход</a></li>
                <?php else: ?>
                    <li><a href="login.php">Вход</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    <section>
        <h1>Новости</h1>
        <div class="news-container">
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <div class="news-item">
                    <h2><?php echo htmlspecialchars($row['title']); ?></h2>
                    <p><?php echo nl2br(htmlspecialchars($row['description'])); ?></p>
                    <p><a href="news_detail.php?id=<?php echo $row['id']; ?>" class="btn">Подробнее</a></p>
                </div>
            <?php endwhile; ?>
        </div>

        <?php if ($is_admin): ?>
            <button id="addNewsBtn" class="btn">Добавить новость</button>

            <div id="addNewsModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>Добавить новость</h2>
                    <form method="post" action="news.php">
                        <label for="title">Заголовок</label>
                        <input type="text" id="title" name="title" required>

                        <label for="description">Содержание</label>
                        <textarea id="description" name="description" required></textarea>

                        <label for="image">URL изображения</label>
                        <input type="text" id="image" name="image">

                        <button type="submit">Добавить новость</button>
                    </form>
                </div>
            </div>
        <?php endif; ?>
    </section>
    <footer>
        <div>Контакты: +7 (123) 456-7890</div>
        <nav>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="about.php">О компании</a></li>
                <li><a href="news.php">Новости</a></li>
                <li><a href="contact.php">Контакты</a></li>
            </ul>
        </nav>
    </footer>

    <script>
        // Получаем элементы
        var modal = document.getElementById("addNewsModal");
        var btn = document.getElementById("addNewsBtn");
        var span = document.getElementsByClassName("close")[0];

        // Открываем модальное окно при нажатии на кнопку
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // Закрываем модальное окно при нажатии на <span> (x)
        span.onclick = function() {
            modal.style.display = "none";
        }

        // Закрываем модальное окно при нажатии за его пределами
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>

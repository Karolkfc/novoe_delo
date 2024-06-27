<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница - ООО "Новое дело"</title>
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
                <?php if(isset($_SESSION['username'])): ?>
                    <li><a href="profile.php">Личный кабинет</a></li>
                    <li><a href="logout.php">Выход</a></li>
                <?php else: ?>
                    <li><a href="login.php">Вход</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    <section class="welcome-section">
        <h1 class="animated-header">Добро пожаловать в ООО "Новое дело"</h1>
        <p>Фирма ООО «Новое дело» занимается предоставлением образовательных услуг в сфере информационных технологий, администрированием компьютерных сетей, созданием образовательных курсов, разработкой программного обеспечения для Колледжа АГУ, графическим дизайном, а также созданием программных компонентов. Мы стремимся обеспечить высокое качество обучения и предоставить нашим клиентам лучшие решения для их ИТ нужд.</p>
    </section>
    <section>
        <h2>Новости</h2>
        <div class="news-container">
            <div class="news-item">
                <img src="img/news1.jpg" alt="Новость 1">
                <h3>Новый проект по цифровизации образования в России</h3>
                <p>В 2024 году Министерство образования и науки Российской Федерации запускает новый проект по цифровизации образовательных процессов в школах и вузах страны.</p>
                <a href="news1.php" class="btn">Подробнее</a>
            </div>
            <div class="news-item">
                <img src="img/news2.jpg" alt="Новость 2">
                <h3>Российские вузы внедряют инновационные технологии в обучение</h3>
                <p>Ведущие университеты России начали активное внедрение виртуальной и дополненной реальности в образовательные программы, что позволяет студентам получать более практические навыки.</p>
                <a href="news2.php" class="btn">Подробнее</a>
            </div>
            <div class="news-item">
                <img src="img/news3.jpg" alt="Новость 3">
                <h3>Открытие нового исследовательского центра в области ИТ</h3>
                <p>В Москве открылся новый исследовательский центр, специализирующийся на разработке инновационных решений в сфере информационных технологий и их применении в образовании.</p>
                <a href="news3.php" class="btn">Подробнее</a>
            </div>
        </div>
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
</body>
</html>

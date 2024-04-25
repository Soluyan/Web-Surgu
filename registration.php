<?php
require_once __DIR__ . '/assets/php/helpers.php';
checkGuest();

?>


<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="description" content="Киномонстр - это портал о кино"/>
	<meta name="keywords" content="фильмы, фильмы онлайн,hd"/>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

	<div class="main">
		
		<div class="header">
			<div class="logo">
				<div class="logo_text">
					<h1><a href="/">КиноМонстр</a></h1>
					<h2>Кино - наша страсть!</h2>
				</div>
			</div>

			<div class="menubar">
				
				<ul class="menu">
					<li class="selected"><a href="/index.php">Главная</a></li>
					<li><a href="#">Фильмы</a></li>
					<li><a href="#">Сериалы</a></li>
					<li><a href="#">Рейтинг фильмов</a></li>
					<li><a href="#">Контакты</a></li>


				</ul>

			</div>
			
		</div>


		<div class="site_content">
			
 			<div class="sidebar_container">
 				
 				<div class="sidebar">
					<h2>Поиск</h2>
					<form method="post" action="#" id="search_form" >
						<input type="search" name="search_field" placeholder="ваш запрос" />
						<input type="submit" class="btn" value="найти" />
					</form>
 				</div>

				<div class="sidebar">
					<h2>Новости</h2>
					<span>10.04.2024</span>
					<p>Мы запустили расширенный поиск</p>
					<a href="#">читать</a>
				</div>
				<div class="sidebar">
					<h2>Рейтинг фильмов</h2>
					<ul>
						<li><a href="#">Интерстеллар</a><span class="rating_sidebar">8.1</span></li>
						<li><a href="#">Матрица</a><span class="rating_sidebar">8.0</span></li>
						<li><a href="#">Безумный Макс</a><span class="rating_sidebar">7.5</span></li>
						<li><a href="#">Облачный атлас</a><span class="rating_sidebar">7.4</span></li>
					</ul>
				</div>

 			</div>

			<div class="registration">
				
                <form class="card" action="assets/php/register.php" method="post" enctype="multipart/form-data">
                    <h1>Регистрация</h1>

                    <label for="name">
                        Имя
                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Иванов Иван"
                            value="<?php echo old('name') ?>"
                            <?php echo validationErrorAttr('name'); ?>
                        >
                        <?php if(hasValidationError('name')): ?>
                            <small><?php echo validationErrorMessage('name'); ?></small>
                        <?php endif; ?>
                    </label></br>

                    <label for="email">
                        E-mail
                        <input
                            type="text"
                            id="email"
                            name="email"
                            placeholder="ivan@mail.ru"
                            value="<?php echo old('email') ?>"
                            <?php echo validationErrorAttr('email'); ?>
                        >
                        <?php if(hasValidationError('email')): ?>
                            <small><?php echo validationErrorMessage('email'); ?></small>
                        <?php endif; ?>
                    </label></br>

                    <label for="avatar">Изображение профиля
                        <input
                            type="file"
                            id="avatar"
                            name="avatar"
                            <?php echo validationErrorAttr('avatar'); ?>
                        >
                        <?php if(hasValidationError('avatar')): ?>
                            <small><?php echo validationErrorMessage('avatar'); ?></small>
                        <?php endif; ?>
                    </label></br>

                    <div class="grid">
                        <label for="password">
                            Пароль
                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="******"
                                <?php echo validationErrorAttr('password'); ?>
                            >
                            <?php if(hasValidationError('password')): ?>
                                <small><?php echo validationErrorMessage('password'); ?></small>
                            <?php endif; ?>
                        </label></br>

                        <label for="password_confirmation">
                            Подтверждение
                            <input
                                type="password"
                                id="password_confirmation"
                                name="password_confirmation"
                                placeholder="******"
                            >
                        </label></br>
                    </div>

                    <button
                        type="submit"
                        id="submit"
                    >Продолжить</button>
                </form>
			
			</div>

		</div>


	<div class="footer">
		<p>
			<a href="#">Главное</a> | 
			<a href="#">Фильмы</a> |
			<a href="#">Сериалы</a> |
			<a href="#">Рейтинг фильмов</a> |
			<a href="#">Контакты</a> 
		</p>
		<p>wh-db.com 2024</p>
	</div>
	</div>
	
</body>
</html>

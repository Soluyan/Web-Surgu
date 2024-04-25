<?php
require_once __DIR__ . '/assets/php/helpers.php';

$user = currentUser();
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
					<li class="selected"><a href="#">Главная</a></li>
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

				<?php
				 if ($user === false) {
					// Пользователь не авторизован
				?>
					<div class="sidebar">
						<h2>Вход</h2>
						<form method="post" action="assets/php/login.php" id="name">
							<?php if(hasMessage('error')): ?>
								<div class="notice error"><?php echo getMessage('error') ?></div>
							<?php endif; ?>

							<label for="email">
								Mail
								</br><input
									type="text"
									id="email"
									name="email"
									placeholder="ivan@areaweb.su"
									value="<?php echo old('email') ?>"
									<?php echo validationErrorAttr('email'); ?>
								>
								<?php if(hasValidationError('email')): ?>
									<small><?php echo validationErrorMessage('email'); ?></small>
								<?php endif; ?>
							</label></br>

							<label for="password">
								Пароль
								</br><input
									type="password"
									id="password"
									name="password"
									placeholder="******"
								>
							</label></br>
							<input 
								type="submit" 
								name="name_btn" 
								class="btn" 
								value="войти" />
								
							<div class="lables_passreg_text">
								<span><a href="#">забыли пароль?</a></span> | <span><a href="/registration.php">регистрация</a></span>
							</div>
						</form>
					</div>
				<?php
				} else {
					// Пользователь авторизован
				?>
					<div class="sidebar">
						<h2>Привет, <?php echo $user['name'] ?>!</h2>
						<form action="assets/php/logout.php" method="post">
							<button role="button">Выйти из аккаунта</button>
						</form>
					</div>
				<?php
				}
				?>

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

			<div class="content">
				
				<h1>Новые фильмы</h1>

				<div class="films_block">
					
					<a href="#"><img src="assets/img/matrix.png"></a>
					<a href="#"><img src="assets/img/max.png"></a>
					<a href="#"><img src="assets/img/inter.png"></a>
					<a href="#"><img src="assets/img/cloud.png"></a>

				</div>
			
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

<?
	echo '<header>
			<a class="logo" href="../index.php">
				<span>B -</span>
				<span>L</span>
				<span>O</span>
				<span>G</span>
			</a>
			<div class="nav-toggle"><span></span></div>
			<ul id="menu">
				<li><a href="../index.php">Главная</a></li>
				<li><a href="">Об авторе</a></li>
				<li><a href="">Контакты</a></li>';
				if(!$_SESSION['AccountID'])
					echo '<li><a href="/pages/login.php">Войти</a></li>';
				else
				{
					echo '<li><a href="">Профиль</a></li>
							<li><a href="/pages/queries/accountquit_query.php">Выход</a></li>';
				}
	echo	'</ul>
		</header>';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Адаптивная вёрстка сайта</title>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic|Playfair+Display:400,700&subset=latin,cyrillic">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="styles/login_style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	<script type="text/javascript">
		function openTab(evt, tabName) {
			// Declare all variables
			var i, tabcontent, tablinks;

			// Get all elements with class="tabcontent" and hide them
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}

			// Get all elements with class="tablinks" and remove the class "active"
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}

			// Show the current tab, and add an "active" class to the button that opened the tab
			document.getElementById(tabName).style.display = "block";
			evt.currentTarget.className += " active";
		}
	</script>
	<title>Login</title>
</head>
<body>
	<div class="wrapper">
		<?
			include 'components/header.php';
		?>
		<div class="container">
			<div class="tab">
				<button class="tablinks" onclick="openTab(event, 'login_tab')">Login</button>
				<button class="tablinks" onclick="openTab(event, 'reg_tab')">Register</button>
			</div>
			<div id="login_tab" class="tabcontent">
				<form>
					<p>Логин</p>
					<textarea></textarea>
					<p>Пароль</p>
					<textarea></textarea>
					<button type="submit"></button>
				</form>
			</div>

			<div id="reg_tab" class="tabcontent">
			<form>
				<p>Имя</p>
				<textarea></textarea>
				<p>Логин</p>
				<textarea></textarea>
				<p>Пароль</p>
				<textarea></textarea>
				<button type="submit"></button>
			</form>
			</div>
		</div>
		<?
			include 'components/footer.php'
		?>
		<script>
			$('.nav-toggle').on('click', function () {
				$('#menu').toggleClass('active');
			});
		</script>
	</div>
</body>
</html>
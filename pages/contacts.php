<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Адаптивная вёрстка сайта</title>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic|Playfair+Display:400,700&subset=latin,cyrillic">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../styles/default/pages/profile/profile_style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	<title>Profile</title>
</head>
<body>
	<?
		include 'components/header.php';
	?>
	<div class="container">
		<div class="profile_info_section">
			<h1 class="profile_name">КОНТАКТЫ</h1>
			<p class="secondary_info" id="nickname">VK: </p><p class="secondary_info" id="nickname_value"><a href="https://vk.com/b_log">vk.com/b_log</a></p>
			<p class="secondary_info" id="login">Twitter: </p><p class="secondary_info" id="login_value"><a href="https://twitter.com/b_log">twitter.com/b_log</a></p>
            <p class="secondary_info" id="regdate">Instagram: </p><p class="secondary_info" id="regdate_value"><a href="https://instagram.com/b_log">instagram.com/b_log</a></p>
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
</body>
</html>
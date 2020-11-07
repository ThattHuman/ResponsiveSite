<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Адаптивная вёрстка сайта</title>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic|Playfair+Display:400,700&subset=latin,cyrillic">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	<title>Main page!</title>
</head>
<body>
	<?
		include 'pages/components/header.php';
	?>
	<div class="container">
		<div class="posts-list">
			<article class="post" id="post-1">
				<div class="post-image"><a href=""><img src="./src/img/professionals.jpg"></a></div>
				<div class="post-content">
					<div class="category"><a href="">Рынок труда</a></div>
					<h2 class="post-title">Сплочённость команды профессионалов бодрит</h2>
					<p>Как уже неоднократно упомянуто, независимые государства, превозмогая сложившуюся непростую экономическую ситуацию, разоблачены. Начало повседневной работы по формированию позиции говорит о возможностях глубокомысленных рассуждений. Идейные соображения высшего порядка, а также постоянное информационно-пропагандистское обеспечение нашей деятельности однозначно фиксирует необходимость соответствующих условий активизации.</p>
					<div class="post-footer">
						<a class="more-link" href="">Продолжить чтение</a>
						<div class="post-social">
							<a href="" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="" target="_blank"><i class="fa fa-twitter"></i></a>
							<a href="" target="_blank"><i class="fa fa-pinterest"></i></a>
						</div>
					</div>
				</div>
			</article>
			<article class="post" id="post-2">
				<div class="post-image"><a href=""><img src="./src/img/police.jpg"></a></div>
				<div class="post-content">
					<div class="category"><a href="">Политика</a></div>
					<h2 class="post-title">Не следует забывать, что преступность никогда не была такой неорганизованной</h2>
					<p>Значимость этих проблем настолько очевидна, что внедрение современных методик напрямую зависит от благоприятных перспектив. А также действия представителей оппозиции представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом и должны быть рассмотрены исключительно в разрезе маркетинговых и финансовых предпосылок. С другой стороны, дальнейшее развитие различных форм деятельности требует анализа соответствующих условий активизации!</p>
					<div class="post-footer">
						<a class="more-link" href="">Продолжить чтение</a>
						<div class="post-social">
							<a href="" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="" target="_blank"><i class="fa fa-twitter"></i></a>
							<a href="" target="_blank"><i class="fa fa-pinterest"></i></a>
						</div>
					</div>
				</div>
			</article>
			<article class="post" id="post-3">
				<div class="post-image"><a href=""><img src="./src/img/money_course.jpg"></a></div>
				<div class="post-content">
					<div class="category"><a href="">Финансы</a></div>
					<h2 class="post-title">Оказывается, курс ценных бумаг бодрит</h2>
					<p>Приятно, граждане, наблюдать, как предприниматели в сети интернет являются только методом политического участия и объединены в целые кластеры себе подобных. Приятно, граждане, наблюдать, как действия представителей оппозиции лишь добавляют фракционных разногласий и обнародованы. Прежде всего, разбавленное изрядной долей эмпатии, рациональное мышление, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для существующих финансовых и административных условий.</p>
					<div class="post-footer">
						<a class="more-link" href="">Продолжить чтение</a>
						<div class="post-social">
							<a href="" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="" target="_blank"><i class="fa fa-twitter"></i></a>
							<a href="" target="_blank"><i class="fa fa-pinterest"></i></a>
						</div>
					</div>
				</div>
			</article>
		</div>
		<aside>
			<div class="widget">
				<h3 class="widget-title">Категории</h3>
				<ul class="widget-category-list">
					<li><a href=""></a>Политика</li>
					<li><a href=""></a>Финансы</li>
					<li><a href=""></a>Рынок труда</li>
				</ul>
			</div>
			<div class="widget">
				<h3 class="widget-title">Последние записи</h3>
				<ul class="widget-posts-list">
					<li>
						<div class="post-image-small"><a href=""><img src="./src/img/professionals.jpg"></a></div>
						<h4 class="widget-post-title">Сплочённость команды профессионалов бодрит</h4>
					</li>
					<li>
						<div class="post-image-small"><a href=""><img src="./src/img/police.jpg"></a></div>
						<h4 class="widget-post-title">Не следует забывать, что преступность никогда не была такой неорганизованной</h4>
					</li>
					<li>
						<div class="post-image-small"><a href=""><img src="./src/img/money_course.jpg"></a></div>
						<h4 class="widget-post-title">Оказывается, курс ценных бумаг бодрит</h4>
					</li>
				</ul>
			</div>
			<div class="widget">
				<h3 class="widget-title">Подписка на рассылку</h3>
				<form action="" method="post" id="subscribe">
					<input type="email" name="email" placeholder="Ваш e-mail" required>
					<button type="submit"><i class="fa fa-paper-plane-o"></i></button>
				</form>
			</div>
		</aside>
	</div>
	<?
		include 'pages/components/footer.php'
	?>
	<script>
		$('.nav-toggle').on('click', function () {
			$('#menu').toggleClass('active');
		});
	</script>
</body>
</html>
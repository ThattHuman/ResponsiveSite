<?php session_start();
	include_once "../services/database.php";

    $command = new DbCommands(); 
    $categories = $command->GetCategories();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Адаптивная вёрстка сайта</title>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic|Playfair+Display:400,700&subset=latin,cyrillic">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../styles/default/pages/new_post/new_post_style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	<title>New Post</title>
</head>
<body>
	<?
		include 'components/header.php';
	?>
	<div class="container">
		<form action="queries/newpost_query.php" method="POST" enctype="multipart/form-data">
            <h1 class="form_header">Создать новый пост</h1>
            <p>Выберите категорию: 
                <select name="category">
                    <?
                        foreach($categories as $category)
                            echo "<option value=\"".$category["ID"]."\">".$category["Name"]."</option>"
                    ?>
                </select></p>
            <p>Заголовок: <input type="text" name="title" class="textzone" id="title_box"></p>
            <p>Основной текст:</p>
            <p><textarea name="content" class="textzone" id="content_area"></textarea></p>
            <p>Обложка: <input type="file" name="picture" id="image_picker"></p>
            <p><input id="new_post_button" type="submit" value="Создать"></p>
        </form>
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
<?php include 'testData.php'; ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Games Catalogue | gamecenter.net</title>
	<meta name="description" content="Games Catalogue">
	<meta name="author" content="drvicx">

	<meta property="og:title" content="Games Catalogue">
	<meta property="og:type" content="website">
	<meta property="og:url" content="http://gamecenter.net/cat.php">
	<meta property="og:description" content="Games Catalogue">
	<meta property="og:image" content="image.png">

	<link rel="icon" href="/favicon.ico">
	<link rel="icon" href="/favicon.svg" type="image/svg+xml">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">

	<link rel="stylesheet" href="/css/reset.css?v=1.0">
	<link rel="stylesheet" href="/css/main.css?v=1.0">

</head>

<body>

	<div class="wrapper">
	
		<header>
			<h1>[GC] КАТАЛОГ ИГР</h1>
		</header>

		<div id="breadcrumbs">
			<ul class="breadcrumbs_ul">
				<li><a href="/">Главная</a></li>
				<li><a href="#">Каталог</a></li>
			</ul>
		</div>
		
		<main>
			<div class="center">
				<p>СОДЕРЖАНИЕ</p>

				<div id="dataTable">	
					<table class="dataTable">
							<tr>
								<!--<th>TOP</th><th>NAME</th><th>DATE</th><th>ABOUT</th><th>BUY</th>-->
								<th>ТОП</th><th>НАЗВАНИЕ</th><th>ДАТА ВЫХОДА</th><th>ИНФО</th><th>МАГАЗИН</th>
							</tr>
							<?php foreach($dataArray as $row): ?>
							<tr>
								<td class="col1"><?=$row[0]?></td>
								<td class="col2"><?=$row[1]?></td>
								<td class="col3"><?=$row[2]?></td>
								<td class="col4"><a href="<?=$row[3]?>" target="_blank" rel="nofollow">info</a></td>
								<td class="col5"><a href="<?=$row[4]?>" target="_blank" rel="nofollow">steam</a></td>
							</tr>
							<?php endforeach; ?>
					</table>
				</div>
				
			</div>
		</main>
		
		<!-- page footer -->
		<?php include 'html_footer.php'; ?>

	</div>
		
	<!-- your content here... -->
	<script src="js/main.js"></script>
</body>
</html>
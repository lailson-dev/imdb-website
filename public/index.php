<?php 

	require_once '../app/connection/database.php';

	$selectFilmes = $db->prepare("SELECT `id`, `title`, `id_category`, `image` FROM `filmes`");
	$selectFilmes->execute();
	$resultFilmes = $selectFilmes->fetchAll();

	$categories = '';
?>

<!DOCTYPE html>
<html class="no-js" lang="pt-br">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<title>IMDB - CodeNation Filmes</title>
	<meta name="description" content="" />
	<link rel="shortcut icon" type="image/png" href="/favicon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/main.css" />
</head>

<body>
	<header class="header-hero">
		<div class="container">
			<div class="hero-container">
				<nav class="hero-menu">
					<a href="#" class="logo">
						<img src="./img/logo-imdb.jpg" alt="IMDB">
					</a>
					<ul class="menu">
						<li><a href="#">Lançamento</a></li>
						<li><a href="#">Em cartaz</a></li>
						<li><a href="#">Crítica</a></li>
					</ul>
					<div class="user-info">
						<div class="user-image">
							<img src="./img/walter-white.jpg" alt="User">
						</div>
						<p class="user-name">Walter White</p>
					</div>
				</nav>
				<div class="hero-content">
					<h2 class="hero-title">Mad Max: Estrada da Fúria</h2>
					<div class="hero-categories">
						<ul>
							<li><a href="#">Aventura</a></li>
							<li><a href="#">Sci-fi</a></li>
							<li><a href="#">Terror</a></li>
						</ul>
					</div>
					<a href="#" class="hero-btn play-icon">Assistir Trailer <i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
					<div class="hero-info">
						<p class="hero-text">Nos cinemas</p>
						<p class="hero-date">15 de Outubro de 2015 (Brasil)</p>
					</div>
				</div>
			</div>
		</div>
	</header>

	<main>
		<section class="categories">
			<div class="container">
				<div class="categories-content">
					<ul class="categories-list">
						<li><a href="#">Nos cinemas</a></li>
						<li><a href="#">Em breve</a></li>
						<li><a href="#">Bilheteria</a></li>
						<li><a href="#">Séries</a></li>
						<li><a href="#">Trailers</a></li>
					</ul>
				</div>
			</div>
		</section>

		<section class="movies">
			<div class="container">
				<div class="movies-content">
					<div class="movies-cards">
						<?php foreach ($resultFilmes as $filme): ?>
						<div class="movie-card">
							<div class="movie-image">
								<img src="./img/<?= $filme->image; ?>" alt="Moonlight">
								<div class="movie-overlay">
									<div class="overlay-movie-name">
										<?= $filme->title; ?>
									</div>
									<i class="fa fa-play fa-4x" aria-hidden="true"></i>
								</div>
							</div>
							<div class="movie-info">
								<p class="movie-name"><?= $filme->title; ?></p>
								<span class="movie-categorie">
									<?php 
										$selectCategories = $db->prepare("SELECT DISTINCT categories.title FROM categories JOIN filmes WHERE categories.id IN ($filme->id_category)");
										$selectCategories->execute();
										$selectCategories = $selectCategories->fetchAll();

										foreach ($selectCategories as $category) {
											$categories .= $category->title. ', ';
										}
										$categories = rtrim($categories, ', ');
										echo $categories;
										$categories = '';
									?>
								</span>
								<div class="movie-ratings">
									<div class="icon"><i class="fa fa-heart" aria-hidden="true"></i></div>
									<p class="note">7.0</p>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</section>
	</main>
	<footer>
		<div class="container">
			<div class="footer-content">
				<div class="footer-logo">
					<img src="./img/logo-imdb.jpg" alt="IMDB">
				</div>
				<ul class="social">
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</footer>
</body>
</html>

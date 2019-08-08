<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>Todo list</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/ajax.js"></script>
</head>
<body>

	<div id="recipient_modal"></div>
	<nav>
		<h1>Todolist</h1>
	</nav>
	<div id="float_btn">
		<img src="images/add.png" width="50px" height="50px">
	</div>
	<main>
		<section>
			<h2>A faire</h2>
			<div class="category">
				<div class="quick_create">
					<form action="create_task.php" method="post">
						<div class="quick_text">
							<input type="text" name="task_name" placeholder="Ajouter une tâche" id="quick_create">
						</div>
						<div class="quick_submit">
							<input type="submit" value="">
						</div>
					</form>
				</div>
				<div class="task">
					<div class="task_checkbox">
						<input type="checkbox" name="done" id="done">
						<label for="done"></label>
					</div>
					<div class="task_body">
						<h3>Acheter des patates</h3>
						<p>Les patates, c'est la vie !</p>
					</div>
					<div class="task_menu">
						<img src="images/menu_profil.png" width="40px" height="40px" id="menu_toggle">

						<ul class="mini_menu" id="mini_menu">
							<li class="mini_menu_item"><img src="images/edit.png" width="25px" height="25px">Modifier</li>
							<li class="mini_menu_item delete"><img src="images/delete.png" width="25px" height="25px">Effacer</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		
	</main>

<script type="text/javascript" src="scripts/main.js"></script>
</body>
</html>
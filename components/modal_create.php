<div id="noir_modal" class="hidden">
	
</div>

<div id="modal_create" class="hidden">
	<form action="create_task.php" method="post">
		<div class="modal_header">
			<h2>Nouvelle tâche</h2>
			<h3>Titre</h3>
			<input type="text" name="create_task_name" id="create_task_name">
		</div>
		<div class="modal_body">
			<h3>Description</h3>
			<textarea name="create_task_desc" id="create_task_desc"></textarea>
			<h3>Date butoire</h3>
			<input type="date" name="create_task_date" id="create_task_date">
		</div>
		<div class="modal_footer">
			<input type="submit" value="Créer">
		</div>
	</form>
</div>


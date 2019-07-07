<?php 
include 'header.php';
include 'includes/taskdb.inc.php';
?>
<div class="heading">
		<h2>Lista de Tarefas</h2>
  </div>
  <div class="formtd" method="post">
	<form method="post" action="#">
		<input type="text" name="task" class="task_input">
		<button type="submit" name="submit" id="add_btn" class="add_btn">Adicionar Tarefas</button>
  </form>
  <table>
	<thead>
		<tr>
			<th>N</th>
			<th>Tarefas</th>
			<th style="width: 60px;">Ações</th>
		</tr>
  </thead>
  <tbody>
  <?php
	
	$tasks = showTasks();

  if ( !empty($tasks) ){

	
	foreach ( $tasks  as $task ) {
	 
	?>

	  <tr class="table-row">
		<td><?=$task["id"];?></td>
		<td><?=$task["task"];?></td>
		<td><?=$task["concluido"] == "S" ? "Concluido" : "Aguardando"; ?></td>

    <td><a href='edittarefas.php?id=<?php echo $task['id'];?>'><button class="edit_btn">Concluido</button></a> 
		    <a href='deltarefas.php?id=<?php echo $task['id']; ?>'><button class="del_btn">Deletar</button></a>
    </td>
	  </tr>
    <?php
		
	}

}
	?>
	</tbody>

</table>

  </div>

</body>
</html>
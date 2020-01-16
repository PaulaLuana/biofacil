<meta charset="utf-8" />
<html>
<head>
	<title>BioFácil</title>

</head>
<body>

<?php
include_once "conexao.php";

//consultar no banco de dados
$result_usuario = "SELECT usuario, pontuacao FROM estudante WHERE pontuacao is not null ORDER BY pontuacao DESC";
$resultado_usuario = mysqli_query($conexao, $result_usuario);


//Verificar se encontrou resultado na tabela "usuarios"
if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
   ?>
   
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>Usuário</th>
				<th>Pontuação</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
				?>
				<tr>
					<th><?php echo $row_usuario['usuario']; ?></th>
					<td><?php echo $row_usuario['pontuacao']; ?></td>
				</tr>
				<?php
			}?>
		</tbody>
	</table>
<?php
}else{
	echo "<div class='alert alert-danger' role='alert'>Nenhum usuário encontrado!</div>";
}
?>
</body>
</html>
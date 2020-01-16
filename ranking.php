<!DOCTYPE HTML>
<html lang="pt-br">  
    <head>  
        <meta charset="utf-8">
        <title>Listar com JavaScript</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
      <div class="all">
      <link rel="stylesheet" href="css/ranking.css">

    </head>
    <body background="imagens/fundo.png">
    <br>
   <center><div class="nomeranking">Ranking de exercícios</div> 
   <hr class="hr">
   <div class="introducao"><b>Acompanhe o ranking de exercícios dos nossos usuários!</b>
    </div></center>
   <hr class="hr">
		<div class="container">
      
			<span id="conteudo"></span>
		</div>
		
		<script>
			$(document).ready(function () {
				$.post('listar_ranking.php', function(retorna){
					//Subtitui o valor no seletor id="conteudo"
					$("#conteudo").html(retorna);
				});
			});
		</script>

      <a href="pagina-inicial.php"><button class="bthome">Home</button></a>

      </div>
    </body>
</html>

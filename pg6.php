<meta charset="utf-8">
<html>
<head>
<body background="imagens/fundo.png">
<div class="all">
<link rel="stylesheet" href="css/index6.css">
<div><img src="imagens/casal.jpg" id="casal"></div>

<br><br><br>
<hr id="hr">

<section class="artigos">
<fieldset>
   		
   		Um casal, em que a mulher tem o tipo sanguíneo <b>A</b><br>
  		e o homem <b>B</b>, vão ter um bebê.
  		
  		<div id="form">
  		<form method="post">
			Digite uma probabilidade de tipo sanguíneo para ele:
			<input type="text" name="n1">
			<input type="submit" value="Enviar">
		</form>
		</div>

</fieldset>
</section>
<img src="imagens/Mc.png" id="guia">
<div id="con"><fieldset>Ótimo... você<br>chegou até aqui!<br>Aí vai uma<br>perguntinha.<p>Teste os seus<br>conhecimentos <b>:)</b></fieldset></div>


<?php
@$n1 = $_POST['n1'];

if ($n1 == "") {
echo "<script> alert ('Nenhum campo pode estar vazio!'); </script>";
}
else if(($n1 == "O") || ($n1 == "o")){
echo "<script> alert ('Muito bem!'); </script>";
}
else if(($n1 == "A")||($n1 == "a")){
echo "<script> alert ('Muito bem'); </script>";
}
else if(($n1 == "AB")||($n1 == "ab")){
echo "<script> alert ('Muito bem'); </script>";
}
else if(($n1 == "B")||($n1 == "b")){
echo "<script> alert ('Muito bem'); </script>";
}
else if(($n1 == "O+")||($n1 == "o+")){
echo "<script> alert ('Só o tipo sanguíneo por favor.'); </script>";
}
else if(($n1 == "A+")||($n1 == "a+")){
echo "<script> alert ('Só o tipo sanguíneo por favor.'); </script>";
}
else if(($n1 == "AB+")||($n1 == "ab+")){
echo "<script> alert ('Só o tipo sanguíneo por favor.'); </script>";
}
else if(($n1 == "B+")||($n1 == "b+")){
echo "<script> alert ('Só o tipo sanguíneo por favor.'); </script>";
}
else if(($n1 == "O-")||($n1 == "o-")){
echo "<script> alert ('Só o tipo sanguíneo por favor.'); </script>";
}
else if (($n1 == "A-")||($n1 == "a-")){
echo "<script> alert ('Só o tipo sanguíneo por favor.'); </script>";
}
else if(($n1 == "AB-")||($n1 == "ab-")){
echo "<script> alert ('Só o tipo sanguíneo por favor.'); </script>";
}
else if(($n1 == "B-")||($n1 == "b-")){
echo "<script> alert ('Só o tipo sanguíneo por favor.'); </script>";
}
else{
echo "<script> alert ('Estude mais um pouco'); </script>";
}

?>



<div><a href="pg7.php"><button id="bt0">Continuar</button></a></div>
<div><a href="pg5.php"><button id="bt1">Voltar</button></a></div>
</div>
</head>
</body>
</html>
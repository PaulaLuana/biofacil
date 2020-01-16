<html>
<head>
	<title>Bio-Fácil</title>
<div class="all">
<link rel="stylesheet" href="css/teste.css">


</head>
<body background="imagens/fundo.png">
<br>
<center><div id="h1">Transfusão de sangue</div> 
<hr id="hr"><br><br>
<div id="h2">
Bem vindos,nesse "jogo" simularemos uma trasnfusão de sangue ,e saberemos se o sangue<br> do "doador" é compatível com o do "receptor."
A transfusão de sangue consiste em trasferir o sague<br> de uma pessoa doadora pra outra receptora.Geralmente é realizada quando alguém perde muito sangue.<br>
Ao digitar o tipo sanguíneo do doador e do receptor,digite em letras maiúsculas 
Ex.: A+/AB-</div></center>
<section class="artigos">
<fieldset>
   		
  		
  		<div id="form">
  		<form method = "POST">
Doador:<input type = "text" name = "sp">
Receptor:<input type = "text" name = "sm">
<input type = "submit" value = "Saber se há compatibilidade">
<pre>
</form>
		</div>

</fieldset>
</section>
<img src="imagens/guia.png" id="guia">


<?php
@$sp = $_POST ['sp'];
@$sm = $_POST ['sm'];

if (($sp == "A+") && ($sm == "A+")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita."; 
}else if (($sp == "B+") && ($sm == "B+")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
}else if (($sp == "AB+") && ($sm == "AB+")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
}else if (($sp == "O+") && ($sm == "O+")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
	
	}else if (($sp == "A-") && ($sm == "A-")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
	}else if (($sp == "B-") && ($sm == "B-")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
	}else if (($sp == "AB-") && ($sm == "AB-")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
	}
else if (($sp == "O+") && ($sm == "O+")){
echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";}


	
	else if (($sp == "A-") && ($sm == "A+")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
}else if (($sp == "B-") && ($sm == "B+")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
}else if (($sp == "AB-") && ($sm == "AB+")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
}else if (($sp == "O-") && ($sm == "O+")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
	}

		else if (($sp == "A+") && ($sm == "A-")){
	echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
}else if (($sp == "B+") && ($sm == "B-")){
		echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
}else if (($sp == "AB+") && ($sm == "AB-")){
		echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
}else if (($sp == "O+") && ($sm == "O-")){
		echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
	}else if  (($sp == "A+") && ($sm == "AB+")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
}else if (($sp == "A-") && ($sm == "AB+")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
}else if (($sp == "A-") && ($sm == "AB-")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
	}else if (($sp == "A+") && ($sm == "AB-")){
		echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
	
	
	}else if  (($sp == "O+") && ($sm == "A+")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
}else if (($sp == "O-") && ($sm == "A+")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
}else if (($sp == "O-") && ($sm == "A-")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
	}else if (($sp == "O+") && ($sm == "A-")){
		echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
	}
else if  (($sp == "B+") && ($sm == "AB+")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
}else if (($sp == "B-") && ($sm == "AB+")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
}else if (($sp == "B-") && ($sm == "AB-")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
	}else if (($sp == "B+") && ($sm == "AB-")){
		echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
	
	
	}else if  (($sp == "O+") && ($sm == "B+")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
}else if (($sp == "O-") && ($sm == "B+")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
}else if (($sp == "O-") && ($sm == "B-")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
	}else if (($sp == "O+") && ($sm == "B-")){
		echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
	}
else if  (($sp == "AB+") && ($sm == "AB+")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
}else if (($sp == "AB-") && ($sm == "AB+")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
}else if (($sp == "AB-") && ($sm == "AB-")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
	}else if (($sp == "AB+") && ($sm == "AB-")){
		echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
		
		
	}else if  (($sp == "O+") && ($sm == "AB+")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
}else if (($sp == "O-") && ($sm == "AB+")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
}else if (($sp == "O-") && ($sm == "AB-")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
	}else if (($sp == "O+") && ($sm == "AB-")){
		echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
	

	
	
	
	
	}else if  (($sp == "O+") && ($sm == "B+")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
}else if (($sp == "O-") && ($sm == "B+")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
}else if (($sp == "O-") && ($sm == "B-")){
	echo "Há compatibilidade,nesse caso a tranfusão pode vir a ser feita.";
	}else if (($sp == "O+") && ($sm == "B-")){
		echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
	
	}else if  (($sp == "A+") && ($sm == "O+")){
	echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
}else if (($sp == "A-") && ($sm == "O+")){
echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
}else if (($sp == "A-") && ($sm == "O-")){
	echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
	}else if (($sp == "A+") && ($sm == "O-")){
		echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
		}else if  (($sp == "B+") && ($sm == "O+")){
	echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
}else if (($sp == "B-") && ($sm == "O+")){
echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
}else if (($sp == "B-") && ($sm == "O-")){
	echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
	}else if (($sp == "B+") && ($sm == "O-")){
		echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
		}else if  (($sp == "AB+") && ($sm == "O+")){
	echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
}else if (($sp == "AB-") && ($sm == "O+")){
echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
}else if (($sp == "AB-") && ($sm == "O-")){
	echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
	}else if (($sp == "AB+") && ($sm == "O-")){
		echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
			
		}else if  (($sp == "B+") && ($sm == "A+")){
	echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
}else if (($sp == "B-") && ($sm == "A+")){
echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
}else if (($sp == "B-") && ($sm == "A-")){
	echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
	}else if (($sp == "B+") && ($sm == "A-")){
		echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
				}else if  (($sp == "AB+") && ($sm == "A+")){
	echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
}else if (($sp == "AB-") && ($sm == "A+")){
echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
}else if (($sp == "AB-") && ($sm == "A-")){
	echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
	}else if (($sp == "AB+") && ($sm == "A-")){
		echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
		
		
		
		
		
		
		}else if  (($sp == "A+") && ($sm == "B+")){
	echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
}else if (($sp == "A-") && ($sm == "B+")){
echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
}else if (($sp == "A-") && ($sm == "B-")){
	echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
	}else if (($sp == "A+") && ($sm == "B-")){
		echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
				}else if  (($sp == "A+") && ($sm == "O+")){
	echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
}else if (($sp == "A-") && ($sm == "O+")){
echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
}else if (($sp == "A-") && ($sm == "O-")){
	echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
	}else if (($sp == "A+") && ($sm == "O-")){
		echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
		}else if  (($sp == "B+") && ($sm == "AB+")){
	echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
}else if (($sp == "B-") && ($sm == "AB+")){
echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
}else if (($sp == "B-") && ($sm == "AB-")){
	echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
	}else if (($sp == "B+") && ($sm == "AB-")){
		echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
			
		}else if  (($sp == "AB+") && ($sm == "B+")){
	echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
}else if (($sp == "AB-") && ($sm == "B+")){
echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
}else if (($sp == "AB-") && ($sm == "B-")){
	echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
	}else if (($sp == "AB+") && ($sm == "B-")){
		echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
		
		
		
		}else if  (($sp == "AB+") && ($sm == "O+")){
	echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
}else if (($sp == "AB-") && ($sm == "O+")){
echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
}else if (($sp == "AB-") && ($sm == "O-")){
	echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";
	}else if (($sp == "AB+") && ($sm == "O-")){
	echo "Não há compatibilidade,nesse caso a tranfusão não pode vir a ser feita.";}
else if ($sp == ""){
	echo "Digite um tipo sanguíneo do doador ";}
	else if ($sm == ""){
	echo "Digite um tipo sanguíneo do receptor";}
	else {
	echo "Digite um tipo sanguíneo válido";}
?>
<div><a href="index.php"><button id="bt0">Home</button></a></div>


</body>
</html>
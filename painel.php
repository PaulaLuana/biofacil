<?php
session_start();
if(!$_SESSION['usuario']) {
	header('Location: index.php');
   exit();
}

function alert($arg_1){
   echo"<script language='javascript' type='text/javascript'>
   alert('{$arg_1}');</script>";
}
?>
<meta charset="utf-8">
<html>
<head>
<body background="imagens/fundo.png">
<div class="all">
<link rel="stylesheet" href="css/quiz.css">
<form method="post"/>
<div class="controll">
<br><br><br>
<h2>Olá <?php echo $_SESSION['usuario'];?>, seja bem vindo(a)!<br>
Realize os exercícios a seguir e entre pro nosso ranking!</h2>
<br>

<h2>1) O que é genética?</h2>
a) É a ciência que voltada para o estudo da hereditariedade.<input type="radio" name="gene[]" value="É a ciência que voltada para o estudo da hereditariedade."/><br>
b) É a ciência que estuda a natureza.<input type="radio" name="gene[]" value="É a ciência que estuda a natureza."/><br>
c) Parte da biologia que trabalha com plantas.<input type="radio" name="gene[]" value="Parte da biologia que trabalha com plantas."/><br>

<h2>2) O que é o genótipo?</h2>
a) As característica herdada ao longo da vida.<input type="radio" name="geno[]" value="As característica herdada ao longo da vida."/><br>
b) São características morfológicas, fisiológicas e comportamentais.<input type="radio" name="geno[]" value="São características morfológicas, fisiológicas e comportamentais."/><br>
c) Constituição genética do indivíduo, ou seja, aos genes que ele possui.<input type="radio" name="geno[]" value="Constituição genética do indivíduo, ou seja, aos genes que ele possui."/>

<h2>3) O que mais se encaixa sobre o conceito de homozigótico?</h2>
a) São pares de alelos iguais.<input type="radio" name="homo[]" value="São pares de alelos iguais."/><br>
b) Pares de alelos diferente.<input type="radio" name="homo[]" value="Pares de alelos diferente."/><br>
c) Pares de alelos semelhantes.<input type="radio" name="homo[]" value="Pares de alelos semelhantes."/><br>

<h2>4) O que é característica dominante?</h2>
a) Que não dominam uma sobre a outra.<input type="radio" name="domi[]" value="Que não dominam uma sobre a outra."/><br>
b) Características que dominam sobre outras.<input type="radio" name="domi[]" value="Características que dominam sobre outras."/><br>
c) Características com menor incidência.<input type="radio" name="domi[]" value="Características com menor incidência."/><br>

<h2>5) Aquelas pessoas que não apresentam o antígeno Rh são denominados? </h2>
a) Rh+<input type="radio" name="rh[]" value="Rh+"/><br>
b) Rh-<input type="radio" name="rh[]" value="Rh-"/><br>
c) Rh+-<input type="radio" name="rh[]" value="Rh+-"/><br>

<h2>6) O que é Pleiotopria?</h2>
a) É a base da genética.<input type="radio" name="ple[]" value="É a base da genética."/><br>
b) É quando alelos letais afetam vários caracteres ao mesmo tempo.<input type="radio" name="ple[]" value="É quando alelos letais afetam vários caracteres ao mesmo tempo."/><br>
c) Quando alelos diferente afetam um caractere.<input type="radio" name="ple[]" value="Quando alelos diferente afetam um caractere."/><br>

<h2>7) O que é epistasia recessiva?</h2>
a) Ocorre quando um par de alelos recessivos inibe a ação de alelos de outro par.<input type="radio" name="ere[]" value="Ocorre quando um par de alelos recessivos inibe a ação de alelos de outro par."/><br>
b) Quando par de alelos recessivo não muda nada nos pares dominante.<input type="radio" name="ere[]" value="Quando par de alelos recessivo não muda nada nos pares dominante."/><br>
c) Ocorre quando alelos dominante inibe a ação de outro par.<input type="radio" name="ere[]" value="Ocorre quando alelos dominante inibe a ação de outro par."/><br>

<h2>8) Sobre a herença quantitativa em relação a cor da pele, qual o gene que poderá chegar a ser branco?</h2>
a) Quando for aabb.<input type="radio" name="quan[]" value="Quando for aabb."/><br> 
b) Quando for AABB.<input type="radio" name="quan[]" value="Quando for AABB."/><br>
c) Quando for AABb/AaBB.<input type="radio" name="quan[]" value="Quando for AABb/AaBB."/><br><br>

<h2>9) Um casal vão ter um bebê qual a probabilidade de ser um menino?</h2>
a) 100%<input type="radio" name="por[]" value="100%"/><br> 
b) 50%<input type="radio" name="por[]" value="50%"/><br>
c) 25%<input type="radio" name="por[]" value="25%"/><br><br>

<h2>10) Por que a frequência de mulheres hemofílicas é muito baixa na população</h2>
a) Porque todas morrem durante a primeira menstruação <input type="radio" name="hemo[]" value="a"/><br> 
b) Porque a hemofilia é restrita ao sexo masculino<input type="radio" name="hemo[]" value="b"/><br>
c) Porque para serem hemofílicas devem apresentar alelos da doença vindos do pai e da mãe<input type="radio" name="hemo[]" value="c"/><br>
d) Porque apenas com a trissomia do cromossomo 21 tornam-se hemofílicas<input type="radio" name="hemo[]" value="d"/><br><br>

<h2>11) Um homem doador universal casa-se com uma mulher do grupo sangüíneo B, cuja mãe é do
grupo sanguíneo O. Marque a alternativa correspondente aos prováveis grupos sanguíneos dos filhos do casal.</h2>
a) Grupo B ou AB<input type="radio" name="homem[]" value="a"/><br>
b) Grupo B ou O<input type="radio" name="homem[]" value="b"/><br> 
c) Grupo AB ou O<input type="radio" name="homem[]" value="c"/><br>
d) Apenas grupo B<input type="radio" name="homem[]" value="d"/><br>
e) Apenas grupo O<input type="radio" name="homem[]" value="e"/><br><br>

<h2>12) Qual das alternativas corresponde a Segunda Lei de Mendel?</h2>
a) Distribuição conjugada dos genes<input type="radio" name="mendel[]" value="a"/> <br>
b) Segregação independente<input type="radio" name="mendel[]" value="b"/> <br>
c) Troca de partes entre cromossomos<input type="radio" name="mendel[]" value="c"/> <br>
d) Importância da recessividade<input type="radio" name="mendel[]" value="d"/> <br><br>

<input type ="submit" value="Resposta"/>

<?php
include('conexao.php');
ini_set('display_errors',0);
$q1=$_POST['gene']; 
$q2=$_POST['geno']; 
$q3=$_POST['homo'];
$q4=$_POST['domi'];
$q5=$_POST['rh'];
$q6=$_POST['ple'];
$q7=$_POST['ere'];
$q8=$_POST['quan'];
$q9=$_POST['por'];
$q10=$_POST['hemo'];
$q11=$_POST['homem'];
$q12=$_POST['mendel'];
// Questao 1
foreach($q1 as $chave => $value){
if($value=="É a ciência que voltada para o estudo da hereditariedade."){
echo "<br>Questão 1: $value. Parabéns voce acertou";
$r1=1;
}else{
echo "<br>Questão 1: $value. Voce errou! Estude mais um pouco.";
$r1=0;
}}
// Questao 2 
foreach($q2 as $chave => $value){
if($value=="Constituição genética do indivíduo, ou seja, aos genes que ele possui."){
echo "<br>Questão 2: $value. Parabéns voce acertou";
$r2=1;
}else{
echo "<br>Questão 2: $value. Voce errou! Estude mais um pouco.";
$r2=0;
}}
// Questao 3
foreach($q3 as $chave => $value){
if($value=="São pares de alelos iguais."){
echo "<br>Questão 3: $value. Parabéns voce acertou";
$r3=1;
}else{
echo "<br>Questão 3: $value. Voce errou! Estude mais um pouco.";
$r3=0;
}}
// Questao 4 
foreach($q4 as $chave => $value){
if($value=="Características que dominam sobre outras."){
echo "<br>Questão 4: $value. Parabéns voce acertou";
$r4=1;
}else{
echo "<br>Questão 4: $value. Voce errou! Estude mais um pouco.";
$r4=0;
}}
// Questao 5
foreach($q5 as $chave => $value){
if($value=="Rh-"){
echo "<br>Questão 5: $value. Parabéns voce acertou";
$r5=1;
}else{
echo "<br>Questão 5: $value. Voce errou! Estude mais um pouco.";
$r5=0;
}}
// Questao 6
foreach($q6 as $chave => $value){
if($value=="É quando alelos letais afetam vários caracteres ao mesmo tempo."){
echo "<br>Questão 6: $value. Parabéns voce acertou";
$r6=1;
}else{
echo "<br>Questão 6: $value. Voce errou! Estude mais um pouco.";
$r6=0;
}}
// Questao 7
foreach($q7 as $chave => $value){
if($value=="Ocorre quando alelos dominante inibe a ação de outro par."){
echo "<br>Questão 7: $value. Parabéns voce acertou";
$r7=1;
}else{
echo "<br>Questão 7: $value. Voce errou! Estude mais um pouco.";
$r7=0;
}}
// Questao 8
foreach($q8 as $chave => $value){
if($value=="Quando for aabb."){
echo "<br>Questão 8: $value. Parabéns voce acertou";
$r8=1;
}else{
echo "<br>Questão 8: $value. Voce errou! Estude mais um pouco.";
$r8=0;
}}
// Questao 9
foreach($q9 as $chave => $value){
if($value=="50%"){
echo "<br>Questão 9: $value. Parabéns voce acertou";
$r9=1;
}else{
echo "<br>Questão 9: $value. Voce errou! Estude mais um pouco.";
$r9=0;
}}
// Questao 10
foreach($q10 as $chave => $value){
if($value=="d"){
echo "<br>Questão 10: $value. Parabéns voce acertou";
$r10=1;
}else{
echo "<br>Questão 10: $value. Voce errou! Estude mais um pouco.";
$r10=0;
}} 
// Questao 11
foreach($q11 as $chave => $value){
if($value=="b"){
echo "<br>Questão 11: $value. Parabéns voce acertou";
$r11=1;
}else{
echo "<br>Questão 11: $value. Voce errou! Estude mais um pouco.";
$r11=0;
}}
// Questao 12
foreach($q12 as $chave => $value){
if($value=="b"){
echo "<br>Questão 12: $value. Parabéns voce acertou";
$r12=1;
}else{
echo "<br>Questão 12: $value. Voce errou! Estude mais um pouco.";
$r12=0;
}}

$pontos=($r1+$r2+$r3+$r4+$r5+$r6+$r7+$r8+$r9+$r10+$r11+$r12);

$atualizar = "UPDATE estudante SET pontuacao = ".$pontos." where usuario = '".$_SESSION['usuario']."'";

if($conexao->query($atualizar) === TRUE){
   alert("Sua pontuação foi atualizada ");
}

$conexao->close();
echo "<br><h4>Você ganhou $pontos pontos</h4>";
alert('Você acertou '. $pontos);
?>
</form>
</div>
<div><a href="pagina-inicial.php"><button class="bthome">Home</button></a></div>
<div><a href="logout.php"><button class="btlogout">Logout</button></a></div>
</head>
</body>
</html>
<?
// Conex�o e sele��o do Banco de Dados
$conexao = mysql_connect("host","usuario","senha");
$banco = mysql_select_db("nome_do_banco");

// recebe por GET o n�mero da p�gina se houver
$pagina = $_GET['pagina'];

// Verifica se existir a vari�vel $pagina passada por GET
// caso n�o haja, define a p�gina como sendo a de n�mero 1
if(!$pagina){
	$page = "1";
}else{
	// Caso a vari�vel existir, ele utiliza o valor dela
	$page = $pagina;
}

// Aqui voc� define quandos Registros ser�o exibidos por p�gina
$regs = 8;

// Define o inicio em cada p�gina de exibi��o
$inicio = $page-1;
$inicio = $inicio*$regs;

// Faz a query no banco de dados para o total desta p�gina
$q_empresas = mysql_query("select nome from empresas limit $inicio,$regs");
// Faz a query contando o total completo de resultados
$total = mysql_query("select nome from empresas");
// Conta o total de registros
$totalreg = mysql_num_rows($total);
// Verifica o n�mero total de p�ginas, e arredonda o valor
$totalpag = ceil($totalreg/$regs);

// Exibe os dados com orienta��o a objetos
print "Total de Cervejas: <b>".$totalreg."</b><br />";
print "<ul>";
while($empresas = mysql_fetch_object($q_empresas)){
	// Imprime os nomes das empresas na p�gina
	print "<li>Cerveja: <b>".$empresas->nome."</b></li>";
}
print "</ul>";

// Criaremos os Links para o Anterior e Pr�ximo
$prevlink = $page-1;
$nextlink = $page+1;

// Verifica se existe P�gina Anterior
if($page > 1){
    print "<a href=\"?pagina=".$prevlink."\"><b>Anterior</b></a>";
}else{
	print "Anterior";
}

// Imprime o Espa�amento, e as informa��es (1 de 10) P�ginas
print " (".$page." de ".$totalpag.") ";

// Verifica se existe Pr�xima P�gina
if($page < $totalpag){
    print "<a href=\"?pagina=".$nextlink."\"><b>Pr�xima</b></a>";
}else{
	print "Pr�xima";
}
?>
<?php
class conexao {
    // Coloque aqui as Informa��es do Banco de Dados
    var $host = "localhost";
    var $user = "root"; # Usu�rio no Host/Servidor
    var $senha = ""; # Senha no Host/Servidor
    var $dbase = "blog"; # Nome do seu Banco de Dados

    // Cria as vari�veis que Utilizaremos
    var $query;
    var $link;
    var $resultado;
    
    function MySQL(){
		// Instancia o Objeto para usarmos
    }
	
	// Cria a fun��o para Conectar ao Banco MySQL
    function conecta(){
        $this->link = @mysql_connect($this->host,$this->user,$this->senha);
		// Conecta ao Banco de Dados
        if(!$this->link){
			// Caso ocorra um erro, exibe uma mensagem com o erro
            echo "Ocorreu um Erro na conex�o MySQL:";
			echo "<b>".mysql_error()."</b>";
			die();
        }elseif(!mysql_select_db($this->dbase,$this->link)){
			// Seleciona o banco ap�s a conex�o
			// Caso ocorra um erro, exibe uma mensagem com o erro
            echo "Ocorreu um Erro em selecionar o Banco:";
			echo "<b>".mysql_error()."</b>";
			die();
        }
    }


	// Cria a fun��o para query no Banco de Dados
    function sql_query($query){
        $this->conecta();
        $this->query = $query;
		// Conecta e faz a query no MySQL
        if($this->resultado = mysql_query($this->query)){
            $this->desconecta();
            return $this->resultado;
        }else{
			// Caso ocorra um erro, exibe uma mensagem com o Erro
            echo "Ocorreu um erro ao executar a Query MySQL: <b>$query</b>";
			echo "<br><br>";
			echo "Erro no MySQL: <b>".mysql_error()."</b>";
			die();
            $this->desconecta();
        }        
    }

	// Cria a fun��o para Desconectar ao Banco MySQL
    function desconecta(){
        return mysql_close($this->link);
    }
}
?>
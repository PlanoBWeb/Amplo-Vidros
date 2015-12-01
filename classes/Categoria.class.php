<?php

include_once "configs/funcoes.php";

class Categoria
{
	function Categoria()
    {
		$this->entidade = "categoria";
    }
	
	function Grava($post, $file, $copy = NULL)
	{
		$retorno = array();
		
		$sql = "
			INSERT INTO
				".$this->entidade."
			SET
				categoria		= '".utf8_decode($post['categoria'])."'
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = ".$this->entidade." - Metodo = grava";
			return $retorno;
		}
		else
		{
			$retorno[0] = 0;
			$retorno[1] = "Registro inserido com sucesso.";
			return $retorno;
		}
	}
	
	function Altera($post, $file, $copy = NULL)
	{
		$retorno = array();
	
		$sql = "
			UPDATE	
				".$this->entidade."
			SET
				categoria 			= '".utf8_decode($post['categoria'])."'
			WHERE
				id 				= '".$post['id']."'
		".$query;
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = ".$this->entidade." - Metodo = Alterar";
			return $retorno;
		}
		
		$retorno[0] = 0;
		$retorno[1] = "Alteraчуo feita com sucesso!";
		return $retorno;
	}
	
	function Pesquisar($post)
	{
		$query = "";
		
		if($post['id'])
		{
			$query .= " AND categoria.id = '".$post['id']."' ";
		}

		$retorno = array();
	
		$sql = "SELECT
					*
				FROM  
					" . $this->entidade . "
				WHERE
					1 = 1 ".$query."
				ORDER BY
					titulo ASC
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = " . $this->entidade . " - Metodo = Pesquisar";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i] 					= $rows;
			$dados[$i]['categoria'] 		= utf8_encode($rows['categoria']);
			$dados[$i]['titulo'] 			= utf8_encode($rows['titulo']);

			$i++;
		}
		
		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}
	
	function Exclui($id)
	{
		$retorno = array();
		
		$sql = "
			DELETE FROM	
				".$this->entidade." 
			WHERE
				id = '".$id."'
		".$query;
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = ".$this->entidade." - Metodo = Exclui";
			return $retorno;
		}
		
		$retorno[0] = 0;
		$retorno[1] = "Exclusуo feita com sucesso!";
		return $retorno;
	}
}

?>
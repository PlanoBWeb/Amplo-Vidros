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
		$retorno[1] = "Alteração feita com sucesso!";
		return $retorno;
	}
	
	function Pesquisar($post)
	{
		$query = "";
		
		if($post['catNormal'])
		{
			$query .= " AND categoria.urlAmigavel = '".$post['catNormal']."'";
		}

		if($post['catPai'])
		{
			$query .= " AND categoria.idPai = '0' AND categoria.ambiente = '0'";	
		}

		// Select pela url amigavel e recupero id dessa categoria
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
			$dados[$i]['titulo'] 		= utf8_encode($rows['titulo']);

			$i++;
		}
		

		// Se tiver uma categoria entra aqui
		if($post['catNormal'])
			{

			$tituloCat 		= $dados[0]['titulo'];
			$urlAmigaCat 	= $dados[0]['urlAmigavel'];
			// Com o id da urlAmigavel faço select trazendo os resultados
			$sql = "SELECT
						*
					FROM  
						" . $this->entidade . "
					WHERE
						1 = 1 AND categoria.idPai = ".$dados[0]['id']."
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
				$dados[$i]['titulo'] 		= utf8_encode($rows['titulo']);
				$dados[$i]['tituloCat']		= utf8_encode($tituloCat);
				$dados[$i]['urlAmigaCat']	= $urlAmigaCat;
				$i++;
			}
		}
		
		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}

	function PesquisarCategoria($post)
	{
		$query = "";
		
		$retorno = array();
	
		$sql = "SELECT
					C.idPai,
					C.titulo,
					C.ambiente,
					C.urlAmigavel,
					CPai.titulo AS tituloPai,
					CPai.urlAmigavel AS urlCat
				FROM  
					categoria C
				INNER JOIN
					categoria CPai
				ON
					CPai.id = C.idPai
				WHERE
					1 = 1 AND C.idPai <> 0
				ORDER BY
					C.idPai, C.titulo, C.ambiente
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
			$dados[$i]['titulo'] 		= utf8_encode($rows['titulo']);
			$dados[$i]['tituloPai'] 	= utf8_encode($rows['tituloPai']);

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
		$retorno[1] = "Exclusão feita com sucesso!";
		return $retorno;
	}
}

?>
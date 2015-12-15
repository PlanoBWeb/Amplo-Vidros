<?php

include_once "configs/funcoes.php";

class Projeto
{
	function Projeto()
    {
		$this->entidade = "projeto";
    }
	
	function PesquisarProjeto($post)
	{

		if($post['id'])
		{
			$query .= " AND P.urlAmigavel = '".$post['id']."'";
			$innerJoin = "INNER JOIN 
				galeria G 
			ON 
				P.id = G.idProjeto";
		}

		$retorno = array();

		$sql = "
			SELECT 
				P.*,
				G.idProjeto,
				G.caminhoImagem AS galeriaImg,
				G.caminhoThumbnail AS galeriaImgThumb
			FROM
				" . $this->entidade . " P
			".$innerJoin."
			WHERE
				1 = 1 ".$query."
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = " . $this->entidade . " - Metodo = PesquisarVejaTambem";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i] 						= $rows;
			$dados[$i]['titulo'] 			= utf8_encode($rows['titulo']);
			$dados[$i]['elaboracao'] 		= utf8_encode($rows['elaboracao']);
			$dados[$i]['designer'] 			= utf8_encode($rows['designer']);
			$dados[$i]['texto'] 			= utf8_encode($rows['texto']);
			$i++;
		}

		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	
	}

	function Pesquisar($post)
	{

		$retorno = array();

		$sql = "
			SELECT 
				*
			FROM
				" . $this->entidade . " P
			WHERE
				1 = 1 ".$query."
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = " . $this->entidade . " - Metodo = PesquisarVejaTambem";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i] 						= $rows;
			$dados[$i]['titulo'] 			= utf8_encode($rows['titulo']);
			$dados[$i]['elaboracao'] 		= utf8_encode($rows['elaboracao']);
			$dados[$i]['designer'] 			= utf8_encode($rows['designer']);
			$dados[$i]['texto'] 			= utf8_encode($rows['texto']);
			$i++;
		}

		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	
	}
}

?>
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


	function PesquisarIdRelacionados($post)
	{

		$query .= " AND CP.idProjeto = '".$post."'";

		$retorno = array();

		$sql = "
			SELECT 
				CP.*
			FROM
				categoria_projeto CP 
			WHERE
				1 = 1 ".$query."
			GROUP BY
				CP.idCategoria
			ORDER BY
				rand()
			LIMIT
				4
		";

		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = " . $this->entidade . " - Metodo = PesquisarIdRelacionados";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i] 						= $rows;
			$i++;
		}

		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	
	}


	function PesquisarRelacionados($post)
	{
		$query .= " AND PC.idCategoria = '".$post."'";

		$retorno = array();

		$sql = "
			SELECT 
				PC.idCategoria,
				PC.idProduto,
				C.urlAmigavel, 
				C.titulo as tituloCat,
				C.idPai,
				P.*
			FROM
				produto_categoria PC 
			INNER JOIN
				categoria C
			ON
				C.id = PC.idCategoria
			INNER JOIN
				produto P
			ON
				P.id = PC.idProduto			
			WHERE
				1 = 1 ".$query."
			LIMIT
				3
		";

		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = " . $this->entidade . " - Metodo = PesquisarRelacionados";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i] 						= $rows;
			$dados[$i]['titulo'] 			= utf8_encode($rows['titulo']);
			$dados[$i]['nomeCat'] 			= $this->nomeCategoria($rows['idPai']);
			$i++;
		}

		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	
	}

	function nomeCategoria($idPai){
		$sql 	= "SELECT
				   C.urlAmigavel AS urlAmigavelCat
				FROM
					categoria C
				WHERE 
					1 = 1 AND C.id = '".$idPai."'
		";

		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = " . $this->entidade . " - Metodo = PesquisarRelacionados";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i] 						= $rows;
			$i++;
		}
		$retorno[0] = 0;
		$retorno[1] = $dados[0]['urlAmigavelCat'];
		return $retorno;
	}

	function PesquisarMenu($post)
	{

		$retorno = array();

		$sql = "
			SELECT 
				P.titulo,
				P.urlAmigavel
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
			$i++;
		}

		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	
	}

	function destaquesHome($post){

		$retorno = array();
		$sql = "SELECT
					P.titulo,
					P.caminhoThumbnail,
					P.urlAmigavel
				FROM  
					" . $this->entidade . " P
				WHERE
					1 = 1 
				ORDER BY
					rand()
				LIMIT
					6
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
			$i++;
		}

		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}
}

?>
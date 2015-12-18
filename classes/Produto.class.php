<?php

include_once "configs/funcoes.php";

class Produto
{
	function Produto()
    {
		$this->entidade = "produto";
    }
	
	function Pesquisar($post)
	{
		$query = "";
		
		if($post['id'])
		{
			$query .= " AND C.urlAmigavel = '".$post['id']."'";
		}

		if($post['busca'])
		{
			$valoresLike = explode(" ", $post['busca']);
			$totalValores = count($valoresLike);
			$totalValoresMenosUm = $totalValores-1;

			if ($totalValores == 1) {
				$query .= " AND P.titulo LIKE '%".utf8_decode($post['busca'])."%' ";
			}else{
				$and = array();
				if ($totalValores > 1) {
					for ($i=0; $i < $totalValores; $i++) { 
						$and[$i] = " LIKE '%".utf8_decode($valoresLike[$i])."%' ".($i <> $totalValoresMenosUm ? "AND P.titulo" : "");
					}
				}
				$andLike = implode('', $and);

				$query .= " AND P.titulo ".$andLike." ";	
			}
		}

		$retorno = array();

		$sql = "SELECT
					C.id AS idCat,
					C.idPai,
					C.urlAmigavel,
					C.titulo AS tituloCatFilho,
					C.ambiente,
					PC.idProduto,
					PC.idCategoria,
					P.titulo,
					P.caminhoImagem,
					P.caminhoThumbnail
				FROM  
					categoria C
				INNER JOIN 
					produto_categoria PC
				ON
					PC.idCategoria = C.id
				INNER JOIN
					produto P
				ON
					P.id = PC.idProduto
				WHERE
					1 = 1 ".$query."
				ORDER BY
					P.titulo ASC
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
			$dados[$i] 						= $rows;
			$dados[$i]['tituloCatFilho'] 	= utf8_encode($rows['tituloCatFilho']);
			$dados[$i]['titulo'] 			= utf8_encode($rows['titulo']);
			$dados[$i]['idPai']				= $this->nomeCategoria($rows['idPai']);
			$dados[$i]['tituloBusca']		= utf8_encode(limita_caracteres($rows['titulo'], 70, false));	
			$i++;
		}

		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}

	function PesquisarTamanhoProduto($post){
		$query = "AND C.id = '".$post."'";

		$retorno = array();

		$sql = "
			SELECT 
				C.idPai,
				C.tamanhoProduto
			FROM
				categoria C 
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
			$i++;
		}
		
		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}

	function PesquisarVejaTambem($post)
	{

		$query .= " AND C.idPai = '".$post['id']."' AND C.id <> '".$post['id']."' AND C.ambiente = '0' AND C.urlAmigavel <> '".$post['url']."'";

		$retorno = array();

		$sql = "
			SELECT 
				*
			FROM
				categoria C 
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

	function PesquisarIdRelacionados($post)
	{

		$query .= " AND CP.idCategoria = '".$post."'";

		$retorno = array();

		$sql = "
			SELECT 
				CP.*
			FROM
				categoria_projeto CP 
			WHERE
				1 = 1 ".$query."
			ORDER BY
				rand()
			LIMIT
				2
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
		$retorno[1] = $dados;
		return $retorno;
	
	}

	function PesquisarRelacionados($post)
	{
		$query .= " AND P.id = '".$post."'";

		$retorno = array();

		$sql = "
			SELECT 
				P.id AS idProjeto,
				P.titulo,
				P.urlAmigavel,
				G.idProjeto AS idProjetoGaleria,
				G.caminhoImagem,
				G.caminhoThumbnail
			FROM
				projeto P 
			INNER JOIN
				galeria G
			ON
				P.id = G.idProjeto			
			WHERE
				1 = 1 ".$query."
			LIMIT
				3
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
	
	function nomeCategoria($post){
		$idCategoria = $post;
		$sql = "SELECT
					C.id,
					C.titulo,
					C.urlAmigavel AS urlCat
				FROM  
					categoria C
				WHERE
					1 = 1 AND C.id = ".$idCategoria."
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
			$dados[$i]['urlCat'] 		= $rows['urlCat'];
			$i++;
		}

		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}

	function destaquesHome($post){

		$retorno = array();
		$sql = "SELECT
					PC.idProduto,
					PC.idCategoria,
					C.idPai,
					C.urlAmigavel,
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
					PC.idProduto = P.id
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
			$dados[$i]['nomeCat']		= $this->nomeCategoria($rows['idPai']);
			$dados[$i]['tituloAbrev']	= utf8_encode(limita_caracteres($rows['titulo'], 55, false));	
			$dados[$i]['titulo']		= utf8_encode($rows['titulo']);	
			$i++;
		}

		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}

}

?>
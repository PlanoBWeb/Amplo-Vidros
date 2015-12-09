<?php

include_once "configs/funcoes.php";

class Produto
{
	function Produto()
    {
		$this->entidade = "Produto";
    }
	
	function Pesquisar($post)
	{
		$query = "";
		
		if($post['id'])
		{
			$query .= " AND Produto.id = '".$post['id']."' ";
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
			$dados[$i]['titulo'] 		= utf8_encode($rows['titulo']);

			$i++;
		}
		
		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}
	

}

?>
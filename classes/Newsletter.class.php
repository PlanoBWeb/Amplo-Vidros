<?php 

	class Newsletter
	{
		
		function Newsletter()
		{
			$this->entidade = "newsletter";

			$this->pathProjeto = PATH_SERVIDOR;
		}

		function Grava($post){
			$retorno = array();

			//Valida duplicidade
			$parametroValidacao['email'] = $post['email'];
			$retornoValidacao = $this->Pesquisar($parametroValidacao);
			if($retornoValidacao[1][0]['id'] != 0)
			{
				$retorno[0] = "1";
				$retorno[1] = "O email ".$post['email']." já existe em nosso banco de dados!";
				return $retorno;
			}
			
			$sql = "
				INSERT INTO
					".$this->entidade."
				SET
					nome = '".utf8_decode($post['nome'])."',
					email = '".$post['email']."'
			";
			$result = mysql_query($sql);
			if (!($result))
			{
				$retorno[0] = "1";
				$retorno[1] = "Erro ao executar a query. Classe = Usuario - Metodo = grava";
				return $retorno;
			}
			else
			{
				$retorno[0] = 0;
				$retorno[1] = "Registro inserido com sucesso.";
				return $retorno;
			}
		}

		function Pesquisar($post)
		{
			$query = "";
			
			if($post['email'])
			{
				$query .= " AND email = '".$post['email']."' ";
			}
			
			$retorno = array();
		
			$sql = "SELECT
						*
					FROM  
						".$this->entidade."
					WHERE
						1 = 1 ".$query."
			";
			$result = mysql_query($sql);
			if (!($result))
			{
				$retorno[0] = "1";
				$retorno[1] = "Erro ao executar a query. Classe = Usuario - Metodo = Pesquisar";
				return $retorno;
			}
			
			$i = 0;
			while( $rows = mysql_fetch_array($result) )
			{
				$dados[$i] = $rows;
				$dados[$i]['email'] = utf8_encode($rows['email']);				
				$i++;
			}
			
			$retorno[0] = 0;
			$retorno[1] = $dados;
			return $retorno;
		}
	}
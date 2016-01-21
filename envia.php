<?php
  
    if ($_POST['newsletterEnvia'] == "newsletter") {
        if (empty($_POST['nome_news'])|| empty($_POST['email_news'])) {
            header("Location: home.php"); 
        } else {  
            $ip = $_SERVER['REMOTE_ADDR'];
            $data = date("d/m/y");
            $hora = date("H:i"); 
            
            $nome = $_POST['nome_news'];
            $email = $_POST['email_news'];

            $cont = "$ip\r\n";
            $cont .= "$data\r\n";
            $cont .= "$hora\r\n\r\n";
            $cont .= "Nome: \t$nome\r\n";
            $cont .= "E-mail: \t$email\r\n";

            $headers    = "MIME-Version: 1.1\r\n";
            $headers  .= "Content-type: text/plain; charset=UTF-8\n";
            $assunto  .= "Amplo Vidros - Site";
            $conteudo     .= "$cont\r\n";
            $headers  .= "From: vendas@amplovidros.com.br\n"; 
            $headers  .= "Return-Path: vendas@amplovidros.com.br\r\n"; 
            //$headers    .= "Bcc: contato@planobweb.com.br\r\n"; // cópia
            $headers  .= "Reply-To: $email\n";
            $envio        = mail("vendas@amplovidros.com.br", $assunto,$conteudo,$headers);

            if ($envio) {
                echo "<script>location.href ='obrigado-newsletter'</script>";     
            }
        }
    }else {
        if (empty($_POST['nome'])|| empty($_POST['email'])|| empty($_POST['telefone'])|| empty($_POST['onde'])|| empty($_POST['msg'])) {
           header("Location: index.php"); 
        } else { 

            $ip = $_SERVER['REMOTE_ADDR'];
            $data = date("d/m/y");
            $hora = date("H:i"); 

            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $onde = $_POST['onde'];
            $telefone = $_POST['telefone'];
            $msg = $_POST['msg'];

            $cont = "$ip\r\n";
            $cont .= "$data\r\n";
            $cont .= "$hora\r\n\r\n";
            $cont .= "Nome: \t$nome\r\n";
            $cont .= "E-mail: \t$email\r\n";
            $cont .= "Telefone: \t$telefone\r\n";
            $cont .= "Onde nos encontrou: \t$onde\r\n";
            $cont .= "\r\nMensagem: \n";
            $cont .= "$msg";

            $headers  = "MIME-Version: 1.1\r\n";
            $headers  .= "Content-type: text/plain; charset=UTF-8\n";
            $assunto  .= "Amplo Vidros - Site";
            $conteudo     .= "$cont\r\n";
            $headers  .= "From: vendas@amplovidros.com.br\n"; 
            $headers  .= "Return-Path: vendas@amplovidros.com.br\r\n"; 
            //$headers    .= "Bcc: contato@planobweb.com.br\r\n"; // cópia
            $headers  .= "Reply-To: $email\n";
            $envio        = mail("vendas@amplovidros.com.br", $assunto,$conteudo,$headers);

            if ($_POST['pagina'] == "fale-conosco") {
                echo "<script>location.href ='obrigado-contato'</script>";  
            }else{
                echo "<script>location.href ='obrigado-orcamento'</script>";  
            }

        }
    }

?>
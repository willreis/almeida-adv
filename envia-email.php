  <?php
  
  //1 – Definimos Para quem vai ser enviado o email
  //$para = "contato@almeidaadvogadosassociados.com.br";
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $assunto = $_POST['assunto'];
  $mensagem = $_POST['mensagem'];

  	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
	//==================================================== 
	$email_remetente = "contato@almeidaadvogadosassociados.com.br"; // deve ser uma conta de email do seu dominio 
	//====================================================
	
	//Configurações do email, ajustar conforme necessidade
	//==================================================== 
	$email_destinatario = "william.reis.silva@gmail.com"; // pode ser qualquer email que receberá as mensagens
	$email_reply = "$email"; 
	$email_assunto = "Contato Site Almeida Advogados Associados"; // Este será o assunto da mensagem
	//====================================================
	
	//Monta o Corpo da Mensagem
	//====================================================
	$email_conteudo = "Nome = $nome \n"; 
	$email_conteudo .= "Email = $email \n";
    $email_conteudo .= "Telefone = $telefone \n";
    $email_conteudo .= "Assunto = $assunto \n";  
	$email_conteudo .= "Mensagem = $mensagem \n"; 
	//====================================================
	
	//Seta os Headers (Alterar somente caso necessario) 
	//==================================================== 
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	//====================================================
	
	//Enviando o email 
	//==================================================== 
	if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
        echo "<script>window.location='contato.php';alert('$nome, sua mensagem foi enviada com sucesso! retornaremos o contato em breve. Obrigado!');</script>"; 
					} 
			else{ 
                echo "<script>window.location='contato.php';alert('$nome, houve um erro com o envio, por favor recarregue a pagina e tente novamente. Obrigado');</script>";  } 
	//====================================================


  ?>
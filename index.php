<?php
	if(isset($_POST['nome']) && !empty($_POST['nome'])){
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$msg = addslashes($_POST['msg']);

		$para = "correio.h@gmail.com";
		$assunto = "Pergunta do Contato";
		$corpo = "Nome: ".$nome." - E-mail: ".$email." - Mensagem: ".$msg;

		$cabecalho = 	"From: contato@3asolucoes.com.br"."\r\n".
						"Reply-To: ".$email."\r\n".
						"X-Mailer: PHP/".phpversion();

		mail($para, $assunto, $corpo, $cabecalho);		

		echo "<h2>E-mail enviado com sucesso!</h2>";
		exit;
	}
?>

<form method="POST">
	Nome:<br/>
	<input type="text" name="nome"/><br/><br/>
	E-mail:<br/>
	<input type="email" name="email"/><br/><br/>
	Mensagem:<br/>
	<input name="msg"/><br/><br/>

	<input type="submit" name="Enviar">
</form>

<iframe src="https://docs.google.com/document/d/1YN2opxLDncOEP_V6YleH6_hpAK5Jw8HNoUaGSQx2GVI/pub?embedded=true"></iframe>
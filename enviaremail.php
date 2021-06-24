<link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<?php

if(!empty($_POST['email'])){

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$assunto = addslashes($_POST['assunto']);
$mensagem = addslashes($_POST['mensagem']);

}

$to = "caiodigioia@hotmail.com";
$subject = "Contato - Caio Di Gioia";
$body = "Nome: ".$nome. "\r\n".
		"Email: ".$email. "\r\n".
		"Assunto: ".$assunto. "\r\n". "\r\n".
		"Mensagem: ".$mensagem;
		
$header = "From:caiodigioia@hotmail.com"."\r\n".
			"Reply-To:".$email."\r\n".
			"X=Mailer:PHP/".phpversion();
			
if(mail($to,$subject,$body,$header)) {
	echo "<meta http-equiv='refresh' content='5; url=/index'>"
                  ?>
				  <div class="alert alert-success" role="alert">
  O seu contato foi enviado com sucesso! Você será redirecionado em breve.
</div>
<?php
}

else {
	echo "<meta http-equiv='refresh' content='5; url=/index'>"
                  ?>
				  <div class="alert alert-danger" role="alert">
  Ocorreu um erro ao enviar o seu contato. Você será redirecionado para a home.
</div>
<?php
	 }
?>
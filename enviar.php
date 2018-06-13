<?php
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $mensagem = $_POST['msg'];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

  $arquivo = "
  <style type='text/css'>
  
  </style>
    <html>
        Nome:$nome
        <br>
        E-mail:<b>$email</b>
        <br>
        Telefone:<b>$telefone</b>
        <br>
        Mensagem:$mensagem
        <br>
        <br>
        Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b>
    </html>
  ";
  $emailenviar = "krsmart17@gmail.com";
  $destino = $emailenviar;
  $assunto = "Contato pelo Site Kr Smart";
 
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From:' .$nome. '<'.$email.'>';
   
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo " <meta http-equiv='refresh' content='10;URL=index.php'>";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }
?>
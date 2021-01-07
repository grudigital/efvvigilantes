<?php
require ("../admin/connections/conn.php");
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';


    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'conectavizinhos.com';
    $mail->Port = 465;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Username = 'naoresponda@conectavizinhos.com';
    $mail->Password = 'C0n3ct@v1z1nh0s';
    $mail->setFrom('naoresponda@conectavizinhos.com', 'Conecta vizinhos');
    $mail->addAddress($email, $nome);
    if ($mail->addReplyTo($email, $nome)) {
        $mail->Subject = 'Seja bem-vindo ao Conecta Vizinhos';
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Body = <<<EOT

<br/>
Ol&aacute; vizinho $nome, que bom vê-lo por aqui.
<br/><br/> 
Você se cadastrou em nosso site e agora faz parte da família Conecta Vizinhos!
<br/>
Aproveite para conhecer produtos e serviços dos seus vizinhos próximos ao seu endereço.
<br/><br/>
É muito fácil!
<br/>
- Busque o que deseja.
<br/>
- Clique no produto ou serviço
<br/>
- Mande um Whats direto para o vendedor
<br/><br/>
Conheça mais sobre sua vizinhança:
<br/>
- Eventos próximos da sua casa;
<br/>
- Ajude uma causa social do seu bairro;
<br/>
- Pegue indicações dos seus vizinhos;
<br/>
- Monte SUA LOJINHA GRÁTIS por 7 dias.
<br/>
<br/>
Acesse <a target="_blank" href="http://www.conectavizinhos.com.br/novo">www.conectavizinhos.com.br/novo</a> e compre do comércio local. Faça essa economia girar!

<br/><br/> 
Abraços
<br/> 
Equipe EFV Vigilantes
<br/><br/><br/>
<img style='width:300px' src='http://www.conectavizinhos.com/images/logo.png'>


EOT;
        if (!$mail->send()) {
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = 'Message sent! Thanks for contacting us.';
        }
    } else {
        $msg = 'Share it with us!';
    }


    echo "<meta http-equiv='refresh' content=0;url='../contatorealizado.php'>";

mysqli_close($conn);
?>



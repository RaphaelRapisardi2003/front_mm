<?php
if(isset($_POST['submit'])){
	if(PHP_OS == "Linux") $quebra_linha = "\n"; //Se for Linux
    elseif(PHP_OS == "WINNT") $quebra_linha = "\r\n"; // Se for Windows
    else die("Este script nao esta preparado para funcionar com o sistema operacional de seu servidor");
    $pageForm = 'padrao';

    $nome           	= isset($_POST['nome']) && !empty($_POST['nome']) ? utf8_decode($_POST['nome']) : '';
    $telefone      = isset($_POST['telefone']) && !empty($_POST['telefone']) ? utf8_decode($_POST['telefone']) : '';
    $email_form         = isset($_POST['email_form']) && !empty($_POST['email_form']) ? utf8_decode($_POST['email_form']) : '';
    $mensagem       	= isset($_POST['mensagem']) && !empty($_POST['mensagem']) ? utf8_decode($_POST['mensagem']) : '';

    $assunto        = "Contato via Site";

    $date           = date("d/m/Y H:i:s");               //função para pegar a data de envio do e-mail
    $ip             = $_SERVER['REMOTE_ADDR'];           //função para pegar o ip do usuário
    $navegador      = $_SERVER['HTTP_USER_AGENT'];       //função para pegar o navegador do visitante
    $verifica_email ="^[a-z A-Z 0-9 _ - .]+[@]+[a-z A-Z 0-9 _ - .]+[.]+[a-z A-Z 0-9 _ - .]^";

    if( empty($erros) ){
    	$dominio = str_replace('www.', '', $dominio);

    	$phpmail = new PHPMailer();

        $phpmail->IsSMTP(); // envia por SMTP
        $phpmail->Port      = $port;
        $phpmail->Host      = $dominio; // SMTP servers
        $phpmail->SMTPAuth  = true; // Caso o servidor SMTP precise de autenticação
        $phpmail->Username  = $emailRemetente; // SMTP username
        $phpmail->Password  = $senhaEmail; // SMTP password

        $phpmail->IsHTML(true);
        $phpmail->From      = $emailRemetente;
        $phpmail->FromName  = $nome;
        $phpmail->Sender    = $emailRemetente;

	$phpmail->AddAddress($emailContato);
        //$phpmail->AddCC ('xxxxx@dominio.com');
        //$phpmail->AddBCC('xxxxx@dominio.com');
        $phpmail->AddReplyTo($email_form, $nome);
        $phpmail->Subject = $assunto;

        $phpmail->Body .= "<h2>Contato via site $nomeSite</h2>
        <div style=\"font: 12px calibri, arial, tahoma;\">
        	<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
        		<tr>
        			<td valign=\"top\" style=\"width: 160px;\">
        				<strong>
        					Nome:<br />
        					Telefone:<br />
        					Email:<br />
        					Mensagem:<br />
        				</strong>
        			</td>
        			<td valign=\"top\">
        				$nome<br />
        				$telefone<br />
        				$email_form<br />
        			</td>
        		</tr>
        	</table>
        	$mensagem<br />
        </div>
        <font color='#666666' size='1'><br /><br />Email enviado em: $date - IP: $ip <br /> (Enviado via SMTP)</font><br />";
        $send = $phpmail->Send();

        if($send) {
        	echo '<meta HTTP-EQUIV="Refresh" CONTENT="0;URL='.$urlAgradecimento.'">';

        	$nome = '';
			$telefone = '';
			$email_form = '';
			$mensagem = '';
        }
		if(!$send) {
			// mensagem que vai para o destinatario
        	$msg="
        	<h2>Contato via site $nomeSite</h2>
        	<div style=\"font: 12px calibri, arial, tahoma;\">
                <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                    <tr>
                        <td valign=\"top\" style=\"width: 160px;\">
                            <strong>
                                Nome:<br />
                                Telefone:<br />
                                Email:<br />
                                Mensagem:<br />
                            </strong>
                        </td>
                        <td valign=\"top\">
                            $nome<br />
                            $telefone<br />
                            $email_form<br />
                        </td>
                    </tr>
                </table>
                $mensagem<br />
            </div>
        	<font color='#666666' size='1'><br /><br />Email enviado em: $date - IP: $ip <br /> (Enviado deslogado)</font><br />";

        	/* Montando o cabeçalho da mensagem */
        	$headers = "MIME-Version: 1.1".$quebra_linha;
        	$headers .= "Content-type: text/html; charset=utf-8".$quebra_linha;
            // Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
        	$headers .= "From: \"$nomeSite\" <$emailRemetente>".$quebra_linha;
        	$headers .= "Return-Path: \"$nomeSite\" <$emailRemetente>".$quebra_linha;
            // Esses dois "if's" abaixo são porque o Postfix obriga que se um cabeçalho for especificado, deverá haver um valor.
            // Se não houver um valor, o item não deverá ser especificado.
        	#if(strlen($comcopia) > 0) $headers .= "Cc: ".$comcopia.$quebra_linha;
        	#if(strlen($comcopiaoculta) > 0) $headers .= "Bcc: ".$comcopiaoculta.$quebra_linha;
        	$headers .= "Reply-To: \"$nome\" <$email_form>".$quebra_linha;
            // Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)

        	/* Enviando a mensagem */
        	$mail = mail($emailContato, $assunto, $msg, $headers, "-r". $emailContato);

            // verifica se email foi enviado com sucesso
        	if($mail==TRUE) {
        		echo '<meta HTTP-EQUIV="Refresh" CONTENT="0;URL='.$urlAgradecimento.'">';

        		$nome = '';
                $telefone = '';
                $email_form = '';
                $mensagem = '';
        	} else {
        		echo '<div class="mensagem-formulario mensagem-formulario-erro">Email Falhou!</div>';
        	}
        }
    } else {
    	echo $erros;
    }

	$nome = utf8_encode($nome);
	$telefone = utf8_encode($telefone);
	$email_form = utf8_encode($email_form);
	$mensagem = utf8_encode($mensagem);
}
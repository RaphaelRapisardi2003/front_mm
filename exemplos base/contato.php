<?php
$h1           = 'Contato';
$description  = 'Entre em contato conosco e tire todas as suas dúvidas...';
include 'includes/head.php';
defined( 'CONFIG' ) || exit;

// ---------------------------------------------------
// Configurações do formulário integrado ao sistema
// ---------------------------------------------------
$ativar_script_formulario = false;
?>
</head>
<body>
	<? include 'includes/topo.php'; ?>
	<main>
		<div class="base">
			<div class="conteudo-box">
				<article class="conteudo">
					<?//=breadcrumb()?>
					<div class="formulario">
						<h1><a href="<?=$nomePagina?>" rel="bookmark" title="<?=$h1?>"><?=$h1?></a></h1>
						<p class="texto-detalhes">Por favor preencha os campos abaixo<br>para enviar sua mensagem</p>
						<form class="formulario" method="POST">
							<?php require_once 'includes/mail.php';?>

							<div class="box-campos-formulario">
								<label for="nome_formulario">Nome<span class="formulario-campo-obrigatorio">*</span></label>
								<input placeholder="Nome" id="nome_formulario" name="nome" type="text" value="<?php echo isset($nome) && !empty($nome) ? $nome : '';?>" />
								<div class="clear"></div>
							</div>
							<div class="box-campos-formulario">
								<label for="empresa_formulario">Empresa</label>
								<input id="empresa_formulario" placeholder="Empresa" name="empresa" type="text" value="<?php echo isset($empresa) && !empty($empresa) ? $empresa : '';?>"/>
								<div class="clear"></div>
							</div>
							<div class="box-campos-formulario">
								<label for="telefone_formulario">Telefone<span class="formulario-campo-obrigatorio">*</span></label>
								<input id="telefone_formulario" class="telefone-formulario tratar-telefone" placeholder="(__) ____ ____" name="telefone_form" type="text" maxlength="15" value="<?php echo isset($telefone_form) && !empty($telefone_form) ? $telefone_form : '';?>" />
								<div class="clear"></div>
							</div>
							<div class="box-campos-formulario">
								<label for="anexo_formulario">Anexo</label>
								<input id="anexo_formulario" placeholder="Anexo" name="arquivo" type="file" value="" />
								<div class="clear"></div>
							</div>
							<div class="box-campos-formulario">
								<label for="email_formulario">E-mail<span class="formulario-campo-obrigatorio">*</span></label>
								<input id="email_formulario" placeholder="Email" name="email_form" type="text" value="<?php echo isset($email_form) && !empty($email_form) ? $email_form : '';?>" />
								<div class="clear"></div>
							</div>
							<div class="box-campos-formulario">
								<label for="como_nos_conheceu_formulario">Como nos conheceu?<span class="formulario-campo-obrigatorio">*</span></label>
								<select id="como_nos_conheceu_formulario" name="como_nos_conheceu">
									<option value="">Selecione uma opção</option>
									<option value="Busca do Google" <?php echo isset($como_nos_conheceu) && $como_nos_conheceu === "Busca do Google" ? 'selected' : '';?>>Busca do Google</option>
									<option value="Outros Buscadores" <?php echo isset($como_nos_conheceu) && $como_nos_conheceu === "Outros Buscadores" ? 'selected' : '';?>>Outros Buscadores</option>
									<option value="Links Patrocinados" <?php echo isset($como_nos_conheceu) && $como_nos_conheceu === "Links Patrocinados" ? 'selected' : '';?>>Links patrocinados</option>
									<option value="Facebook" <?php echo isset($como_nos_conheceu) && $como_nos_conheceu === "Facebook" ? 'selected' : '';?>>Facebook</option>
									<option value="Twitter" <?php echo isset($como_nos_conheceu) && $como_nos_conheceu === "Twitter" ? 'selected' : '';?>>Twitter</option>
									<option value="Google+" <?php echo isset($como_nos_conheceu) && $como_nos_conheceu === "Google+" ? 'selected' : '';?>>Google+</option>
									<option value="Indicação de um amigo" <?php echo isset($como_nos_conheceu) && $como_nos_conheceu === "Indicação de um amigo" ? 'selected' : '';?>>Indicação de um amigo</option>
									<option value="Outros" <?php echo isset($como_nos_conheceu) && $como_nos_conheceu === "Outros" ? 'selected' : '';?>>Outros</option>
								</select>
								<div class="clear"></div>
							</div>
							<div class="box-campos-formulario">
								<label for="mensagem_formulario">Mensagem<span class="formulario-campo-obrigatorio">*</span></label>
								<textarea id="mensagem_formulario" placeholder="Mensagem" name="mensagem" cols="37" rows="10"><?php echo isset($mensagem) && !empty($mensagem) ? $mensagem : '';?></textarea>
								<div class="clear"></div>
							</div>

							<div class="box-campos-formulario captcha-form">
								<input type="text" name="captcha" placeholder="Código de segurança" value="" size="20" required />
								<img src="captcha/captcha.php" alt="código captcha" />
							</div>


							<div class="box-campos-formulario align-right">
								<div class="box-btn-enviar-dados-formulario">
									<input type="submit" name="submit" class="btn-enviar-dados-formulario" value="ENVIAR">
								</div>
							</div>
							<!--
							<div class="box-campos-formulario">
								<label>Os campos com (<span class="formulario-campo-obrigatorio">*</span>) são obrigatórios.</label>
								<div class="clear"></div>
							</div>
						-->
					</form>
				</div>
				<div class="mapa-contato">
					<h2>Localização</h2>
					<p class="texto-detalhes"><?=$rua?> - <?=$bairro?><br /><?=$cidadeUF?> - <?=$cep?></p>
					<div class="mapa-overlay">
						<iframe width="320" height="220" src="<?php echo eComercial($urlGoogleMaps)?>" class="mapa-do-google"></iframe>
					</div>
					<br />
					<p>Exibir no <a href="<?php echo eComercial($urlGoogleMaps)?>" target="_blank">Google Mapas</a></p>
					<h3><?=$nomeSite?> - <?=$slogan?></h3>
					<p>Email: <a href="mailto:<?=$email?>"><?=$email?></a></p>
					<p>
						Telefone:
						<?php if (isset($telefone) && ($telefone != '')) {
							echo $ddd.' '.telefone($telefone);
						} ?>
						<?php if (isset($telefone2) && ($telefone2 != '')) {
							echo ' / '.$ddd.' '.telefone($telefone2).''.$whatsapp;
						} ?>
						<?php if (isset($telefone3) && ($telefone3 != '')) {
							echo ' / '.$ddd.' '.telefone($telefone3);
						} ?>
						<?php if (isset($telefone4) && ($telefone4 != '')) {
							echo ' / '.$ddd.' '.telefone($telefone4);
						} ?>
					</p>
					<!--<p>Endereço: <?=$rua?> - <?=$bairro?> - <?=$cidadeUF?> - <?=$cep?></p>-->
				</div>
				<div class="clear"></div>
			</article>
		</div>
	</div>
</main>
<? include('includes/rodape.php');?>
</body>
</html>
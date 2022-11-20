<!DOCTYPE html>
<html lang="pt-br">
<?php 
  $h1 = "- Cadastro"
?>


<?php include 'includes/head.php';?>

<body>
  <?php include 'includes/header.php'; ?>

  <main class="container flex flex--coluna flex--centro">
    <section class="cartao">
        <form action="cadastrar.php" method="POST" class="formulario flex flex--coluna">
          <div class="input-container">
              <input name="nome" id="nome" class="input" type="text" placeholder="Nome" data-tipo="nome" required>
              <label class="input-label" for="nome">Nome</label>
          </div>
          <div class="input-container">
              <input name="usuario" id="usuario" class="input" type="email" placeholder="Email" data-tipo="email" required>
              <label class="input-label" for="email">Email</label>
          </div>
          <div class="input-container">
              <input name="senha" id="senha" class="input" type="password" placeholder="Senha" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?!.*[ !@#$%^&*_=+-]).{6,12}$" title="A senha deve conter entre 6 a 12 caracteres, deve conter pelo menos uma letra maiúscula, um número e não deve conter símbolos." data-tipo="senha" required>
              <label class="input-label" for="senha">Senha</label>
          </div>
            <button class="botao">Cadastrar</a>
        </form>
    </section>
</main>
</body>
<script src="../js/cadastro.js" type="module"></script>
</html>
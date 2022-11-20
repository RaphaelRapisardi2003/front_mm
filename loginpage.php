<!DOCTYPE html>
<html>
<?php 
  $h1 = " - Relógio"
?>

<?php include 'includes/head.php'; ?>
 
<body>

  <?php include 'includes/header.php'; ?>

  <main>
  <div class="container-login">
    <div class="img">
      <img src="images/time.svg" />
    </div>
    <div class="login-content">
      <form class="formulario" action="login.php" method="POST">
        <?php require_once 'includes/bd.php';?>
        <h2 class="title">Bem-vindo</h2>
        <div class="input-div one">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>
          <div class="div">
            <h5>E-mail</h5>
            <input name="usuario" class="input is-large" type="email" placeholder="Email" required>
          </div>
        </div>
        <div class="input-div pass">
          <div class="i">
            <i class="fas fa-lock"></i>
          </div>
          <div class="div">
            <h5>Password</h5>
            <input name="senha" class="input is-large" type="password" placeholder="Senha">
          </div>
        </div>
        <a href="../pages/cadastro.html">Primeira vez? faça já o cadastro</a>
        <input type="submit" class="btn" value="Login" />
      </form>
    </div>
  </div>
  </main>
</body>
</html>

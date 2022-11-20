<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MM produtos <?=$h1?></title>

  <!-- Links CSS-->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/components/colors.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/components/header.css">
  <link rel="stylesheet" href="css/components/colors.css">
  <link rel="stylesheet" href="css/cadastro.css">
  <link rel="stylesheet" href="css/carrinho.css"> 

  <!-- Links fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  
  <script src="./src/script.js"></script>
  <script src="https://kit.fontawesome.com/7519784cd5.js" crossorigin="anonymous"></script>
</head>
<body>

  <?php include 'includes/header.php'; ?>

  <!-- Main Starts-->

  <section class="home" id="home">
    <div class="container">
      <div class="row alinha-vertical">
        <div class="home-content ajust-item-banner">
          <h1 class="title">MM <span>Watch</span> Store</h1>
          <p>Os Relógios da MM Produtos são acessórios que dão um upgrade automático em qualquer visual de respeito. Tanto no dia a dia e ocasiões informais quanto numa pegada mais tradicional, perfeitos para serem usado no trabalho ou em ocasiões formais.</p>
          <p class="promo">Compre hoje e ganhe 20% de desconto</p>
          <button>Comprar agora</button>
        </div>  
        <div class="watch-photo ajust-item-banner">
          <img src="images/watch.png" alt="watch">
        </div>          
      </div>
  </section>

  <section class="shop" id="shop">
      <div class="product-card">
        <img src="images/watch.png" alt="" srcset="">
        <div class="card-content">
          <h4>Rolex</h4>
          <h3>Relógio Masculino Couro</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio deserunt debitis, pariatur</p>
          <ul>
            <li class="card-price">R$ 1000,00</li>
            <li><button><i class="fa fa-bag-shopping"></i></button></li>
          </ul>
        </div>
      </div>
      <div class="product-card">
        <img src="images/watch.png" alt="" srcset="">
        <div class="card-content">
          <h4>Rolex</h4>
          <h3>Relógio Masculino Couro</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio deserunt debitis, pariatur</p>
          <ul>
            <li class="card-price">R$ 1000,00</li>
            <li><button><i class="fa fa-bag-shopping"></i></button></li>
          </ul>
        </div>
      </div>
      <div class="product-card">
        <img src="images/watch.png" alt="" srcset="">
        <div class="card-content">
          <h4>Rolex</h4>
          <h3>Relógio Masculino Couro</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio deserunt debitis, pariatur</p>
          <ul>
            <li class="card-price">R$ 1000,00</li>
            <li><button><i class="fa fa-bag-shopping"></i></button></li>
          </ul>
        </div>
      </div>
      <div class="product-card">
        <img src="images/watch.png" alt="" srcset="">
        <div class="card-content">
          <h4>Rolex</h4>
          <h3>Relógio Masculino Couro</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio deserunt debitis, pariatur</p>
          <ul>
            <li class="card-price">R$ 1000,00</li>
            <li><button><i class="fa fa-bag-shopping"></i></button></li>
          </ul>
        </div>
      </div>
  </section>

  <?php include 'includes/instagram.php';?>

  <footer>
    <div class="footer-text">
      <p>Todos os direitos reservados &copy;</p>
    </div>
  </footer>




</body>
</html>
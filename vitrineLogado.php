<?php session_start(); ?>

<?php include 'head.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
  <?php if(isset($_SESSION['logado'])) {
    include 'navbarlogado.php';
  }else {
    include 'navbar.php';
  } 
  // print_r($_SESSION);
   ?>

  <main>
    <button class="btn" onclick="window.location.href = 'cadastrarProduto.php';" style="margin-left: 43%; margin-bottom: 2%; margin-top: 1%;" >CADASTRAR PRODUTO</button>
  </main>



    <?php include 'footer.php'; ?>   
</body>
</html>

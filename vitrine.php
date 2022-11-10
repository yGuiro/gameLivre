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
    <button type="button" class="btn" style="margin-left: 43%; margin-bottom: 2%; margin-top: 1%;" id="vtr">CADASTRAR PRODUTO</button>
  </main>

    <?php include 'footer.php'; ?>   
</body>
</html>

<script src="./js/jquery-3.6.1.min.js"></script>
<script src="./js/sweetalert2.all.min.js"></script>
<script>
  $('#vtr').on('click', function() {
    Swal.fire({
        icon: 'error',
        title: 'Erro',
        text: 'Você precisa estar logado para cadastrar um produto',
        showConfirmButton: true,
        // timer: 2000
      })
  });

</script>

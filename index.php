<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt_BR">
<!-- head -->
<?php include 'head.php'; ?>

<body>
    
    <!-- navbar -->
    <?php if(isset($_SESSION['logado'])) {
      include 'navbarlogado.php';
    }else {
      include 'navbar.php';
    } 
      // print_r($_SESSION); 
      ?>
    
    <!-- Carrossel -->
    <br><br>
    <main>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
          <a href="vitrine.php">
            <img class="d-block" src="/TCC/img/img1.png" alt="Primeiro Slide">
          </a>
          </div>
          <div class="carousel-item">
          <a href="vitrine.php">
            <img class="d-block" src="/TCC/img/img4.jpg" alt="Segundo Slide">
          </a>
          </div>
          <div class="carousel-item">
            <a href="vitrine.php">
              <img class="d-block" src="/TCC/img/img3.png" alt="Terceiro Slide">
            </a>
            <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>
      </div>
    </main><br><br><br>
    <!-- footer -->
    <?php include 'footer.php'; ?>

</body>
</html>
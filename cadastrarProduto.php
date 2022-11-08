<?php session_start(); ?>

<?php include 'head.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <script src="jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <style>
        .full {
          text-align: center;
          background-color: #ECF0F1;
          border: 2px solid transparent;
          border-radius: 3px;
          font-size: 16px;
          font-weight: 200;
          padding: 5px 0;
          width: 250px;
          transition: border .5s;
          color: black;
      }

      .slc {
        font-size: 16px;
        font-weight: 200;
        border: 2px solid #ECF0F1;
        border-radius: 3px;
        padding: 5px 0;
        width: 250px;
        margin-bottom: 3%;
        color: black;
      }

      #imgProduto{
        background: none;
        color: white;
      }
    </style>
</head>
<body>
<?php if(isset($_SESSION['logado'])) {
    include 'navbarlogado.php';
  }else {
    include 'navbar.php';
  } 
  // print_r($_SESSION);
   ?>
<main class="box" style="background-color: black;"> 
    <img src="/TCC/img/logo.png" alt="logo" style="width: 20%;">
    <form action="./php/cadastroProduto.php" class="login" method="post">
      <h1 class="form-title" style="color:white;">Game Livre</h1>
      <h5 class="form-subtitle" style="color:white;">Cadastro de produto</h5>

      <p class="input-row">
        <input type="text" placeholder="Nome do produto" class="full" name="productName" require>
      </p>

      
      <select name="proposalType" class="slc">
          <option value="Trocar">Trocar</option>
          <option value="Vender">Vender</option>
        </select>
        
        <select name="productType" class="slc">
            <option value="Jogo">Jogo</option>
            <option value="Periferico">Periférico</option>
            <option value="Acessorio">Acessórios</option>
            <option value="Videogame">Video-game</option>
        </select>

        <p>
            <!-- trocar para pegar a data atual pelo banco -->
            <input type="date" name="date" id="">
        </p>
        
        
        <p class="input-row">
            <textarea name="description" id="" cols="27" rows="7" placeholder="Descrição do produto..."></textarea>
        </p>

        <p>
            <input type="file" name="itemsIMG" id="imgProduto">
        </p>
        <p class="input-row">
        <!-- <input type="submit" value="CADASTRAR" class="btn"> -->
        <button type="submit" id="btnItem" class="btn btn-lg">CADASTRAR</button>
      </p>

    </form>
    
  </main>
</body>
<?php include 'C:\xampp\htdocs\TCC\php\cadastroProduto.php'; ?>
<?php include 'footer.php'; ?>  
</html>

<script src="./js/jquery-3.6.1.min.js"></script>
<script src="./js/sweetalert2.all.min.js"></script>
<script>

</script>
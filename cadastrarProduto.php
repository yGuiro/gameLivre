<?php session_start(); ?>

<?php include 'head.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
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
      }

      .slc {
        font-size: 16px;
        font-weight: 200;
        border: 2px solid #ECF0F1;
        border-radius: 3px;
        padding: 5px 0;
        width: 250px;
        margin-bottom: 3%;
        
      }

      #imgProduto{
        background: none;
      }

      #imgProduto {
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
    <form action="./php/cadastro.php" class="login" method="post">
      <h1 class="form-title" style="color:white;">Game Livre</h1>
      <h5 class="form-subtitle" style="color:white;">Cadastro de produto</h5>

      <p class="input-row">
        <input type="text" placeholder="Nome do produto" class="full" name="productName" require>
      </p>

      
      <select name="proposalType" class="slc">
          <option value="">Trocar</option>
          <option value="">Vender</option>
        </select>
        
        <select name="productType" class="slc">
            <option value="">Jogo</option>
            <option value="">Periférico</option>
            <option value="">Acessórios</option>
            <option value="">Video-game</option>
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
        <input type="submit" value="CADASTRAR" class="btn">
      </p>

    </form>
    
  </main>
</body>
<?php include 'C:\xampp\htdocs\TCC\php\cadastroProduto.php'; ?>
<?php include 'footer.php'; ?>  
</html>
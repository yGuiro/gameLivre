<?php session_start(); ?>
<?php  include 'head.php'; ?>

<?php if(isset($_SESSION['logado'])) {
      include 'navbarlogado.php';
    }else {
      include 'navbar.php';
    } 
      // print_r($_SESSION); 
      ?>

<script defer src="/TCC/js/cep.js"></script>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        /* display: none; <- Crashes Chrome on hover */
        -webkit-appearance: none;
        margin: 0;
        /* <-- Apparently some margin are still there even though it's hidden */
     }

    input[type=number] {
        -moz-appearance: textfield;
        /* Firefox */
      }

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

    .aFull {
          text-align: center;
          background-color: #ECF0F1;
          border: 2px solid transparent;
          border-radius: 3px;
          font-size: 16px;
          font-weight: 200;
          padding: 5px 0;
          width: 180px;
          transition: border .5s;
        }

    .nFull {
          text-align: center;
          background-color: #ECF0F1;
          border: 2px solid transparent;
          border-radius: 3px;
          font-size: 16px;
          font-weight: 200;
          padding: 5px 0;
          width: 65px;
          transition: border .5s;
      }

    .btn {
        font-size: 25px;
        background-color: #9370DB;
      }

      .eye {
        width: 30px;
        margin-left: 15px;
        cursor: pointer;
      }

      #senha1 {
        margin-left: 50px;
      }

  </style>
  <script>  
    function mostrarSenha() {
      let tipo = document.getElementById('senha1');
      if (tipo.type == "password") {
        tipo.type = "text";
      } else {
        tipo.type = "password";
      }
    }
  </script>
  <title>Cadastro</title>
</head>
<body>
  <main class="box" style="background-color: black;"> 
    <img src="/TCC/img/logo.png" alt="logo" style="width: 20%;">
    <form class="login" method="post" id="form2">
      <h1 class="form-title">Game Livre</h1>
      <h5 class="form-subtitle">Crie sua conta!</h5>

      <p class="input-row">
        <input type="text" placeholder="Nome Completo" class="full" name="nome" required>
      </p>

      <p class="input-row">
        <input type="text" placeholder="Nome De Usuario" name="username" class="full" requiredd>
      </p>

      <p class="input-row">
        <input type="email" placeholder="Email" name="email" class="full" requiredd>
      </p>

      <p class="input-row">
        <input type="password" placeholder="Senha" name="senha" class="full" required id="senha1">
        
        <i  class="fa fa-eye" aria-hidden="true"><img onclick="mostrarSenha()" src="/TCC/img/eye.png" id='senha' alt="" class="eye"></i>
      </p>

      <p class="input-row">
      <input type="text" placeholder="CEP (APENAS N??MEROS)" name="cep" class="full cep" required id="cep">
      </p>

      <p class="input-row">
        <input type="text" placeholder="Rua" id="rua" class="aFull" required>

        <input type="number" placeholder="Num." required class="nFull">
      </p> 

      <p class="input-row">
        <input type="text" placeholder="Complemento" class="full">
      </p> 

      <input type="text" placeholder="Cidade" id="cidade" class="aFull" required>

      <input type="text" placeholder="UF" id="uf" class="nFull" require>
      </p>

      <p class="input-row">
      <input type="text" placeholder="CPF (APENAS N??MEROS)" name="cpf" class="full cpf" required>
      </p>

      <p class="input-row">
      <input type="text" placeholder="Celular (APENAS N??MEROS)" name="phoneNumber" class="full phone_with_ddd" required>
      </p>

      <p class="input-row">
      <button type="button" id="btnItem" class="btn btn-lg">CADASTRAR</button>
      </p>

    </form>
    <p style="color: white;">J?? possui uma conta? Fa??a o login! <a href="login.php">Login</a></p>
    
  </main>
</body>
</html>

<script src="./js/jquery-3.6.1.min.js"></script>
<script src="./js/sweetalert2.all.min.js"></script>
<script src="./js/jquery.mask.min.js"></script>
<script src="./js/masks.js"></script>
<script>
  $('#btnItem').on('click', function(e) {

    const formdata = $('#form2').serialize();
    
    $.ajax({
      type: 'POST',
      url: './php/cadastro.php',
      data: formdata,
      dataType: 'json'
    }).done(function(res) {
      Swal.fire({
        icon: res.icon,
        title: res.title,
        text: res.text,
        showConfirmButton: true,
        // timer: 2000
      }).then(function() {
        if (res.cadastro) {
          window.location.href = './login.php';
        } else {
          //window.location.reload();
        }
      })
    })
  });
</script>


<?php include 'C:\xampp\htdocs\TCC\php\cadastro.php'; ?>
<?php include 'footer.php'; ?>
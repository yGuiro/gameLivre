<?php include 'head.php'; ?>
<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    #email {
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

    #senha {
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
  </style>
  <title>Login</title>
</head>
<body>
  <main class="box" style="background-color: black;">
    <img src="/TCC/img/logo.png" alt="logo" style="width: 20%;">
    <form class="login" id="form">
      <h1 class="form-title">Game Livre</h1>
      <h5 class="form-subtitle">Faça seu login</h5>

      <p class="input-row">
        <input type="email" placeholder="Email" name="email" id="email" class="login">
      </p>

      <p class="input-row">
        <input type="password" placeholder="Senha" name='senha' id='senha' class="login">
      </p>
      
      <p class="input-row" >
        <button type="button" id="btnLogin" class="btn btn-lg">Entrar</button>
      </p>
    </form>
    <p style="color: white;">Não possui conta? Cadastre-se <a href="cadastro.php">Cadastrar</a></p>
  </main>
</body>
</html>

<?php include 'footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  // $('.class') para localizar nome classes
  // $('#id') para localizar nome id
  // $(from) localizar elemento
  $('#btnLogin').click(function() {
    //Separando os inputs do formulario
    const form = $('#form').serialize();
    // Ajax
    $.ajax({
      type: 'POST',
      url: './php/login.php',
      data: form,
      dataType: 'JSON'
    }).done(function(res) {
      Swal.fire({
        icon: res.icon,
        title: res.title,
        text: res.text,
        showConfirmButton: false,
        timer: 2000
      }).then(function() {
        if (res.login) {
          window.location.href = './index.php';
        } else {
          window.location.reload();
        }
      })
    })
  });
</script>
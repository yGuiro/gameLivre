<?php  include 'head.php'; ?>
<?php  include 'navbar.php'; ?>
<script defer src="/TCC/js/cep.js"></script>

<main class="box" style="background-color: black;"> 
  <img src="/TCC/img/logo.png" alt="logo" style="width: 20%;">
  <form action="" class="login">
    <h1 class="form-title">Game Livre</h1>
    <h5 class="form-subtitle">Crie uma conta grátis!</h5>
    <p class="input-row">
      <input type="text" placeholder="Nome Completo" style="
        text-align: center;
        background-color: #ECF0F1;
        border: 2px solid transparent;
        border-radius: 3px;
        font-size: 16px;
        font-weight: 200;
        padding: 5px 0;
        width: 250px;
        transition: border .5s;">
    </p>
    <p class="input-row">
      <input type="email" placeholder="Email" style="
        text-align: center;
        background-color: #ECF0F1;
        border: 2px solid transparent;
        border-radius: 3px;
        font-size: 16px;
        font-weight: 200;
        padding: 5px 0;
        width: 250px;
        transition: border .5s;">
    </p>
    <p class="input-row">
      <input type="password" placeholder="Senha" style="
        text-align: center;
        background-color: #ECF0F1;
        border: 2px solid transparent;
        border-radius: 3px;
        font-size: 16px;
        font-weight: 200;
        padding: 5px 0;
        width: 250px;
        transition: border .5s;">
    </p>
    <p class="input-row">
      <input type="password" placeholder="Confirmar Senha" style="
        text-align: center;
        background-color: #ECF0F1;
        border: 2px solid transparent;
        border-radius: 3px;
        font-size: 16px;
        font-weight: 200;
        padding: 5px 0;
        width: 250px;
        transition: border .5s;">
    </p>
    <p class="input-row">
    <input type="text" placeholder="CEP (APENAS NÚMEROS)" id="cep"style="
        text-align: center;
        background-color: #ECF0F1;
        border: 2px solid transparent;
        border-radius: 3px;
        font-size: 16px;
        font-weight: 200;
        padding: 5px 0;
        width: 250px;
        transition: border .5s;">
    </p>
    <p class="input-row">
      <input type="text" placeholder="Rua" id="rua" style="
        text-align: center;
        background-color: #ECF0F1;
        border: 2px solid transparent;
        border-radius: 3px;
        font-size: 16px;
        font-weight: 200;
        padding: 5px 0;
        width: 180px;
        transition: border .5s;">
      <input type="number" placeholder="Num." style="
        text-align: center;
        background-color: #ECF0F1;
        border: 2px solid transparent;
        border-radius: 3px;
        font-size: 16px;
        font-weight: 200;
        padding: 5px 0;
        width: 65px;
        transition: border .5s;">
    </p>  
    <p class="input-row">
      <input type="text" placeholder="Complemento" style="
        text-align: center;
        background-color: #ECF0F1;
        border: 2px solid transparent;
        border-radius: 3px;
        font-size: 16px;
        font-weight: 200;
        padding: 5px 0;
        width: 250px;
        transition: border .5s;">
    </p>    
    <input type="text" placeholder="Cidade" id="cidade" style="
        text-align: center;
        background-color: #ECF0F1;
        border: 2px solid transparent;
        border-radius: 3px;
        font-size: 16px;
        font-weight: 200;
        padding: 5px 0;
        width: 180px;
        transition: border .5s;">
    <input type="text" placeholder="UF" id="uf" style="
        text-align: center;
        background-color: #ECF0F1;
        border: 2px solid transparent;
        border-radius: 3px;
        font-size: 16px;
        font-weight: 200;
        padding: 5px 0;
        width: 65px;
        transition: border .5s;">
    </p>
    <p class="input-row">
    <input type="number" placeholder="CPF (APENAS NÚMEROS)" style="
        text-align: center;
        background-color: #ECF0F1;
        border: 2px solid transparent;
        border-radius: 3px;
        font-size: 16px;
        font-weight: 200;
        padding: 5px 0;
        width: 250px;
        transition: border .5s;">
    </p>
    <p class="input-row">
      <input type="submit" value="CADASTRAR" class="btn" style="
      font-size: 25px;
      background-color: #9370DB;
      ">
    </p>
  </form>
  <p style="color: white;">Já possui uma conta? Faça o login! <a href="login.php">Login</a></p>
</main>

<?php  include 'footer.php'; ?>
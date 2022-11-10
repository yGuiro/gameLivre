<?php include 'head.php'; ?>

<header>
        <div id='navbar'>
            <ul>
                <li><a href="index.php"><img src="/TCC/img/logo.png" class="logo"></a></li>
                <?php 
                echo '<li><a href="perfil.php">'. $_SESSION['logado'] .'</a></li>'
                ?>
                <li><a href="#">Minhas Propostas</a></li>
                <li><a href="vitrine.php">Vitrine</a></li>
                <li><a href="#">Amigos</a></li>
                <li><a href="sair.php">Sair</a></li>
            </ul>
        </div>
</header>
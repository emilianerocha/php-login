<?php
session_start();

$clientes = isset($_SESSION['clientes']) ? $_SESSION['clientes'] : array();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gerenciamento de Usuários</title>
</head>
<body>
    <h1>Gerenciamento de Usuários</h1>
    
    <?php
    if (isset($_GET['cadastro_sucesso']) && $_GET['cadastro_sucesso'] == 1) {
        echo "Cadastro realizado com sucesso!";
    }
    ?>

    <ul>
        <?php
        foreach ($clientes as $cliente) {
            echo "<li>Nome de Usuário: " . $cliente["username"] . " - E-mail: " . $cliente["email"] . "</li>";
        }
        ?>
    </ul>
</body>
</html>



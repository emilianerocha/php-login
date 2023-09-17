<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $login_sucesso = false;

        if (isset($clientes) && is_array($clientes)) {
            foreach ($clientes as $cliente) {
                if ($cliente["username"] === $username && $cliente["password"] === $password) {
                    $login_sucesso = true;
                    break;
                }
            }
        } else {
            echo "Erro: Nenhum cliente encontrado.";
        }

        if ($login_sucesso) {
            header("Location: gerenciamento.php");
        } else {
            echo "Login incorreto. Por favor, verifique suas informações.";
        }
        
        session_start();

        if ($login_sucesso) {
            header("Location: gerenciamento.php");
            exit;
        } else {
            echo "Login incorreto. Por favor, verifique suas informações.";
        }


    }
    ?>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        Nome de Usuário: <input type="text" name="username"><br>
        Senha: <input type="password" name="password"><br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>

</body>
</html>

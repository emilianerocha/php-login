<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        if (filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($password) >= 8) {
            $cliente = array("username" => $username, "email" => $email, "password" => $password);

            $clientes[] = $cliente;

            echo "Cadastro bem-sucedido! <a href='login.php'>Clique aqui para fazer login</a>";
        } else {
            echo "Dados incorretos. Certifique-se de que o e-mail é válido e a senha tem pelo menos 8 caracteres.";
        }
    }
    ?>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        Nome de Usuário: <input type="text" name="username"><br>
        Endereço de E-mail: <input type="email" name="email"><br>
        Senha (mínimo de 8 caracteres): <input type="password" name="password"><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>

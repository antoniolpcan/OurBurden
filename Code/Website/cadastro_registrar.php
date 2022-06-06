<?php

require 'ClassDatabase.php';

$name = $_POST['name'];
$username = $_POST['username'];
$contato = $_POST['contato'];
$pais = $_POST['pais'];
$cidade = $_POST['cidade'];
$password = $_POST['password'];
//$foto_perfil = 'default.jpg';

$db = new BancoDados();

$log = $db->adicionar_user($username, $password, $name, $contato, $cidade, $pais);
$login = $db->login_site($username, $password);

?>


<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href='style/style.css'>

</head>
<body class="cadastrar">
    <header>
        <ul>
            <a href="#"><li>Home</li></a>
            <a href="#"><li>Calculadora De CO2</li></a>
            <a href="#"><li>Sobre Nós</li></a>
            <a href="#"><li>Acervos</li></a>
            <a href="#" id="title"><li>Cadastre-Se</li></a>
        </ul>
    </header>
    <main>
        <div class="container">
            <aside>
                <div class="secao">
                    <img src="image/Terra.png">
                    <br><br><br>
                    <h1>Faça a diferença!</h1>
                    <br><br>
                    <h3>Clique em login e vamos iniciar</h3>
                </div>
            </aside>

            <div class="cadastro">
                <br><br><br><br><br><br><br>
                <h1><?php echo $log; ?></h1>
                <br><br><br>
                
                <form action="./html/login.html" >
                        <button>LOGIN</button>
                </form>

                <form action="./html/cadastro.html" >        
                        <br>
                        <button>VOLTAR</button>
                </form>
            </div>         
            
        </div>
    </main>
    <footer class='centro'>Desenvolvimento Fatec &copy; 2022</footer>
    

</body>
</html>
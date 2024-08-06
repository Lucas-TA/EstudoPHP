<?php
    //$_COOKIE
        //Para criar um cookie use setcookie
            //setcookie('name', 'Lucas', strtotime('+5 days'));
        //Para capturar o cookie use $_COOKIE[];
            //echo $_COOKIE['name'];
        //Para verificar se o Cookie existe use o isset:
            //if (isset($_COOKIE['teste'])) {
            //    echo $_COOKIE['teste'];
            //} else {
            //    echo 'Não é um cookie';
            //}
        //Para excluir o cookie:
            //setcookie('name', 'Lucas', strtotime('-5 days'))
    //$_SESSION
        //Para criar uma sessão:
            //session_start();
            //$_SESSION['name'] = 'Lucas';
                //echo $_SESSION['name'];
                //echo (isset($_SESSION['name'])) ? 'Sessão existe ' .$_SESSION['name'] : 'Sessão não existe';
        //Para excluir sessões
            //unset($_SESSION['name']);
        //ou
            //session_destroy(); exclui todas as sessões existentes;
        //Para gerar um novo id de sessão:
            //session_regenerate_id(); Toda vez que atualizar a página, o id muda
    //$_ENV
        //Instalar o seguinte repositório para configurar as variáveis de ambiente
        //https://github.com/vlucas/phpdotenv
        //Para utilizar as variáveis de ambiente, acrescente o código a seguir:
        //    require '../vendor/autoload.php';
        //
        //    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        //    $dotenv->load();
        //
        //    var_dump($_ENV['KEY']);
    //$_FILES

    //$_GET
        // seusite.com.br?id=28&name=lucas $_GET pega as informações da query string, como nesse caso o id e o name

    //$_POST pega os dados do header

    //$_REQUEST pega os dados do GET e/ou do POST

    //$_SERVER e
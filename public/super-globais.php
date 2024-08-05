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
        //$_SESSION['name'] = 'Lucas';
            echo $_SESSION['name'];

    //$_ENV

    //$_FILES

    //$_GET seusite.com.br?id=28&name=lucas get pega o id e o name da query string

    //$_POST pega os dados do header

    //$_REQUEST pega os dados do GET e/ou do POST

    //$_SERVER e
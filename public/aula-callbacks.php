<?php
    //Callback:
    //O que  um callback?
    //Callback são funções passadas como parâmetros para outras funções.
        //    function teste($name)
        //    {
        //        return 'Olá, meu nome é ' . $name;
        //    }
        //    function teste2($callback)
        //    {
        //        return $callback('Alexandre');
        //    }
        //    $user = 'Joao';
        //    echo teste2('teste');
    //Verificar se é callback com is_callable
        //        function teste($name)
        //        {
        //            return 'Olá, meu nome é ' . $name;
        //        }
        //        function teste2($callback)
        //        {
        //           if (is_callable($callback)) {
        //               return $callback('Alexandre');
        //           } else {
        //               echo 'Não é um callback';
        //           }
        //        }
        //        $user = 'Joao';
        //        echo teste2('teste');
    //call_user_func
        //function teste($name)
        //{
        //    return 'Olá meu nome é ' . $name;
        //}
        //echo call_user_func('teste', 'Lucas');
    //Chamar primeiro parâmetro com array caso for um objeto com método estático ou não e queira usar um método dele.
        //    class User
        //    {
        //        public function teste($name, $age)
        //        {
        //            return 'Olá meu nome é ' . $name . ' e minha idade é ' .$age;
        //        }
        //    }
        //    $user = new User;
        //
        //    echo call_user_func([$user, 'teste'], 'Lucas', 38);
    //call_user_fun dentro de outras funções
        //    function teste($name)
        //    {
        //        return 'teste ' . $name;
        //    }
        //    function teste2($callback)
        //    {
        //        return call_user_func($callback, 'Lucas');
        //    }
        //    echo teste2('teste');
    //__invoke pode ser passado como callback
        //    class User
        //    {
        //        public function __invoke()
        //        {
        //            return 'teste';
        //        }
        //    }
        //    $user = new User;
        //
        //    function teste($callback)
        //    {
        //        return $callback();
        //    }
        //    echo teste($user);
    //call_user_func_array
            //    function teste($name, $age)
            //    {
            //        return 'Olá meu nome é ' .$name . 'e minha idade é ' .$age;
            //    }
            //    echo call_user_func_array('teste', ['Lucas', '24 ']);
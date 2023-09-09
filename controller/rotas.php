<?php
class Rotas {
    private $painel = 'painel';
    private $action;

    public function getAcao() : array 
    {
        $url = isset($_GET['url']) ? $_GET['url'] : '';
        $parts = explode('/', $url);
        
        return $parts;    
    }

    public static function home()
    {
        include('home.php');
    }

    public static function login()
    {
        include('index2.php');
    }

    public static function painel()
    {
        include('painel.php');
    }

    public static function paginaNaoEncontrada()
    {
        echo '404 - Página não encontrada.';
    }

    public static function destroiSessao()
    {
        session_destroy();
        self::login();
    }
}



<?php

require_once 'Lib/RoteadorAbstract.php';

class Rotas extends RoteadorAbstract
{
    public function __construct()
    {
        $this->adicionarRota('GET', '/contatos', \Src\ContatoController::class, 'index');
        $this->adicionarRota('GET', '/contatos/{id}', \Src\ContatoController::class, 'show');
        $this->adicionarRota('POST', '/contatos', \Src\ContatoController::class, 'store');
        $this->adicionarRota('PUT', '/contatos/{id}', \Src\ContatoController::class, 'update');
        $this->adicionarRota('DELETE', '/contatos/{id}', \Src\ContatoController::class, 'destroy');
    }
}

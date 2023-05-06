<?php

require '../vendor/autoload.php';

// require '../bootstrap.php';

// Incluir arquivo de roteamento
require_once '../routes.php';

// Executar rota correspondente
dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

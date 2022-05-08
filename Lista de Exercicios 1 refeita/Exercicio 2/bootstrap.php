<?php

require_once __DIR__."/vendor/autoload.php";

   //Aqui é recuperado o que foi digitado pelo usuario e qual méthodo HTTP ele utilizou

   $method = $_SERVER["REQUEST_METHOD"];
   $path = $_SERVER["PATH_INFO"];

   //Instanciar classe Router

   $router = new Exercicio2\Php\Router($method, $path);

   //Adicionar as rotas válidas a baixo

   $router->get("/index", "Exercicio2\Php\controller\ExercicioController::exibir");

   $router->post("/resultado","Exercicio2\Php\controller\ExercicioController::exibirResultado");

   //Adicionar as rotas válidas a cima

   $result = $router->handler();

   if(!$result){
       http_response_code(404);
       echo "Página não encontrada";
       die();
   }

   echo $result($router->getParams());

?>
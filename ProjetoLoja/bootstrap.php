<?php

require_once __DIR__."/vendor/autoload.php";

   //Aqui é recuperado o que foi digitado pelo usuario e qual méthodo HTTP ele utilizou

   $method = $_SERVER["REQUEST_METHOD"];
   $path = $_SERVER["PATH_INFO"];

   //Instanciar classe Router

   $router = new Aluno\ProjetoLoja\Router($method, $path);

   //Adicionar as rotas válidas a baixo

   $router->get("/ola-mundo", function(){
       return "Olá Mundo!";
   });

   $router->get("/exemplo", "Aluno\ProjetoLoja\controller\ExercicioController::exibir");

   $router->post("/exemplo-resultado","Aluno\ProjetoLoja\controller\ExercicioController::exibirResultado");

   $router->get("/cliente/nome","Aluno\ProjetoLoja\controller\ClienteController::abrirFormularioInserir");

   $router->post("cliente/inserir","Aluno\ProjetoLoja\controller\ClienteController::inserir_cliente");

   //Adicionar as rotas válidas a cima

   $result = $router->handler();

   if(!$result){
       http_response_code(404);
       echo "Página não encontrada";
       die();
   }

   echo $result($router->getParams());

?>
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

   $router->get("/produto/novo", "Aluno\ProjetoLoja\controller\ProdutoController::abrirFormularioInserir");

   $router->post("/produto/inserir","Aluno\ProjetoLoja\controller\ProdutoController::inserirProduto");

   $router->get("/Produtos","Aluno\ProjetoLoja\controller\ProdutoController::abrirListarProdutos");

   $router->get("/produto/alterar/{id}","Aluno\ProjetoLoja\controller\ClienteController::abrirFormularioAlterar");

   $router->post('/produto/editar/{id}','Aluno\ProjetoPhp\controller\ClienteController::editarProduto');

   $router->get('/produto/excluir/{id}','Aluno\ProjetoPhp\controller\ClienteController::excluirProduto');
   

   $router->get("/cliente/novo","Aluno\ProjetoLoja\controller\ClienteController::abrirFormularioInserir");

   $router->post("/cliente/inserir","Aluno\ProjetoLoja\controller\ClienteController::inserirCliente");

   $router->get("/Clientes","Aluno\ProjetoLoja\controller\ClienteController::abrirListarClientes");

   $router->get("/cliente/alterar/{id}","Aluno\ProjetoLoja\controller\ClienteController::abrirFormularioAlterar");

   $router->post('/cliente/editar/{id}','Aluno\ProjetoPhp\controller\ClienteController::editarCliente');

   $router->get('/cliente/excluir/{id}','Aluno\ProjetoPhp\controller\ClienteController::excluirCliente');

   //Adicionar as rotas válidas a cima

   $result = $router->handler();

   if(!$result){
       http_response_code(404);
       echo "Página não encontrada";
       die();
   }

   echo $result($router->getParams());

?>
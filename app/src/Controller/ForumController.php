<?php

namespace App\Controller;

use App\Model\Categoria;
use App\Model\Topico;
use Slim\Http\Request;
use Slim\Http\Response;

class ForumController{

    private $container;

    public function __construct(\Container $container)
    {
        $this->container = $container;
    }

    public function showForumAction(Request $request, Response $response, $args){
        return $this->container->view->render($response, 'forumMain.tpl');
    }

    public function listCategoriesAction(Request $request, Response $response, $args){
        $allCategories = $this->container->categoriaDAO->getAll();

        $this->container->view['categoriesFull'] = $allCategories;

        return $this->container->view->render($response, 'listCategories.tpl');
    }

    public function novaCategoriaAction(Request $request, Response $response, $args){

        $categoria = new Categoria();

        try {
            if ($request->isPost()) {
                $nome = $request->getParsedBodyParam('nomeCategoria');
                $descricao = $request->getParsedBodyParam('descricaoCategoria');

                $categoria->setNome($nome);
                $categoria->setDescricao($descricao);

                $this->container->categoriaDAO->persist($categoria);
                $this->container->categoriaDAO->flush(); //Commit the transaction
                $this->container->view['success'] = "Informações atualizadas com sucesso";
            }
        }
        catch (\Exception $e){
            $this->container->view['error'] = $e->getMessage();
        }

        return $this->container->view->render($response, 'novaCategoria.tpl');
    }

    public function novoTopicoAction(Request $request, Response $response, $args){
        $topico = new Topico();
        $allCategories = $this->container->categoriaDAO->getAll();

        try{
            if($request->isPost()){
                $assunto = $request->getParsedBodyParam('topic_subject');
                $data = date('Y-m-d H:i:s');
                $categoria = $request->getParsedBodyParam('topic_cat');
                $autor = $_SESSION['id'];

                $topico->setAssunto($assunto);
                $topico->setData($data);
                $topico->setCategoria($categoria);
                $topico->setUsuario($autor);

                $this->container->topicoDAO->persist($topico);
                $this->container->topicoDAO->flush();
                $this->container->view['success'] = "Cadastros na tabela Tópico ok";
            }
        }catch (\Exception $e){
            $this->container->view['error'] = $e->getMessage();
        }

        if(!isset($allCategories))
            $this->container->view['error'] = 'Você não tem categorias cadastradas!';

        $this->container->view['categoriesFull'] = $allCategories;
        return $this->container->view->render($response, 'novoForum.tpl');
    }

}
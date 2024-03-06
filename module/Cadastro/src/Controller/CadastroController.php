<?php

namespace Cadastro\Controller;

use Cadastro\Model\CadastroTable;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Model\CadastroTable

class CadastroController extends AbstractActionController{
    private $table;

    public function __construct() {
        $this->table = new CadastroTable();
    }
    
    public function indexAction() {
        return new ViewModel (['cadastros' => $this->table-> getAll()]);
    }
    
    public function adicionarAction (){
        return new ViewModel();
    }

    public function salvarAction (){
        return new ViewModel();
    }

    public function editarAction(){
        return new ViewModel();
    }
    public function removerAction (){
        return new ViewModel();
    }
    public function confirmacaoAction (){
        return new ViewModel();
    }
}

/*Essas funçoes que fazem parte da class CadastroController, tem o papel de executar ações dentro da página. elas alteram a URL para 
cada url seguirá desse modo:
/pessoa => index
/pessoa/adicionar => adicionarAction
/pessoa/salvar => salvarAction
/pessoa/editar => editarAction
/pessoa/confirmacao => confirmacaoAction
/pessoa/remover => recomerAction
*/
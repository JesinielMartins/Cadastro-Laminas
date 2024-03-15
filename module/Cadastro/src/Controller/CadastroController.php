<?php
namespace Cadastro\Controller;

use Cadastro\Model\CadastroTable;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class CadastroController extends AbstractActionController {
   
    private $table;

    public function __construct(CadastroTable $table) {
        $this->table = $table;
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
};

/*Essas funçoes que fazem parte da class CadastroController, tem o papel de executar ações dentro da página. elas alteram a URL para 
cada url seguirá desse modo:
/cadastro => index
/cadastro/adicionar => adicionarAction
/cadastro/salvar => salvarAction
/cadastro/editar => editarAction
/cadastro/confirmacao => confirmacaoAction
/cadastro/remover => recomerAction
*/
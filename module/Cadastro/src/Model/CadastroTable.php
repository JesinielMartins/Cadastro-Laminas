<?php
namespace Cadastro\Model;

use Laminas\Db\TableGateway\TableGatewayInterface;
use RuntimeException;

class CadastroTable {

    private $tableGateway;
    public function __construct(TableGatewayInterface $tableGateway) {
        return $this->tableGateway = $tableGateway;
    }

    public function getAll() {
        return $this-> tableGateway-> select();
    }
    public function getCadastro($id) {
        $id = (int) $id;
        $rowset = $this->tableGateway->select(['id' =>$id]);
        $row = $rowset->current();
        if (!$row) {
            throw new RuntimeException(sprintf('Não foi encontrado o id %d', $id));

        }
        return $row;
   }
   public function salvarCadastro(Cadastro $cadastro){

    $data = [
        'nome' => $cadastro->getNome(),
        'sobrenome' => $cadastro->getSobrenome(),
        'email' => $cadastro-> getEmail(),
        'situacao' => $cadastro->getSituacao(),
    ];

    $id = (int) $cadastro->getId();
    if ($id === 0) {
        $this->tableGateway->insert($data);
        return;
    }
    $this-> tableGateway->update($data,['id' =>$id]);
   }

   public function deletarCadastro($id) {
    $this-> tableGateway-> delete(['id' => (int)$id]);
   }

}
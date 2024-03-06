 <?php

 /* O Table gateway serve para modelar os dados da classe Cadastro no formato de tabela. Essa tabela será preenchida dentro do banco de dados que se formará com 
 com os atributos a serem preenchidos pelo usuário.*/
 
 /* Coisas novas: 
 
 __construct = É uma classe de conexão que quando 
 instanciada deve receber os parâmetros para se conectar a um banco de dados MySQL
 
 getAll = método utilizado para retornar tudo do banco de dados. Também pode ser utilizado o fetchAll.

Injeção de dependencia = quando uma classe utilizar as funções de outra classe B. A injeção de dependencia torna mais flexivel o código, gerando dependencias
de abstrações e não classes concretas(se fosse assim ficariamos recriando infinitas classes para infinitos objetos)
 
 */

 namespace Cadastro\Model;

use Laminas\Db\TableGateway\TableGateway;
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
        $row = $rowset-> current();
        if (!$row) {
            throw new RuntimeException(sprintf('Não foi encontrado o id %d', $id));

        }
        return $row;
   }
   public function salvarCadastro(Cadastro $cadastro){

    $data = [
        'nome' => nome->getNome(),
        'sobrenome' => sobrenome->getSobrenome(),
        'email' => email-> getEmail(),
        'situacao' => situacao->getSituacao(),
    ];

    $id = (int) $pessoa->getId();
    if ($id === 0) {
        $this-TableGateway->insert($data);
        return;
    }
    $this-> tableGateway->update($data,['id' =>$id]);
   }

   public function deletarCadastro($id) {
    $this-> tableGateway-> delete(['id' => (int)$id]);
   }

}
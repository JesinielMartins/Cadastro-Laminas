<?php
namespace Cadastro\Model;

 class Cadastro {
    private $id;
    private $sobrenome;
    private $nome;
    private $email;
    private $situacao;

    public function exchangeArray(array $data) {
        $this->id = !empty($data['id']) ? $data['id'] : null;
        $this->nome = !empty($data['nome']) ? $data['nome'] : null;
        $this->sobrenome = !empty($data['sobrenome']) ? $data['sobrenome'] : null;
        $this->email = !empty($data['email']) ? $data['email'] : null;
        $this->situacao = !empty($data['situacao']) ? $data['situacao'] : null;
    }
    public function getId () {
        return $this->id;
        }
    public function setId ($id) {
          return  $this->id = $id;
        }
    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        return $this->nome = $nome;

    }
    public function getSobrenome() {
        return $this->sobrenome;
    }
    public  function setSobrenome($sobrenome) {
        return $this-> sobrenome = $sobrenome;
    }
    public  function getEmail () {
        return $this-> email;
    }
    public function setEmail($email){
        return $this-> email = $email;
    }
    public function getSituacao (){
        return $this->situacao;
        
    }
    public function setSituacao($situacao) {
        return $this->situacao = $situacao;
    }

};
/*este array, esta recebendo os atributos para armazenar os dados referentes a cada um deles dentro da classe Model . 
    Todos os metodos foram encapsulados com private para garantir que não sejam exibidos na tela.
COISAS NOVAS
    O que é $this? $this é o valor do objeto chamado.
    De modo que o $this se refere ao próprio objeto em si e te permite acessar aos propriedades e métodos de uma Classe. Serve para acessar atributos e métodos de um objeto
    e reduzir ambiguidades quando há variáveis com mesmo nome*/

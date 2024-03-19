<?php
namespace Cadastro;

use Cadastro\Controller\CadastroController;
use Laminas\ModuleManager\Feature\ConfigProviderInterface;
use Laminas\Db\ResultSet\ResultSet;
use Laminas\Db\Adapter\AdapterInterface;
use Laminas\Db\TableGateway\TableGateway;

class Module implements ConfigProviderInterface {

    public function getConfig(){
        return include __DIR__. '/../config/module.config.php';
    }

    public function getServiceConfig() {
        return [
            'factories' => [
                Model\CadastroTable::class => function($container) {
                    $tableGateway = $container->get(Model\CadastroTable::class);
                    return new Model\CadastroTable($tableGateway);
                            
                },

                Model\CadastroTable::class => function($container) {
                    $dbAdapter = $container->get(AdapterInterface::class);
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype-> setArrayObjectPrototype(new Model\Cadastro());
                    return new TableGateway('cadastro', $dbAdapter, null, $resultSetPrototype);
                    },
                ]
            ];
    }


    public function getContollerConfig() {
        return [
            'factories' => [
                CadastroController::class => function($container) {
                    $tableGateway = $container->get(Model\CadastroTable::class);
                    return new CadastroController($tableGateway);
                 },
              ]
         ];
    }
}
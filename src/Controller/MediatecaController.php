<?php

namespace Drupal\mediateca\Controller;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Connection;
use Drupal\Core\Messenger\MessengerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class MediatecaController extends ControllerBase{

    /**
     * @var \Drupal\Core\Messenger\MessengerInterface
     */
    protected $messenger;
    protected $connection;

    public function __construct(MessengerInterface $messenger, Connection $connection){
        $this->messenger = $messenger;
        $this->connection = $connection;
    }

    public static function create(ContainerInterface $container)
    {
        return new static(
            $container->get('messenger'),
            $container->get('database')
        );
    }

    public function content(){

        $result = $this->connection->select('node_field_data', 'n')
            ->fields('n', ['nid', 'title'])
            ->execute()
            ->fetchAll();

        dpm($result);

        $this->messenger->addMessage('Hola Mundo');

        $output = [];
        $output['primero'] = [
            '#markup' => '<h1>Este es el primer parrafo</h1>',
        ];
        return $output;
    }
}
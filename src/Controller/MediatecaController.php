<?php

namespace Drupal\mediateca\Controller;
use Drupal\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Connection;
use Drupal\Core\Messenger\MessengerInterface;

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

        $node_manager = $this->entityTypeManager()->getStorage('node');

        $node = $node_manager->load(1);


        dpm($node);

        $result = $this->connection->select('node_field_data', 'n')
            ->fields('n', ['nid', 'title', 'type'])
            ->execute()
            ->fetchAll();


        $output = [];
        $output['primero'] = [
            '#markup' => '<h1>Este es el primer parrafo</h1>',
        ];
        return $output;
    }
}
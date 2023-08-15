<?php

namespace Drupal\mediateca\Controller;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Messenger\MessengerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class MediatecaController extends ControllerBase{

    /**
     * @var \Drupal\Core\Messenger\MessengerInterface
     */
    protected $messenger;

    public function __construct(MessengerInterface $messenger){
        $this->messenger = $messenger;
    }

    public static function create(ContainerInterface $container)
    {
        return new static(
            $container->get('messenger')
        );
    }

    public function content(){


        $this->messenger->addMessage('Hola Mundo');

        $output = [];
        $output['primero'] = [
            '#markup' => '<h1>Este es el primer parrafo</h1>',
        ];
        return $output;
    }
}
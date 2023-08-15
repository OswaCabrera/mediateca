<?php

namespace Drupal\mediateca\Controller;
use Drupal\Core\Controller\ControllerBase;

class MediatecaController extends ControllerBase{
    public function content(){


        $messenger = \Drupal::messenger();

        $messenger->addMessage('Hola Mundo');
        $output = [];
        $output['primero'] = [
            '#markup' => '<h1>Este es el primer parrafo</h1>',
        ];
    }
}
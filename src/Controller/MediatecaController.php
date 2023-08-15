<?php

namespace Drupal\mediateca\Controller;
use Drupal\Core\Controller\ControllerBase;

class MediatecaController extends ControllerBase{
    public function content(){
        $output = '';
        $output .= '<p>Esta es la pagina de ayuda del modulo Escuela</p>';
        return [
            '#type' => 'markup',
            '#markup' => $output,
        ];
    }
}
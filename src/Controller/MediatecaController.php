<?php

namespace Drupal\mediateca\Controller;
use Drupal\Core\Controller\ControllerBase;
use http\Client\Response;

class MediatecaController extends ControllerBase{
    public function content(){
        return new Response('Hola desde el controlador');
    }
}
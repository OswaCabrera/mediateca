<?php

namespace Drupal\mediateca\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *     id = "mediateca_block",
 *     admin_label = @Translation("Mediateca Block"),
 *     category = @Translation("Mediateca Block")
 * )
 */

class MediatecaBlock extends BlockBase {

        public function build(){
            $output = [];
            $output['primero'] = [
                '#markup' => '<h1>Este es el primer bloque</h1>',
            ];
            return $output;
        }
}
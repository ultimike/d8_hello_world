<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Hello, world routes.
 */
class HelloController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build($name) {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('Hello ' . $name . '!'),
    ];

    return $build;
  }

}

<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class HelloController.
 *
 * @package Drupal\hello_world\Controller
 */
class HelloController extends ControllerBase {

  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello($name) {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Hello ' . $name . '!'),
    ];
  }

}

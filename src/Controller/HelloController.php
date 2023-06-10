<?php declare(strict_types = 1);

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Hello, World routes.
 */
final class HelloController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function __invoke($name): array {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('Hello @name!', ['@name' => $name]),
    ];

    return $build;
  }

}

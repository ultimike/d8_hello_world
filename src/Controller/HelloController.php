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
  public function __invoke(): array {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}

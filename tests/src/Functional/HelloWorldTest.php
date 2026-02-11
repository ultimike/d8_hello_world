<?php

namespace Drupal\Tests\hello_world\Functional;

use Drupal\Tests\BrowserTestBase;
use Drupal\user\UserInterface;
use PHPUnit\Framework\Attributes\Test;

/**
 * Tests that the HelloWorld page is reachable.
 *
 * @group hello_world
 */
class HelloWorldTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'hello_world',
  ];

  /**
   * A test user.
   *
   * @var \Drupal\user\UserInterface
   */
  protected UserInterface $testUser;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();
  }

  /**
   * Tests that the Hello World page works.
   */
  #[Test]
  public function testHelloWorldPage(): void {
    // Create and log in an administrative user.
    $this->testUser = $this->drupalCreateUser([
      'access content',
    ]);
    $this->drupalLogin($this->testUser);

    $this->drupalGet('/hello-world');
    $this->assertSession()->statusCodeEquals(200);

    // Test that the page title is correct.
    $this->assertSession()->pageTextContains('Hello, world!');

    // Test that the "name" argument works.
    $this->drupalGet('/hello-world/mike');
    $this->assertSession()->statusCodeEquals(200);

    // Test that the page title is correct.
    $this->assertSession()->pageTextContains('Hello, mike!');
  }

}

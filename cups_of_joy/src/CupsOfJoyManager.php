<?php
/**
 * @file
 * Contains CupsOfJoyManager.
 */

namespace Drupal\cups_of_joy;

use Drupal\Core\Plugin\DefaultPluginManager;
use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;

/**
 * CupsOfJoy plugin manager.
 */
class CupsOfJoyManager extends DefaultPluginManager {
  /**
   * Constructs an CupsOfJoyManager object.
   *
   * @param \Traversable $namespaces
   *   An object that implements \Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations,
   * @param \Drupal\Core\Cache\CacheBackendInterface $cache_backend
   *   Cache backend instance to use.
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   The module handler to invoke the alter hook with.
   */
  public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {
    parent::__construct('Plugin/Beverage', $namespaces, $module_handler, 'Drupal\cups_of_joy\BeverageInterface', 'Drupal\cups_of_joy\Annotation\Beverage');

    $this->alterInfo('cupsofjoy_beverages_info');
    $this->setCacheBackend($cache_backend, 'cupsofjoy_beverages');
  }
}

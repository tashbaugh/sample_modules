<?php
/**
 * @file
 * Contains \Drupal\cups_of_joy\Annotation\Beverage.
 */

namespace Drupal\cups_of_joy\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a beverage item annotation object.
 *
 * Plugin Namespace: Plugin\cups_of_joy\beverage
 *
 * @see \Drupal\cups_of_joy\Plugin\CupsOfJoyManager
 * @see plugin_api
 *
 * @Annotation
 */
class Beverage extends Plugin {

  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The name of the beverage.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $name;

  /**
   * The description of the beverage.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $description;

  /**
   * The sku of a beverage.
   *
   * @var string
   */
  public $sku;

  /**
   * The image name for display
   *
   * @var string
   */
  public $imagename;

  /**
   * The image alt text
   *
   * @ingroup plugin_translatable
   */
  public $imagealt;

}

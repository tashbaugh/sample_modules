<?php
/**
 * @file
 * Provides Drupal\cups_of_joy\BeverageInterface
 */

namespace Drupal\cups_of_joy;

use Drupal\Component\Plugin\PluginInspectionInterface;

/**
 * Defines an interface for beverage plugins.
 */
interface BeverageInterface extends PluginInspectionInterface {

  /**
   * Return the name of the beverage.
   *
   * @return string
   */
  public function getName();

  /**
   * Return the description of the beverage.
   *
   * @return string
   */
  public function getDescription();

  /**
   * A SKU for the beverage.
   *
   * @return string
   */
  public function getSKU();

  /**
   * An image name for use in display.
   *
   * @return string
   */
  public function getImageName();

  /**
   * An image alt text for use in display.
   *
   * @return string
   */
  public function getImageAlt();
}

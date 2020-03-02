<?php
/**
 * @file
 * Contains \Drupal\cups_of_joy\Plugin\Beverage\Coffee.
 */

namespace Drupal\cups_of_joy\Plugin\Beverage;

use Drupal\cups_of_joy\BeverageBase;

/**
 * Provides a 'coffee' beverage.
 *
 * @Beverage(
 *   id = "coffee",
 *   name = @Translation("Coffee"),
 *   description = @Translation("Breakfast Blend 12oz - Dark Roast, A popular blend of Medium Roast and French Roast coffee blended to perfection"),
 *   sku = "10354",
 *   imagename = "beverage-image.jpeg",
 *   imagealt = "Beverage Image"
 * )
 */
class Coffee extends BeverageBase {
  public function getGrindTypes() {
    return ['Whole Bean', 'Drip Grind', 'Espresso Grind'];
  }
}

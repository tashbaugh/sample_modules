<?php
/**
 * @file
 * Provides Drupal\cups_of_joy\BeverageBase.
 */

namespace Drupal\cups_of_joy;

use Drupal\Component\Plugin\PluginBase;

class BeverageBase extends PluginBase implements BeverageInterface {

  public function getId() {
    return $this->pluginDefinition['id'];
  }

  public function getName() {
    return $this->pluginDefinition['name'];
  }

  public function getDescription() {
    return $this->pluginDefinition['description'];
  }

  public function getSKU() {
    return $this->pluginDefinition['sku'];
  }

  public function getImageName() {
    return $this->pluginDefinition['imagename'];
  }

  public function getImageAlt() {
    return $this->pluginDefinition['imagealt'];
  }
}

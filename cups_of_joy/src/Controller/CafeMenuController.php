<?php

namespace Drupal\cups_of_joy\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Controller\ControllerInterface;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class CafeMenuController extends ControllerBase implements ContainerInjectionInterface {

  public static function create(ContainerInterface $container) {
    return new static($container->get('module_handler'));
  }

  public function page() {
    $manager = \Drupal::service('plugin.manager.cupsofjoy');
    $plugins = $manager->getDefinitions();
    $items = [];
    foreach ($plugins as $beverage) {
      $instance = $manager->createInstance($beverage['id']);
      if ($instance->getId() == 'coffee') {
        $grindTypes = $instance->getGrindTypes();
      }

      //$imageName = "beverage-image.jpeg";

      $imageUrl = file_create_url(drupal_get_path('module', 'cups_of_joy') . '/images/' . $instance->getImageName());
      //$imageAlt = "Beverage Image";

      $item = [
        'name' => $instance->getName(),
        'sku' => $instance->getSku(),
        'description' => $instance->getDescription(),
        'grindtypes' => $grindTypes,
        'imageurl' => $imageUrl,
        'imagealt' => $instance->getImageAlt(),
      ];

      $items[$instance->getId()] = $item;
    }

    $build[] = [
      '#type' => 'markup',
      '#cache' => [
        'max-age' => 0,
      ],
      '#theme' => 'cups_of_joy',
      '#items' => $items,
    ];

    return $build;
  }
}

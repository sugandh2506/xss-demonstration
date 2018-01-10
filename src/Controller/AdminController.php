<?php

namespace Drupal\xss_demonstration\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Connection;
use Symfony\Component\HttpFoundation\Request;


class AdminController extends ControllerBase {
	public function showResults(Request $request) {
    $build['test'] = ['#markup' => $request->query->get('title')];
    return $build;
  }
}

<?php

namespace Drupal\recalendar\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

/**
 * Provides endpoints for events and meetings data (consumed by calendar).
 */
class RecalendarEndpointController extends ControllerBase {

  /**
   * Returns a simple page from a static JSON file.
   *
   * @return string
   *   Json data.
   */
  public function eventsEndpoint() {

    $data = file_get_contents('public://data/data_export_events.json');
    $response = new Response($data);

    return $response;

  }

}

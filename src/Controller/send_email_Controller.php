<?php
/**
 * @file
 * Contains \Drupal\send_email\Controller\sendemail_Controller.
 */
namespace Drupal\send_email\Controller;
class send_email_Controller {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello, World!'),
    );
  }
}
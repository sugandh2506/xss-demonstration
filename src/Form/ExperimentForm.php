<?php

namespace Drupal\xss_demonstration\Form;


use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class ExperimentForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'xss_demonstration';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['xss_title'] = [
      '#type' => 'textfield',
      '#title' => 'XSS demo',
    ];
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Submit'),
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    
    $data= $form_state->getValue('xss_title');
    //$data= strip_tags($form_state->getValue('xss_title'));
    $form_state->setRedirect('xss.demonstration.controller', [], ['query' => [
    'title' => $data,
    ]]);
  }

  public function validateForm(array &$form, FormStateInterface $form_state) {

  }
}

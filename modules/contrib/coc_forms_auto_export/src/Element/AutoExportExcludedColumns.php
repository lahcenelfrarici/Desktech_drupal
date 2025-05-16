<?php

namespace Drupal\coc_forms_auto_export\Element;

use Drupal\webform\Entity\Webform as WebformEntity;
use Drupal\webform\Element\WebformExcludedBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a webform element for auto export excluded columns.
 *
 * @FormElement("auto_export_excluded_columns")
 */
class AutoExportExcludedColumns extends WebformExcludedBase {

  /**
   * Processes a webform elements webform element.
   */
  public static function processWebformExcluded(&$element, FormStateInterface $form_state, &$complete_form) {
    $options = static::getWebformExcludedOptions($element);

    $element['#tree'] = TRUE;

    // Add validate callback.
    $element += ['#element_validate' => []];
    array_unshift($element['#element_validate'], [get_called_class(), 'validateWebformIncluded']);

    // Get selected columns as the default value.
    if (!empty($options['checkbox'])) {
      $columns_keys = array_keys($options['checkbox']);
      $columns_default_value = array_combine($columns_keys, $columns_keys);
    }
    else {
      $columns_default_value = [];
    }

    // Display columns in sortable table select element.
    $element['columns_table'] = [
      '#type' => 'webform_tableselect_sort',
      '#header' => static::getWebformExcludedHeader(),
      '#options' => $options['options'],
      '#default_value' => $columns_default_value,
    ];

    return $element;
  }

  /**
   * Callback function for #type 'table'.
   */
  public static function validateWebformIncluded(array &$element, FormStateInterface $form_state, &$complete_form) {
    $triggering_element = $form_state->getTriggeringElement();
    if (empty($triggering_element['#submit'])) {
      return;
    }

    if (!empty($element['#multiple'])) {
      if (!is_array($element['#value']) || !count(array_filter($element['#value']))) {
        $form_state->setError($element, t('No items selected.'));
      }
    }
    elseif (!isset($element['#value']) || $element['#value'] === '') {
      $form_state->setError($element, t('No item selected.'));
    }

    $value = array_filter($element['columns_table']['#value']);

    // Unset columns_table and set the element's value to excluded.
    $form_state->setValueForElement($element['columns_table'], NULL);
    $element['#value'] = $value;
    $form_state->setValueForElement($element, $value);
  }

  /**
   * {@inheritdoc}
   */
  public static function getWebformExcludedHeader() {
    return [
      'title' => t('Title'),
      'name' => t('Name'),
      'type' => t('Date type/Element type'),
    ];
  }

  /**
   * {@inheritdoc}
   */
  public static function getWebformExcludedOptions(array $element) {
    $webform = WebformEntity::load($element['#webform_id']);
    $options = [];

    $elements = $webform->getElementsInitializedFlattenedAndHasValue('view');
    $token_manager = \Drupal::service('webform.token_manager');
    $elements = $token_manager->replace($elements, $webform);

    if (!empty($element['#default_value'])) {
      $included_elements = $element['#default_value'];
      $excluded_elements = array_diff_key($elements, $included_elements);
      $excluded_elements_keys = array_keys($excluded_elements);
      $elements_keys = array_merge(array_keys($included_elements), $excluded_elements_keys);

      foreach ($elements_keys as $key) {
        if (!in_array($key, $excluded_elements_keys)) {
          $options['checkbox'][$key] = $key;
        }
        $options['options'][$key] = [
          'title' => $elements[$key]['#admin_title'] ?? $elements[$key]['#title'] ?? $key,
          'name' => $key,
          'type' => $elements[$key]['#type'] ?? '',
        ];
      }
    }
    else {
      foreach ($elements as $key => $value) {
        $options['options'][$key] = [
          'title' => $value['#admin_title'] ?? $value['#title'] ?? $key,
          'name' => $key,
          'type' => $value['#type'] ?? '',
        ];
      }
    }

    return $options;
  }

}

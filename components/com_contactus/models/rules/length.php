<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla formrule library
jimport('joomla.form.formrule');

/**
 * Form Rule class for the Joomla Framework.
 */
class JFormRuleLength extends JFormRule
{

  /**
   * Simple rule which uses the maxlength attribute to test whether the value is too long or not
   *
   * @param   SimpleXMLElement  $element  The SimpleXMLElement object representing the <field /> tag for the form field object.
   * @param   mixed             $value    The form field value to validate.
   * @param   string            $group    The field name group control value. This acts as as an array container for the field.
   *                                      For example if the field has name="foo" and the group value is set to "bar" then the
   *                                      full field name would end up being "bar[foo]".
   * @param   JRegistry         $input    An optional JRegistry object with the entire data set to validate against the entire form.
   * @param   JForm             $form     The form object for which the field is being tested.
   *
   * @return  boolean  True if the value is valid, false otherwise.
   *
   * @since   11.1
   * @throws  UnexpectedValueException if rule is invalid.
   */
  public function test(SimpleXMLElement $element, $value, $group = null, JRegistry $input = null, JForm $form = null)
  {

    $maxlength = ((int) $element['maxlength']) ? (int) $element['maxlength'] : '';

    // If value is greater than 750 characters they will need to try again
    if (utf8_strlen($value) > $maxlength && !empty($maxlength)) 
    {
      return false;
    }

    return true;
  }

}

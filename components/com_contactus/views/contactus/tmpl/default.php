<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
JHtml::_('behavior.formvalidation');
JHtml::_('behavior.tooltip');
?>
<h1 class="page-header">
  <?php echo $this->document->title; ?>
</h1>

<form id="contact-form" action="<?php echo JRoute::_('index.php?option=com_contactus'); ?>" method="post" class="form-horizontal">
  <fieldset class="adminform">
    <legend><?php echo JText::_('COM_CONTACTUS_CONTACT_US'); ?></legend>

    <?php foreach ($this->form->getFieldset('contactus') as $field) : ?>
      <?php if (!$field->hidden) : ?>
        <div class="control-group">
          <div class="control-label">
            <?php echo $field->label; ?>
          </div>
          <div class="controls">
            <?php echo $field->input; ?>
          </div>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>
  </fieldset> 
  <div class="form-actions">
    <button class="btn btn-primary validate" type="submit"><?php echo JText::_('COM_CONTACTUS_CONTACT_SEND'); ?></button>
    <input type="hidden" name="option" value="com_contactus" />
    <input type="hidden" name="task" value="contactus.send" />
    <input type="hidden" name="return" value="<?php echo $this->return_page; ?>" />
    <?php echo JHtml::_('form.token'); ?>
  </div>
</form>
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

    <div class="form-group">
      <?php echo $this->form->getLabel('nature'); ?>
      <div class="col-sm-9">
        <?php echo $this->form->getInput('nature'); ?>
      </div>
    </div>
    <div class="form-group">
      <?php echo $this->form->getLabel('name'); ?>
      <div class="col-sm-9">
        <?php echo $this->form->getInput('name'); ?>
      </div>
    </div>
    <div class="form-group">
      <?php echo $this->form->getLabel('email'); ?> 
      <div class="col-sm-9">
        <?php echo $this->form->getInput('email'); ?>
      </div>
    </div>
    <div class="form-group">
      <?php echo $this->form->getLabel('tel'); ?> 
      <div class="col-sm-9">
        <?php echo $this->form->getInput('tel'); ?>
      </div>
    </div>
    <div class="form-group">
      <?php echo $this->form->getLabel('message'); ?> 
      <div class="col-sm-9">
        <?php echo $this->form->getInput('message'); ?>
      </div>
    </div>
    <div class="form-group">
      <?php echo $this->form->getLabel('captcha'); ?>
      <div class="col-sm-9">
        <?php echo $this->form->getInput('captcha'); ?>
      </div>
    </div>
    <div class="col-sm-9 col-sm-offset-3">
      <button class="btn btn-primary btn-lg btn-block " type="submit">
        <?php echo JText::_('COM_CONTACTUS_SEND_MESSAGE'); ?>
      </button>
      <input type="hidden" name="task" value="contactus.send" />
      <?php echo JHtml::_('form.token'); ?>
    </div>
  </fieldset>
</form>
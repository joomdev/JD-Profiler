<?php
 // Licensed under the GPL v3
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

//jimport('joomla.form.formfield');

class JFormFieldJDLayout extends JFormFieldList {

   protected $type = 'jdlayout';

   public function getInput() {
      $options = $this->getOptions();
      $layout = new JLayoutFile('jdlayout', JPATH_ROOT . '/modules/mod_jdprofiler/fields/layouts');
      return $layout->render(['field' => $this,'options'=>$options]);
   }

}

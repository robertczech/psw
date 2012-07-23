<?php

defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view');


class PswViewPsw extends JView
{
	function display($tpl = null)
	{
		$model = $this->getModel(); 
		$psw = $model->getPsw();
		$this->assignRef( 'psw', $psw );
		parent::display($tpl);
	}
}

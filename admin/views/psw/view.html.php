<?php

defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view');


class PswsViewPsw extends JView
{
	function display($tpl = null)
	{
		JToolBarHelper::save();
		$model = $this->getModel(); 
		$psw = $model->getPsw();
		$this->assignRef( 'psw', $psw );
		parent::display($tpl);
	}
	function form($tpl = null)
	{
		//parent::display($tpl);
	}
}

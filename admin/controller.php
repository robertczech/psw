<?php

defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.controller');


class PswController extends JController
{
	function display()
	{
		parent::display();
	}
	function save()
	{
		$model = $this->getModel('wykladowca');

		if ($model->store($post)) {
			$msg = JText::_( 'Greeting Saved!' );
		} else {
			$msg = JText::_( 'Error Saving Greeting' );
		}

		// Check the table in so it can be edited.... we are done with it anyway
		$link = 'index.php?option=com_psw';
		$this->setRedirect($link, $msg);
	}

}

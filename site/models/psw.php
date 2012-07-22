<?php
 
defined( '_JEXEC' ) or die( 'Restricted access' );
 
jimport( 'joomla.application.component.model' );

class PswModelPsw extends JModel
{

    function getGreeting()
    {
        return 'psw';
    }
}

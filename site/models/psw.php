<?php
 
defined( '_JEXEC' ) or die( 'Restricted access' );
 
jimport( 'joomla.application.component.model' );

class PswModelPsw extends JModel
{

    function getPsw()
    {
        $query = "SELECT * FROM #__psw"; 
        $dane = $this->_getList($query);   
        return $dane;
    }
}

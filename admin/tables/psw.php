<?php defined('_JEXEC') or die('Restricted access');   
class TablePsw extends JTable 
{ 
    var $id = null; 
    var $psw = null; 
    function __construct(&$db) 
    { 
        parent::__construct( '#__psw', 'id', $db); 
     }   
}
?>

<?php

require_once(dirname(__FILE__)  . '/vendor/bin/doctrine.php');  
spl_autoload_register(array('Doctrine',  'autoload'));  
$conn  =  Doctrine_Manager::connection('mysql://root:9940560@localhost/doctrine_1',  'doctrine');  
Doctrine_Core::generateModelsFromDb('models',  array('doctrine'), array('generateTableClasses' => true));  

?>

<?php
return array(
	'_root_'  => 'info/list',  // The default route
	'_404_'   => 'info/item',    // The main 404 route
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
	'api/v1/demo' => 'api/list',
);

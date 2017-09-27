<?php
$config['db'] = array(
	'host' 			=> 'mysql5.gear.host',
	'username'		=> 'medium',
	'password'		=> 'Vn8F4~5oBH~j',
	'dbname'		=> 'medium'
);

try {
	$db = new PDO('mysql:host=' .$config['db']['host'] . ';dbname=' . $config['db']['dbname'], $config['db']['username'], $config['db']['password']);
}
catch(PDOException $e) { 
    echo $e->getMessage();
}
?>

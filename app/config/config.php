<?php

return new \Phalcon\Config(array(
	'database' => array(
		'adapter'     => 'Mysql',
		'host'        => '127.0.0.1',//127.13.71.2
		'username'    => 'root',//admin97vXfuX
		'password'    => 'qazwsx2013@',//j4AAWBCXz5Tb
		'dbname'      => 'blog',
	),
	'application' => array(
		'controllersDir' => __DIR__ . '/../../app/controllers/',
		'modelsDir'      => __DIR__ . '/../../app/models/',
		'formsDir'       => __DIR__ . '/../../app/forms/',
		'viewsDir'       => __DIR__ . '/../../app/views/',
		'libraryDir'     => __DIR__ . '/../../app/library/',
		'pluginsDir'     => __DIR__ . '/../../app/plugins/',
		'cacheDir'       => __DIR__ . '/../../app/cache/',
		'baseUri'        => '/',
		'publicUrl'		 => 'duythien.dev',
		'cryptSalt'		 => '$9diko$.f#11'
	),
	'mail' => array(
		'fromName' => 'fcduythien',
		'fromEmail' => 'fcduythien@gmail.com',
		'smtp' => array(
			'server' => 'smtp.gmail.com',
			'port' => 587,
			'security' => 'tls',
			'username' => '',
			'password' => '',
		)
	),
	'amazon' => array(
		'AWSAccessKeyId' => "",
		'AWSSecretKey' => ""
	)
));

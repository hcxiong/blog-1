<?php

error_reporting(E_ALL);

//setlocale(LC_ALL, 'vi_VN.UTF-8');


try {

	/**
	 * Read the configuration
	 */
	$config = include __DIR__ . "/../app/config/config.php";

	/**
	 * Read auto-loader
	 */
	include __DIR__ . "/../app/config/loader.php";

	/**
	 * Read services
	 */
	include __DIR__ . "/../app/config/services.php";

	/**
	 * Handle the request
	 */
	$application = new Phalcon\Mvc\Application($di);

	echo $application->handle()->getContent();

} catch (Exception $e) {
	echo $e->getMessage(), '<br>';
	echo nl2br(htmlentities($e->getTraceAsString()));
	//phpinfo();
	/*$response = new Phalcon\Http\Response();

	//Set status code
	$response->setStatusCode(404, "Not Found");

	//Set the content of the response
	$response->setContent("Sorry, the page doesn't exist");

	//Send response to the client
	$response->send();*/
}
